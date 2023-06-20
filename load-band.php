<?php
$bands = $maindb->band;
$id = (int)$_GET['id'];
$band = $bands->findOne(
    ['_id' => $id]
);
$products = $maindb->product;
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
$product_count = $products->count(['band_id' => $band->_id]);
$pages = ceil($product_count / 6);
$products_list = $products->find(
    ['band_id' => $band->_id],
    ['limit' => 6,
    'skip' => $skip]
);
?>