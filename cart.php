<?php
session_start();
include "./dbconnect.php";
include "./functions.php";
if (isset($_SESSION['uid'])) {
    $uid = $_SESSION['uid'];
    $members = $maindb->member;
    $member = $members->findOne(['_id' => $uid]);
    $products = $maindb->product;
    $products_list = [];
    for ($i = 0; $i < sizeof($member->cart); $i++) {
        $result = $products->findOne(['_id' => $member->cart[$i][0]]);
        array_push($products_list, $result);
    }
}
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
    <title>Cart</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <?php
        include "./asset/header&footer/header.php";
        ?>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-cart" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item"><a>Cart</a></div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <div class="headings">
                    <div class="heading-item"></div>
                    <div class="heading-item">Item Name</div>
                    <div class="heading-item">Color</div>
                    <div class="heading-item">Size</div>
                    <div class="heading-item">Item Price</div>
                    <div class="heading-item">Quantity</div>
                    <div class="heading-item">Total Price</div>
                    <div class="heading-item">Actions</div>
                </div>
                <div class="items-list">
                    <?php
                    for ($i = 0; $i <sizeof($products_list); $i++) {
                        ?>
                        <div class="item">
                            <div class="item-info item-image">
                                <a href="#">
                                    <img src="./images/latest/latest1.png">
                                </a>
                            </div>
                            <div class="item-info item-name"><p><?= $products_list[$i]->name ?></p></div>
                            <div class="item-info item-color"><p><?= $member->cart[$i][1] ?></p></div>
                            <div class="item-info item-size"><p><?= $member->cart[$i][2] ?></p></div>
                            <div class="item-info item-price"><p><?= $products_list[$i]->price ?></p></div>
                            <div class="item-info item-quantity">
                                <div class="counter">
                                    <span class="down" onClick='decreaseCount(this)'>-</span>
                                    <input type="text" value="1">
                                    <span class="up" onClick='increaseCount(this)'>+</span>
                                </div>
                            </div>
                            <div class="item-info total-price"></div>
                            <div class="item-info action">
                                <div class="action-container">
                                    <div class="action1"><a href="#">Delete item</a></div>
                                    <div class="action2"><a href="#">Find similar items</a></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
        
        <!-- Footer -->
        <?php
        include "./asset/header&footer/footer.php";
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
    <script src="./asset/js/cart/qtyCount.js"></script>
</body>
</html>