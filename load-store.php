<?php
$products = $maindb->product;
$bands = $maindb->band;
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
$product_count = $products->count();
$pages = ceil($product_count / 6);
$products_list = $products->find([],
    ['limit' => 6,
    'skip' => $skip]
);
?>