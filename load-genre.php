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
if (sizeof($type) > 0) {
    $products_result = $products->find(
        ['band_id' => ['$in' => $bands_id_list], 
        'type' => ['$in' => $type]],
        ['limit' => 6,
        'skip' => $skip]
    );
    $products_result_total = $products->find(
        ['band_id' => ['$in' => $bands_id_list], 
        'type' => ['$in' => $type]]);
    $product_count = count($products_result_total->toArray());
} else {
    $products_result = $products->find(
        ['band_id' => ['$in' => $bands_id_list]],
        ['limit' => 6,
        'skip' => $skip]
    );
    $product_count = $products->count(['band_id' => ['$in' => $bands_id_list]]);
}
$products_list = [];
foreach($products_result as $prod) {
    array_push($products_list, $prod);
}
$pages = ceil($product_count / 6);
?>