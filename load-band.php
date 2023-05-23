<?php
$band_id = 1;
$query_band = "SELECT * FROM band WHERE id = $band_id";
$band = mysqli_query($conn, $query_band);
$result_band = mysqli_fetch_array($band);
$question = [];
for ($i = 0; $i < 5; $i++) {
    $query_question = "SELECT question".($i+1)." FROM band WHERE id = $band_id";
    $result_question = mysqli_query($conn, $query_question);
    if (mysqli_num_rows($result_question) > 0) {
        while ($row = mysqli_fetch_assoc($result_question)) {
            $question[$i] = json_decode($row["question".($i+1)]);
        }
    }
}
$i = 0;
$products_list = [];
$query_product = "SELECT * FROM product WHERE band_id = ".$result_band['id'];
$result_product = mysqli_query($conn, $query_product);
if (mysqli_num_rows($result_product) > 0) {
    while ($row = mysqli_fetch_assoc($result_product)) {
        $products_list[$i] = $row;
        $i++;
    }
}
?>