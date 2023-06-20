<?php
function bubble_Sort($my_array) {
	do {
		$swapped = false;
		for($i = 0; $i < sizeof($my_array)-1; $i++) {
			if($my_array[$i][1] < $my_array[$i+1][1]) {
				list($my_array[$i+1], $my_array[$i]) = array($my_array[$i], $my_array[$i+1]);
				$swapped = true;
			}
		}
	}
	while($swapped);
    return $my_array;
}
function search($searchterms_old) {
    global $products_list, $products, $products_skip, $blogs_list, $blogs, $blogs_skip;
    $products_match_list = [];
    $blogs_match_list = [];
    $products_id_list = [];
    $blogs_id_list = [];
    $searchterms = explode(' ', strtolower($searchterms_old));
    
    foreach ($products_list as $product) {
        $count = 0;
        foreach ($searchterms as $word) {
            if (in_array($word, (array)$product->tags)) {
                $count++;
            }
        }
        array_push($products_match_list, array($product, $count));
    }
    for ($i = 0; $i < sizeof($products_match_list); $i++) {
        if ($products_match_list[$i][1] == 0) {
            array_splice($products_match_list, $i, 1);
            $i--;
        }
    }
    $products_match_list = bubble_Sort($products_match_list);
    for ($i = 0; $i < sizeof($products_match_list); $i++) {
        array_push($products_id_list, $products_match_list[$i][0]->_id);
    }
    $products_count = sizeof($products_match_list);
    $products_pages = ceil($products_count / 6);
    $products_display_list = $products->find(
        ['_id' => ['$in' => $products_id_list]],
        ['limit' => 6,
        'skip' => $products_skip]
    );
    foreach ($blogs_list as $blog) {
        $count = 0;
        foreach ($searchterms as $word) {
            if (in_array($word, (array)$blog->tags)) {
                $count++;
            }
        }
        array_push($blogs_match_list, array($blog, $count));
    }
    for ($i = 0; $i < sizeof($blogs_match_list); $i++) {
        if ($blogs_match_list[$i][1] == 0) {
            array_splice($blogs_match_list, $i, 1);
            $i--;
        }
    }
    $blogs_match_list = bubble_Sort($blogs_match_list);
    for ($i = 0; $i < sizeof($blogs_match_list); $i++) {
        array_push($blogs_id_list, $blogs_match_list[$i][0]->_id);
    }
    $blogs_count = sizeof($blogs_match_list);
    $blogs_pages = ceil($blogs_count / 6);
    $blogs_display_list = $blogs->find(
        ['_id' => ['$in' => $blogs_id_list]],
        ['limit' => 6,
        'skip' => $blogs_skip]
    );
    $spaced_searchterms = str_replace(' ', '_space_', $searchterms_old);
    return array($products_pages, $products_display_list, $blogs_pages, $blogs_display_list, $spaced_searchterms);
}
$products = $maindb->product;
$products_list = $products->find();
$bands = $maindb->band;
$bands_list = $bands->find();
$blogs = $maindb->blog;
$blogs_list = $blogs->find();
$members = $maindb->member;
$members_list = $members->find();
if (isset($_GET['products_page'])) {
    $products_page = $_GET['products_page'];
} else {
    $products_page = "";
}
if ($products_page == "" || $products_page == 1) {
    $products_skip = 0;
} else {
    $products_skip = ($products_page*6)-6;
}
if (isset($_GET['blogs_page'])) {
    $blogs_page = $_GET['blogs_page'];
} else {
    $blogs_page = "";
}
if ($blogs_page == "" || $blogs_page == 1) {
    $blogs_skip = 0;
} else {
    $blogs_skip = ($blogs_page*6)-6;
}

if (isset($_POST['search'])) {
    $searchterms_old = str_replace('_space_', ' ', $_POST['search']);
    list($products_pages, $products_display_list, $blogs_pages, $blogs_display_list, $spaced_searchterms) = search($searchterms_old);
} elseif (isset($_GET['search'])) {
    $searchterms_old = str_replace('_space_', ' ', $_GET['search']);
    list($products_pages, $products_display_list, $blogs_pages, $blogs_display_list, $spaced_searchterms) = search($searchterms_old);
}
?>