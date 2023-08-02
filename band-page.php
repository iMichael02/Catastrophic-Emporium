<?php
session_start();
include "./dbconnect.php";
include "./functions.php";
if (isset($_POST['add_to_wishlist'])) {
    if (isset($_SESSION['uid'])) {
        $pid = (int)($_POST['add_to_wishlist']);
        $members = $maindb->member;
        $uid = $_SESSION['uid'];
        $online_member = $members->findOne(['_id' => $uid]);
        $updated_wishlist = $online_member->wishlist;
        array_push($updated_wishlist, $pid);
        $cursor = $members->updateOne(['_id' => $uid], ['$set' => ['wishlist' => $updated_wishlist]]);
        header("Location: ./wishlist.php");
    } else {
        header("Location: ./login.php");
    }
}
$type = [];
if (isset($_GET['type'])) {
    foreach($_GET['type'] as $submit_type) {
        switch($submit_type) {
            case "t_shirt":
                array_push($type, "t-shirt");
                break;
            case "sweatshirt":
                array_push($type, "sweatshirt");
                break;
            case "hoodie":
                array_push($type, "hoodie");
                break;
            case "shorts":
                array_push($type, "shorts");
                break;
            case "pants":
                array_push($type, "pants");
                break;
            case "shoes":
                array_push($type, "shoes");
                break;
            case "hat":
                array_push($type, "hat");
                break;
            case "tank_top":
                array_push($type, "tank-top");
                break;
            case "mask":
                array_push($type, "mask");
                break;
            case "necklace":
                array_push($type, "necklace");
                break;
            case "ring":
                array_push($type, "ring");
                break;
            case "bracelet":
                array_push($type, "bracelet");
                break;
            case "earing":
                array_push($type, "earing");
                break;
            case "nose_ring":
                array_push($type, "nose-ring");
                break;
            case "patch":
                array_push($type, "patch");
                break;
            case "vinyl":
                array_push($type, "vinyl");
                break;
            case "cd_dvd":
                array_push($type, "cd-dvd");
                break;
            case "figure":
                array_push($type, "figure");
                break;
            case "guitar_pick":
                array_push($type, "guitar-pick");
                break;
            case "collectibles_other":
                array_push($type, "collectibles-other");
                break;
            case "banner":
                array_push($type, "banner");
                break;
            case "picture_frame":
                array_push($type, "picture-frame");
                break;
            case "decors_other":
                array_push($type, "decors-other");
                break;
            default:
                break;
        }
    }
}
include "./load-band.php";
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
    <script> 
        $(function(){
            $("#header").load("./asset/header&footer/header.php");
            $("#footer").load("./asset/header&footer/footer.php");
        });
    </script>
    <title><?php echo $band->name ?> Store</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-band-page" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item"><a href="./bands.php">Bands</a></div>
                    <div class="breadcrumb-item"><?php echo $band->name?></div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <div class="band-description">
                    <div class="banner">
                        <img src="<?php echo "data:image/png;base64,".$band->banner ;?>" alt="">
                    </div>
                    <div class="info-container">
                        <div class="info">
                            <p class="name"><?php echo $band->name;?></p>
                            <div class="description">
                                <p class="bibliography"><?php echo $band->bibliography; ?></p>
                                <div class="collapsible">
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        if (array_key_exists($i, (array)($band->questions))) {
                                            ?>
                                            <div class="accordion">
                                                <button type="button" class="accordion-button"><?php echo $band->questions[$i]; ?></button>
                                                <div class="accordion-content">
                                                    <p><?php echo $band->answers[$i]; ?></p>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-grid">
                    <?php
                    include "./filter-form.php";
                    ?>
                </div>
                <div class="mid-grid">
                    <div class="mid-grid-container">
                        <?php
                        for($i = 0; $i < sizeof($products_list); $i++) {
                            ?>
                            <div class="grid-item">
                                <div class="grid-item-container">
                                    <div class="grid-item-image"><a href="./product.php?id=<?= $products_list[$i]->_id ?>" class="grid-item-link"><img src="<?php echo "data:image/png;base64,".$products_list[$i]->image1; ?>" alt=""></a></div>
                                    <div class="grid-item-title"><?php echo $band->name;?></div>
                                    <div class="grid-item-name"><a href="./product.php?id=<?= $products_list[$i]->_id ?>" class="grid-item-link"><?php echo $products_list[$i]->name; ?></a></div>
                                    <div class="grid-item-price"><?php echo commas($products_list[$i]->price);?>VND</div>
                                    <div class="grid-item-shopping-options">
                                        <a href="./product.php?id=<?= $products_list[$i]->_id ?>" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                        <form action="./band-page.php" id="add-to-wishlist-form" method="post">
                                            <button type="submit" class="add-to-wishlist-button" name="add_to_wishlist" value="<?= $products_list[$i]->_id ?>"><i class="fa-solid fa-plus"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="page-nav">
                        <ul class="page-nav-container" id="page-nav-container">
                            <?php
                            for ($i = 1; $i <= $pages; $i++) {
                                if ($page == $i) {
                                    ?>
                                    <li class="page-nav-item selected"><a href="./band-page.php?id=<?php echo $band->_id ?>&page=<?php
                                    echo $i;
                                    if (isset($_GET['type'])) {
                                        foreach($_GET['type'] as $index => $submit_type) {
                                            echo "&type%5B".$index."%5D=".$submit_type;
                                        }
                                        echo "&filter=";
                                    }
                                    ?>"><?php echo $i?></a></li>
                                    <?php
                                } elseif ($page == "" && $i == 1) {
                                    ?>
                                    <li class="page-nav-item selected"><a href="./band-page.php?id=<?php echo $band->_id ?>&page=<?php
                                    echo $i;
                                    if (isset($_GET['type'])) {
                                        foreach($_GET['type'] as $index => $submit_type) {
                                            echo "&type%5B".$index."%5D=".$submit_type;
                                        }
                                        echo "&filter=";
                                    }
                                    ?>"><?php echo $i?></a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="page-nav-item"><a href="./band-page.php?id=<?php echo $band->_id ?>&page=<?php
                                    echo $i;
                                    if (isset($_GET['type'])) {
                                        foreach($_GET['type'] as $index => $submit_type) {
                                            echo "&type%5B".$index."%5D=".$submit_type;
                                        }
                                        echo "&filter=";
                                    }
                                    ?>"><?php echo $i?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="right-grid">
                    <?php
                    include "./bands-genres-list.php";
                    ?>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
        
        <!-- Footer -->
        <div id="footer"></div>
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
    <script src="./asset/js/band-page/accordion.js"></script>
</body>
</html>