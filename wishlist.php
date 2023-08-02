<?php
session_start();
include "./dbconnect.php";
include "./functions.php";
$members = $maindb->member;
$products = $maindb->product;
if (isset($_SESSION['uid'])) {
    $uid = (int)($_SESSION['uid']);
    $member = $members->findOne(['_id' => $uid]);
    if(isset($_POST['delete'])) {
        $pid = (int)($_POST['delete']);
        $wishlist = (array)($member->wishlist);
        unset($wishlist[array_search($pid, $wishlist)]);
        $wishlist = array_values($wishlist);
        $result = $members->updateOne(['_id' => $member->_id], ['$set' => ['wishlist' => $wishlist]]);
        header('Location: ./wishlist.php');
    } else if (isset($_POST['buy'])) {
        $pid = (int)($_POST['buy']);
        header("Location: ./product.php?id=$pid");
    } else {
        $products_list = [];
        for ($i = 0; $i < sizeof($member->wishlist); $i++) {
            $result = $products->findOne(['_id' => $member->wishlist[$i]]);
            array_push($products_list, $result);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./asset/scss/style.css?v=<?php echo time(); ?>"/>
    <script src="https://kit.fontawesome.com/a11103ae03.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Wishlist</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <?php
        include "./asset/header&footer/header.php"
        ?>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-wl" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item"><a>Wishlist</a></div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <div class="headings">
                    <div class="heading-item"></div>
                    <div class="heading-item">Item Name</div>
                    <div class="heading-item">Price</div>
                    <div class="heading-item">Actions</div>
                </div>
                <div class="items-list">
                    <?php
                    for ($i = 0; $i < sizeof($products_list); $i++) {
                        ?>
                        <div class="item">
                            <div class="item-info item-image">
                                <a href="./product.php?id=<?= $products_list[$i]->_id ?>">
                                    <img src="data:image/png;base64,<?= $products_list[$i]->image1 ?>">
                                </a>
                            </div>
                            <div class="item-info item-name"><p><?= $products_list[$i]->name ?></p></div>
                            <div class="item-info item-price"><p><?= commas($products_list[$i]->price) ?> VND</p></div>
                            <div class="item-info item-action">
                                <form action="./wishlist.php" method="post" id="action-form">
                                    <div class="action-button delete-button"><button type="submit" name="delete" value="<?= $products_list[$i]->_id ?>">Delete item</button></div>
                                    <div class="action-button buy-button"><button type="submit" name="buy" value="<?= $products_list[$i]->_id ?>">Buy item</button></div>
                                </form>
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
</body>
</html>
<?php
    }
} else {
    header("Location: login.php");
}
?>