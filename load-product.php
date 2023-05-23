<?php
$band_id = "1";
$query_product = "SELECT * FROM product WHERE band_id = $band_id";
$product = mysqli_query($conn, $query_product);
$result_band = mysqli_fetch_array($product);
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
?>