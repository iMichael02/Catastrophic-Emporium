<?php
include "./dbconnect.php";
if (isset($_POST['submit'])) {
    $fileName = $_FILES["thumbnail"]["name"];
    $fileSize = $_FILES["thumbnail"]["size"]/1024;
    $fileType = $_FILES["thumbnail"]["type"];
    $fileTmpName = $_FILES["thumbnail"]["tmp_name"];
    echo "<scrip>alert(\"yes\")</script>";
    if ($fileType == "image/png") {
        echo "<scrip>alert(\"yes\")</script>";
        $random = rand(1111,9999);
        $newFileName=$random.$fileName;
        $uploadPath="testUpload/".$newFileName;
        echo $uploadPath;
        if(move_uploaded_file($fileTmpName,$uploadPath)){
            $imagePath = file_get_contents($uploadPath.".png");
            $imageData = file_get_contents($imagePath);
            $base64String = base64_encode($imageData);
            echo $base64String;
            ?>
            <img src="<?php echo "data:image/png;base64,".$base64String; ?>" alt="">
            <?php 
        }
    }
}
?>