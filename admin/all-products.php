<?php

use function PHPSTORM_META\type;

include "./dbconnect.php";
include "../functions.php";
$products = $maindb->product;
$products_list = $products->find([]);
$bands = $maindb->band;
$band_list = $bands->find([]);
if (isset($_POST['edit'])) {
    $pid = (int)($_POST['edit']);
    $editing_id = $pid;
    $prod_to_edit = $products->findOne(['_id' => $pid]);
    if (!$prod_to_edit) {
        die('Fail to load product with ID '.$pid);
    }
    ?>
    <div class="edit-prod-window" id="prod-id-<?= $pid ?>">
        <div class="close-button-container">
            <div class="close-button" onclick="closeEditProdForm(<?= $pid ?>)"><i class="fa-solid fa-x"></i></div>
        </div>
        <div class="edit-form-container">
            <form action="index.php?content=all_products" method="post" id="edit-prod-form" enctype="multipart/form-data">
                <label for="id">ID:</label>
                <input type="text" id="id" readonly name="id" value="<?= $prod_to_edit->_id ?>">
                <br>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?= $prod_to_edit->name ?>">
                <br><br>
                <label for="band">Band:</label>
                <?php
                $prod_band = $bands->findOne(['_id' => $prod_to_edit->band_id]);
                ?>
                <select name="band" placeholder="<?= $prod_band->name ?>">
                    <option value="">Select a genre...</option>
                    <?php
                    foreach($band_list as $band){
                        ?>
                        <option value="<?= $band->_id ?>"><?= $band->name ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br>
                <label for="type">Type(s):</label><br>
                <?php
                    for($index = 0; $index < sizeof($prod_to_edit->type); $index++) {
                        ?>
                        <select name="type[<?= $index ?>]" placeholder="<?= $prod_to_edit->type[$index] ?>">
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
                        <?php
                    }
                ?>
                <div id="add-type"></div>
                <div class="add-button" id="add-type-button"><i class="fa-solid fa-plus"></i> Add Type</div>
                <br>
                <label for="image1">Image 1:</label>
                <img src="data:image/png;base64,<?= $prod_to_edit->image1 ?>" alt="" class="prod-image">
                <br>
                <input type="file" id="image1" name="image1" accept="image/png">
                <br><br>
                <label for="image2">Image 2:</label>
                <img src="data:image/png;base64,<?= $prod_to_edit->image2 ?>" alt="" class="prod-image">
                <br>
                <input type="file" id="image2" name="image2" accept="image/png">
                <br><br>
                <label for="image3">Image 3:</label>
                <img src="data:image/png;base64,<?= $prod_to_edit->image3 ?>" alt="" class="prod-image">
                <br>
                <input type="file" id="image3" name="image3" accept="image/png">
                <br><br>
                <label for="image4">Image 4:</label>
                <img src="data:image/png;base64,<?= $prod_to_edit->image4 ?>" alt="" class="prod-image">
                <br>
                <input type="file" id="image4" name="image4" accept="image/png">
                <br><br>
                <label for="variances">Variances:</label>
                <br>
                <textarea type="text" id="variances" name="variances" cols="50" rows="10"><?= json_encode($prod_to_edit->variances) ?></textarea>
                <br>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value="<?= $prod_to_edit->price ?>">
                <br>
                <label>Tags:</label><br>
                <textarea name="tags" cols="30" rows="4"><?php
                    for ($i = 0; $i < sizeof($prod_to_edit->tags); $i++) {
                        if ($i != sizeof($prod_to_edit->tags) - 1) {
                            echo $prod_to_edit->tags[$i].', ';
                        } else {
                            echo $prod_to_edit->tags[$i];
                        }
                    }
                    ?></textarea>
                <br><br>
                <button type="submit" name="save" value="<?= $pid ?>" class="add-button submit">Save Changes</button>
            </form>
        </div>
        <div class="spacer-bottom"></div>
    </div>
    <?php
}
if (isset($_POST['save'])) {
    $pid = (int)($_POST['id']);
    $editing_prod = $products->findOne(['_id' => $pid]);
    $name = $_POST['name'];
    $band_id_temp = $_POST['band'];
    if ($band_id_temp == "") {
        $band_id = $editing_prod->band_id;
    } else {
        $band_id = (int)$band_id_temp;
    }
    $type_temp = $_POST['type'];
    $old_length = sizeof($type_temp);
    for($i = 0; $i < sizeof($editing_prod->type); $i++) {
        if ($type_temp[$i] == "") {
            $type_temp[$i] = $editing_prod->type[$i];
        }
    }
    $type_temp = array_unique($type_temp);
    $type = [];
    for($i = 0; $i < $old_length; $i++) {
        if ($type_temp[$i] != "" && $type_temp[$i] != null) {
            array_push($type, $type_temp[$i]);
        }
    }
    $variances = json_decode($_POST['variances']);
    $image1 = imageUpload($_FILES["image1"]["name"], $_FILES["image1"]["size"], $_FILES["image1"]["type"], $_FILES["image1"]["tmp_name"]);
    if ($image1 == "") {
        $image1 = $editing_prod->image1;
    }
    $image2 = imageUpload($_FILES["image2"]["name"], $_FILES["image2"]["size"], $_FILES["image2"]["type"], $_FILES["image2"]["tmp_name"]);
    if ($image2 == "") {
        $image2 = $editing_prod->image2;
    }
    $image3 = imageUpload($_FILES["image3"]["name"], $_FILES["image3"]["size"], $_FILES["image3"]["type"], $_FILES["image3"]["tmp_name"]);
    if ($image3 == "") {
        $image3 = $editing_prod->image3;
    }
    $image4 = imageUpload($_FILES["image4"]["name"], $_FILES["image4"]["size"], $_FILES["image4"]["type"], $_FILES["image4"]["tmp_name"]);
    if ($image4 == "") {
        $image4 = $editing_prod->image4;
    }
    $price = (int)($_POST['price']);
    $tags = explode(", ",$_POST['tags']);
    $cursor = $products->updateOne([
        '_id' => $pid],
        ['$set' =>
            ['name' => $name,
            'band_id' => $band_id,
            'type' => $type,
            'variances' => $variances,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'price' => $price,
            'tags' => $tags]
    ]);
}
if (isset($_POST['delete'])) {
    $pid = (int)($_POST['delete']);
    $delete_prod = $products->findOne(['_id' => $pid]);
    ?>
    <div class="pop-up-message-window delete-prod-window" id="delete-prod-id-<?= $pid ?>">
        <form action="index.php?content=all_products" id="confirm-delete-prod-form" method="post"></form>
        <div class="message-container">Confirm to delete product: <?= $delete_prod->name ?></div>
        <div class="options-container">
            <div class="confirm-button-container">
                <button form="confirm-delete-prod-form" class="confirm-button" name="delete_confirm" value="<?= $pid ?>">Confirm</button>
            </div>
            <div class="cancel-button-container">
                <button class="cancel-button" onclick="closeDeleteProdMessage(<?= $pid ?>)">Cancel</button>
            </div>
        </div>
    </div>
    <?php
}
if (isset($_POST['delete_confirm'])) {
    $pid = (int)($_POST['delete_confirm']);
    $cursor = $products->deleteOne(['_id' => $pid]);
}
?>
<div class="block">
    <table class="table products-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Band</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Image 3</th>
                <th>Image 4</th>
                <th>Rating</th>
                <th>Reviews</th>
                <th>Variances</th>
                <th>Price</th>
                <th>Sales</th>
                <th>Types</th>
                <th>Tags</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($products_list as $product) {
            ?>
            <tr>
                <td><?= $product->_id?></td>
                <td><?= $product->name ?></td>
                <td><?php
                $band = $bands->findOne(['_id' => $product->band_id]);
                echo $band->name;
                ?></td>
                <td><img src="data:image/png;base64,<?= $product->image1 ?>" alt="" class="product-image"></td>
                <td><img src="data:image/png;base64,<?= $product->image2 ?>" alt="" class="product-image"></td>
                <td><img src="data:image/png;base64,<?= $product->image3 ?>" alt="" class="product-image"></td>
                <td><img src="data:image/png;base64,<?= $product->image4 ?>" alt="" class="product-image"></td>
                <td><?= $product->rate ?></td>
                <td><?= sizeof($product->reviews) ?></td>
                <td><?php
                foreach($product->variances as $color => $sizes) {
                    echo "$color:";
                    if (gettype($sizes) != 'integer') {
                        foreach($sizes as $size => $quantity) {
                            echo "<br>- $size: $quantity<br>";
                        }
                    } else {
                        echo " $sizes<br>";
                    }
                }
                ?></td>
                <td><?= $product->price ?></td>
                <td><?= $product->sales ?></td>
                <td><?php
                foreach($product->type as $type) {
                    echo $type.", ";
                }
                ?></td>
                <td><?php
                foreach($product->tags as $tag) {
                    echo $tag.", ";
                }
                ?></td>
                <td><form action="index.php?content=all_products" method="post">
                    <button type="submit" name="edit" value="<?= $product->_id ?>">Edit</button>
                </form></td>
                <td><form action="index.php?content=all_products" method="post">
                    <button type="submit" name="delete" value="<?= $product->_id ?>">Delete</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>