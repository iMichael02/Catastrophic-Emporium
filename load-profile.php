<?php
function bubble_Sort($my_array) {
	do {
		$swapped = false;
		for($i = 0; $i < sizeof($my_array)-1; $i++) {
			if(strtotime(substr($my_array[$i][0]->time, 0, 10)) > strtotime(substr($my_array[$i+1][0]->time, 0, 10))) {
				list($my_array[$i+1], $my_array[$i]) = array($my_array[$i], $my_array[$i+1]);
				$swapped = true;
			}
		}
	}
	while($swapped);
    return $my_array;
}
$members = $maindb->member;
$blogs = $maindb->blog;
$comments = $maindb->comment;
if (isset($_POST['id'])) {
    $profile = $members->findOne(['_id' => intval($_POST['id'])]);
} else {
    $profile = $members->findOne(['_id' => intval($_GET['id'])]);
}
$blogs_list = $blogs->find(['author' => $profile->_id]);
$comments_list = $comments->find(['_id' => ['$in' => $profile->comments]]);
$total_upvote = 0;
$total_downvote = 0;
foreach($blogs_list as $blog) {
    $total_upvote += sizeof($blog->upvote);
    $total_downvote += sizeof($blog->downvote);
}
foreach($comments_list as $comment) {
    $total_upvote += sizeof($comment->upvote);
    $total_downvote += sizeof($blog->downvote);
}
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "";
}
if ($page == "" || $page == 1) {
    $skip = 0;
} else {
    $skip = ($page*6)-6;
}
$page_count = $blogs->count(['author' => $profile->_id]);
$pages = ceil($page_count / 6);
$display_list = $blogs->find(
    ['author' => $profile->_id],
    ['limit' => 6,
    'skip' => $skip]
);
$timeline = [];
if(sizeof($profile->blogs) > 0) {
    $first_blog = $blogs->findOne(['author' => $profile->_id]);
    array_push($timeline, [$first_blog, "First Blog"]);
}
if (sizeof($profile->blogs) >= 10) {
    $cert_writer = $blogs->findOne(['author' => $profile->_id], ['skip' => 9]);
    array_push($timeline, [$cert_writer, "Certified Writer"]);
}
if (sizeof($profile->blogs) >= 20) {
    $the_creator = $blogs->findOne(['author' => $profile->_id], ['skip' => 19]);
    array_push($timeline, [$the_creator, "The Creator"]);
}
if (sizeof($profile->comments) >= 50) {
    $active_member = $comments->findOne(['author' => $profile->_id], ['skip' => 49]);
    array_push($timeline, [$active_member, "Active Member"]);
}
if ($timeline != []) {
    $timeline = bubble_Sort($timeline);
}
?>