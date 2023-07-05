<?php
include "./dbconnect.php";
include "../functions.php";
$blogs = $maindb->blog;
$blogs_list = $blogs->find([]);
$first_blog = $blogs->findOne([]);
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $blog_content = $_POST['blog_content'];
    $tags = explode(", ",$_POST['tags']);
    $base64String = imageUpload($_FILES["thumbnail"]["name"], $_FILES["thumbnail"]["size"], $_FILES["thumbnail"]["type"], $_FILES["thumbnail"]["tmp_name"]);
    $largest = $first_blog->_id;
    foreach ($blogs_list as $blog) {
        if ($blog->_id > $largest) {
            $largest = $blog->_id;
        }
    }
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $cursor = $blogs->insertOne([
        '_id' => $largest + 1, 
        'title' => $title, 
        'author' => 1, 
        'time' => date("d-m-Y H:i:s", strtotime('now')),
        'content' => $blog_content,
        'thumbnail' => $base64String,
        'upvote' => [],
        'downvote' => [],
        'tags' => $tags,
        'accepted' => true,
        'comment' => []
    ]);
}

?>
<div class="block">
    <form action="" method="post" enctype="multipart/form-data" class="add-post-form">
        <label for="title">Title:</label><br>
        <input type="text" name="title"><br><br>
        <label for="blog_content">Content:</label><br>
        <textarea name="blog_content" cols="100" rows="20"></textarea><br><br>
        <label for="tags">Tags:</label><br>
        <textarea name="tags"></textarea><br><br>
        <label for="thumbnail">Thumbnail:</label><br>
        <input type="file" name="thumbnail" accept="image/png"><br><br>
        <button type="submit" name="submit"  value="submit" class="add-button submit">Add Post</button>
    </form>

</div>