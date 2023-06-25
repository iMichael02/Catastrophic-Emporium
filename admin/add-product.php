<?php
include "./dbconnect.php";
$products = $maindb->product;
$products_list = $blogs->find([]);
$bands = $maindb->band;
$bands_list = $bands->find([]);
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $blog_content = $_POST['blog_content'];
    $tags = explode(", ",$_POST['tags']);
    $fileName = $_FILES["thumbnail"]["name"];
    $fileSize = $_FILES["thumbnail"]["size"]/1024;
    $fileType = $_FILES["thumbnail"]["type"];
    $fileTmpName = $_FILES["thumbnail"]["tmp_name"];
    if ($fileType == "image/png") {
        $random=rand(1111,9999);
        $newFileName=$random.$fileName;
        $uploadPath="testUpload/".$newFileName;
        if(move_uploaded_file($fileTmpName,$uploadPath)){
            $imageData = file_get_contents($uploadPath);
            $base64String = base64_encode($imageData);
        }
    }
    $largest = $first_blog->_id;
    foreach ($blogs_list as $blog) {
        if ($blog->_id > $largest) {
            $largest = $blog->_id;
        }
    }
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $cursor = $blogs->insertOne([
        '_id' => $largest + 1, 
        'title' => $title, 
        'author' => 1, 
        'time' => date("d-m-Y H:i:s", strtotime('now')),
        'content' => $blog_content,
        'thumbnail' => $base64String,
        'upvote' => [],
        'downvote' => [],
        'tags' => $tags,
        'accepted' => true,
        'comment' => []
    ]);
}

?>
<div class="block">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" name="name"><br><br>
        <label for="band">Band:</label><br>
        <select name="band" id="">
            <?php
            foreach ($bands_list as $band) {
                ?>
                <option value="<?= $band->name ?>"></option>
                <?php
            }
            ?>
        </select>
        <label for="tags">Tags:</label><br>
        <textarea name="tags"></textarea><br><br>
        <label for="thumbnail">Thumbnail:</label><br>
        <input type="file" name="thumbnail" accept="image/png"><br><br>
        <button type="submit" name="submit"  value="submit" class="add-post-button">Add Post</button>
    </form>

</div>