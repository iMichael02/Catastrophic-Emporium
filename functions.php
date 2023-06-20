<?php
function commas($n) {
    $n *=1000;
    $n = floor($n);
    $n /= 1000;
    $n = strval($n);
    $i = strlen($n)-3;
    while ($i > 0) {
        $n = substr_replace($n, ",", $i, 0);
        $i -= 3;
    }
    return $n;
}
?>