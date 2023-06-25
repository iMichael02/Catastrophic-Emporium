<?php
include "./dbconnect.php";
$products = $maindb->product;
$products_list = $products->find([]);
$bands = $maindb->band;
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
                    echo "$color:<br>";
                    foreach($sizes as $size => $quantity) {
                        echo "- $size: $quantity<br>";
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
                <td><form action="index.php?content=products" method="post">
                    <button type="submit" name="edit" value="<?= $product->_id ?>">Edit</button>
                </form></td>
                <td><form action="index.php?content=products" method="post">
                    <button type="submit" name="delete" value="<?= $product->_id ?>">Delete</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>