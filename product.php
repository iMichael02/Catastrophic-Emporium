<?php
session_start();
include "./dbconnect.php";
include "./functions.php";
if(isset($_GET['id'])) {
    $pid = (int)($_GET['id']);
    $products = $maindb->product;
    $bands = $maindb->band;
    $target_product = $products->findOne(['_id' => $pid]);
    if (isset($_SESSION['uid'])) {
        $uid = $_SESSION['uid'];
        $members = $maindb->member;
        $member = $members->findOne(['_id' => $uid]);
        if (isset($_POST['add_to_cart']) && isset($_POST['color']) && isset($_POST['size'])) {
            $cart_pid = (int)($_POST['add_to_cart']);
            $color = $_POST['color'];
            $size = $_POST['size'];
            $cart = (array)($member->cart);
            array_push($cart, [$cart_pid, $color, $size]);
            $result = $members->updateOne(['_id' => $uid], ['$set' => ['cart' => $cart]]);
            header('Location: ./cart.php');
        }
        if (isset($_POST['add_to_wishlist'])) {
            $wl_pid = (int)($_POST['add_to_wishlist']);
            $wishlist = (array)($member->wishlist);
            if (array_search($wl_pid, $wishlist) != false) {
                array_push($wishlist, $pid);
                $cursor = $members->updateOne(['_id' => $uid], ['$set' => ['wishlist' => $wishlist]]);
                header('Location: ./wishlist.php');
            }
        }
    } else {
        header('Location: ./login.php');
    }
    if ($target_product != null) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./asset/scss/style.css?v=<?php echo time(); ?>"/>
    <script src="https://kit.fontawesome.com/a11103ae03.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $target_product->name ?></title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <?php
        include "./asset/header&footer/header.php"
        ?>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-product" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item"><a href="./store.php">Store</a></div>
                    <div class="breadcrumb-item"><?= $target_product->name ?></div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->

            <!-- Main Content Container -->
            <div class="main-content-container">
                <div class="product-grid">
                    <div class="product-image" id="product-image">
                        <div id="lens"></div>
                        <img src="data:image/png;base64,<?= $target_product->image1 ?>" alt="" id="featured">
                    </div>
                    <div id="slide-wrapper" class="slide-wrapper">
                        <div class="arrow" id="slide-left"><i class="fa-solid fa-angle-left"></i></div>
                        <div id="slider" class="slider">
                            <img class="thumbnail active" src="data:image/png;base64,<?= $target_product->image1 ?>">
                            <?php
                            if($target_product->image2 != "") {
                                ?>
                                <img class="thumbnail" src="data:image/png;base64,<?= $target_product->image2 ?>">
                                <?php
                            }
                            if($target_product->image3 != "") {
                                ?>
                                <img class="thumbnail" src="data:image/png;base64,<?= $target_product->image3 ?>">
                                <?php
                            }
                            if($target_product->image4 != "") {
                                ?>
                                <img class="thumbnail" src="data:image/png;base64,<?= $target_product->image4 ?>">
                                <?php
                            }
                            ?>
                        </div>
                        <div class="arrow" id="slide-right"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                    <div class="product-info">
                        <h1><?php
                        $band = $bands->findOne(['_id' => $target_product->band_id]);
                        echo $band->name;
                        ?></h1>
                        <h2><?= $target_product->name ?></h2>
                        <hr>
                        <h3><?= commas($target_product->price) ?> VND</h3>
                        <p class="product-id">Product ID: <span class="prod-id">#<?= $target_product->_id ?></span></p>
                        <p class="size">Size <span class="open-size-chart" onclick="showChart()"><i class="fa-solid fa-ruler-horizontal"></i> Size chart</span></p>
                        <?php
                        include "./sizechart.php";
                        ?>
                        <form action="" id="action-form" method="post"></form>
                        <div class="size-options">
                            <?php
                            foreach($target_product->variances as $color => $sizes) {
                                ?>
                                <div class="size-container">
                                    <input form="action-form" type="radio" name="color" value="<?= $color ?>" id="color_<?= $color ?>">
                                    <label for="color_<?= $color ?>" class="size-btn"> <?= $color ?> </label>
                                </div>
                                <br><br>
                                <?php
                                foreach($sizes as $size => $quantity) {
                                    ?>
                                    <div class="size-container">
                                        <input form="action-form" type="radio" name="size" value="<?= $size ?>" id="size_<?= $size ?>">
                                        <label for="size_<?= $size ?>" class="size-btn"> <?= $size ?> </label>
                                    </div>
                                <?php
                                }
                                ?>
                                <br><br>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="quantity">
                            <input form="action-form" value=1 type="number" name="quantity">
                            <br>
                            <div class="buttons">
                                <button form="action-form" class="buy-now" type="submit" name="buy_now" value="<?= $target_product->_id ?>">Buy Now</button>
                                <button form="action-form" class="add-to-cart" type="submit" name="add_to_cart" value="<?= $target_product->_id ?>">Add to Cart</button>
                                <button form="action-form" class="add-to-wishlist" type="submit" name="add_to_wishlist" value="<?= $target_product->_id ?>"><i class="fa-solid fa-plus"></i> Add to Wishlist</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="section-divider">
                <div class="banner">
                    <img src="data:image/png;base64,<?= $band->banner ?>" alt="">
                    <div class="band-info">
                        <h1 class="name"><?= $band->name ?></h1>
                        <p class="description"><?= $band->bibliography ?></p>
                        <div class="page-btn"><a href="#"><?= $band->name ?> Store <i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                </div>
                <h1 class="review-title">Reviews</h1>
                <div class="review">
                    <div class="review-container">
                        <div class="review-item">
                            <div class="reviewer">
                                <img src="./logo/facebook_profile_image.png" alt="">
                                <div class="name">Massacre3000</div>
                                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="review-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quod expedita nisi labore quidem error esse, sit magnam maiores beatae veritatis eaque at repellat voluptas laborum culpa magni debitis mollitia!
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="reviewer">
                                <img src="./logo/facebook_profile_image.png" alt="">
                                <div class="name">Massacre3000</div>
                                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="review-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quod expedita nisi labore quidem error esse, sit magnam maiores beatae veritatis eaque at repellat voluptas laborum culpa magni debitis mollitia!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content -->

        <!-- Footer -->
        <?php
        include "./asset/header&footer/footer.php"
        ?>
        <!-- End Footer -->
    </div>
    <script
        type="text/javascript"
        src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
        type="text/javascript"
        src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="./asset/js/navbar.js"></script>
    <script src="./asset/js/search.js"></script>
    <script src="./asset/js/product/sizeChart.js"></script>
    <script src="./asset/js/product/slider.js"></script>
    <script src="./asset/js/product/lens.js"></script>
</body>
</html>
<?php
    }
}
?>