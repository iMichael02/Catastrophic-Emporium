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
function imageUpload($fileName, $fileSize, $fileType, $fileTmpName) {
    $fileSize = $fileSize/1024;
    $base64String = "";
    if ($fileType == "image/png") {
        $random = rand(1111,9999);
        $newFileName = $random.$fileName;
        $uploadPath = "testUpload/".$newFileName;
        if(move_uploaded_file($fileTmpName,$uploadPath)){
            $imageData = file_get_contents($uploadPath);
            $base64String = base64_encode($imageData);
            unlink($uploadPath);
        }
    }
    if ($base64String != null) {
        return $base64String;
    }
    else {
        return "";
    }
}
function simpleQuickSort($arr)
{
    if(count($arr) <= 1){
        return $arr;
    }
    else{
        $pivot = $arr[0];
        $left = [];
        $right = [];
        for($i = 1; $i < sizeof($arr); $i++)
        {
            if($arr[$i][1] > $pivot[1]){
                $left[] = $arr[$i];
            }
            else{
                $right[] = $arr[$i];
            }
        }
        return (
            array_merge(simpleQuickSort($left), array($pivot), simpleQuickSort($right))
        );
    }
}
?>