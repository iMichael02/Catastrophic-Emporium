<?php
$genres = $maindb->genre;
$bands = $maindb->band;
$id = (int)$_GET['id'];
$genre = $genres->findOne(
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
$bands_id_list = $genre->bands;
$product_count = 0;
for ($i = 0; $i < sizeof($bands_id_list); $i++) {
    $product_count += $products->count(['band_id' => $bands_id_list[$i]]);
}
$pages = ceil($product_count / 6);
$products_list = $products->find(
    ['band_id' => array('$in' => $bands_id_list)],
    ['limit' => 6,
    'skip' => $skip]
);
?>