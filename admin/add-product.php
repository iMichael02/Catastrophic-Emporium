<?php
include "./dbconnect.php";
include "../functions.php";
$products = $maindb->product;
$products_list = $products->find([]);
$bands = $maindb->band;
$bands_list = $bands->find([]);
$first_product = $products->findOne([]);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $band_id = (int)$_POST['band'];
    $type = $_POST['type'];
    $variance = $_POST['variance'];
    $variance = json_decode($variance);
    $tags = explode(", ",$_POST['tags']);
    $price = $_POST['price'];
    if (isset($_FILES["image1"])) {
        $image1 = imageUpload($_FILES["image1"]["name"], $_FILES["image1"]["size"], $_FILES["image1"]["type"], $_FILES["image1"]["tmp_name"]);
    }
    if (isset($_FILES["image2"])) {
        $image2 = imageUpload($_FILES["image2"]["name"], $_FILES["image2"]["size"], $_FILES["image2"]["type"], $_FILES["image2"]["tmp_name"]);
    }
    if (isset($_FILES["image3"])) {
        $image3 = imageUpload($_FILES["image3"]["name"], $_FILES["image3"]["size"], $_FILES["image3"]["type"], $_FILES["image3"]["tmp_name"]);
    }
    if (isset($_FILES["image4"])) {
        $image4 = imageUpload($_FILES["image4"]["name"], $_FILES["image4"]["size"], $_FILES["image4"]["type"], $_FILES["image4"]["tmp_name"]);
    }
    $largest = $first_product->_id;
    foreach ($products_list as $product) {
        if ($product->_id > $largest) {
            $largest = $product->_id;
        }
    }
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $cursor = $products->insertOne([
        '_id' => $largest + 1,
        'name' => $name,
        'band_id' => $band_id,
        'type' => $type,
        'variances' => $variance,
        'tags' => $tags,
        'price' => $price,
        'image1' => $image1,
        'image2' => $image2,
        'image3' => $image3,
        'image4' => $image4,
        'rate' => null,
        'reviews' => [],
        'sales' => 0
    ]);
}

?>

<div class="block">
    <form action="" method="post" enctype="multipart/form-data" class="add-product-form">
        <label for="name">Name:</label><br>
        <input type="text" name="name"><br><br>
        <label for="band">Band:</label><br>
        <select name="band" placeholder="Pick a band...">
            <option value="">Select a band...</option>
            <?php
            foreach ($bands_list as $band) {
                ?>
                <option value="<?= $band->_id ?>"><?= $band->name ?></option>
                <?php
            }
            ?>
        </select>
        <br>
        <label for="type">Type(s):</label><br>
        <select name="type[0]" placeholder="Pick a type...">
            <option value="">Select a type...</option>
            <option value="t-shirt">T-Shirt</option>
            <option value="sweatshirt">Sweatshirt</option>
            <option value="hoodie">Hoodie</option>
            <option value="shorts">Shorts</option>
            <option value="pants">Pants</option>
            <option value="shoes">Shoes</option>
            <option value="sweatshirt">Sweatshirt</option>
            <option value="hat">Hat</option>
            <option value="tank-top">Tank-Top</option>
            <option value="mask">Mask</option>
            <option value="necklace">Necklace</option>
            <option value="ring">Ring</option>
            <option value="bracelet">Bracelet</option>
            <option value="earring">Earring</option>
            <option value="nose-ring">Nose Ring</option>
            <option value="figure">Figure</option>
            <option value="guitar-pick">Guitar Pick</option>
            <option value="patch">Patch</option>
            <option value="banner">Banner</option>
            <option value="picture-frame">Picture Frame</option>
            <option value="other">Other</option>
        </select>
        <div id="add-type"></div>
        <div class="add-button" id="add-type-button"><i class="fa-solid fa-plus"></i> Add Type</div>
        <br>
        <label for="variance">Color(s) / Variance(s):</label><br>
        <textarea name="variance" id="" cols="30" rows="10" placeholder="{&#10;    Enter in JSON format&#10;}"></textarea>
        <br>
        <label for="image1">Image 1:</label><br>
        <input type="file" name="image1" accept="image/png"><br><br>
        <label for="image2">Image 2:</label><br>
        <input type="file" name="image2" accept="image/png"><br><br>
        <label for="image3">Image 3:</label><br>
        <input type="file" name="image3" accept="image/png"><br><br>
        <label for="image4">Image 4:</label><br>
        <input type="file" name="image4" accept="image/png"><br><br>
        <label for="tags">Tags:</label><br>
        <textarea name="tags"></textarea><br><br>
        <label for="price">Price:</label><br>
        <input type="text" name="price"><br><br>
        <button type="submit" name="submit" value="submit" class="add-button submit">Add Product</button>
    </form>
</div>
