<?php
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
        ?>
        <script>alert("You have to login first!")</script>
        <?php
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
include "./load-search.php";
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
    <title>Search Results</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-search" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item">Store</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <div class="left-grid">
                    <?php
                    include "./filter-form.php";
                    ?>
                </div>
                <div class="mid-grid">
                    <div class="mid-grid-container">
                        <?php
                        for($i = 0; $i < sizeof($products_display_list); $i++) {
                            ?>
                            <div class="grid-item">
                                <div class="grid-item-container">
                                    <div class="grid-item-image"><a href="./product.php?id=<?= $products_display_list[$i]->_id ?>" class="grid-item-link"><img src="<?php echo "data:image/png;base64,".$products_display_list[$i]->image1; ?>" alt=""></a></div>
                                    <div class="grid-item-title">
                                        <?php
                                        $band = $bands->findOne(['_id' => $products_display_list[$i]->band_id]);
                                        echo $band->name;
                                        ?>
                                    </div>
                                    <div class="grid-item-name"><a href="#" class="grid-item-link"><?php echo $products_display_list[$i]->name; ?></a></div>
                                    <div class="grid-item-price"><?php echo commas($products_display_list[$i]->price);?>VND</div>
                                    <div class="grid-item-shopping-options">
                                        <a href="./product.php?id=<?= $products_display_list[$i]->_id ?>" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                        <form action="./search.php" id="add-to-wishlist-form" method="post">
                                            <button type="submit" class="add-to-wishlist-button" name="add_to_wishlist" value="<?= $products_display_list[$i]->_id ?>"><i class="fa-solid fa-plus"></i></button>
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
                            for ($i = 1; $i <= $products_pages; $i++) {
                                if ($products_page == $i) {
                                    ?>
                                    <li class="page-nav-item selected"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=<?php
                                    echo $i;
                                    if (isset($_GET['type'])) {
                                        foreach($_GET['type'] as $index => $submit_type) {
                                            echo "&type%5B".$index."%5D=".$submit_type;
                                        }
                                        echo "&filter=";
                                    }
                                    ?>&blogs_page=1"><?php echo $i?></a></li>
                                    <?php
                                } elseif ($products_page == "" && $i == 1) {
                                    ?>
                                    <li class="page-nav-item selected"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=<?php
                                    echo $i;
                                    if (isset($_GET['type'])) {
                                        foreach($_GET['type'] as $index => $submit_type) {
                                            echo "&type%5B".$index."%5D=".$submit_type;
                                        }
                                        echo "&filter=";
                                    }
                                    ?>&blogs_page=1"><?php echo $i?></a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="page-nav-item"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=<?php
                                    echo $i;
                                    if (isset($_GET['type'])) {
                                        foreach($_GET['type'] as $index => $submit_type) {
                                            echo "&type%5B".$index."%5D=".$submit_type;
                                        }
                                        echo "&filter=";
                                    }
                                    ?>&blogs_page=1"><?php echo $i?></a></li>
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
                <div class="bottom-grid">
                    <?php
                    foreach ($blogs_display_list as $blog) {
                        $author = $members->findOne(['_id' => $blog->author]);
                        ?>
                        <div class="blog">
                            <div class="blog-container">
                                <div class="thumbnail" id="thumbnail">
                                    <img src="<?php echo "data:image/png;base64,".$blog->thumbnail; ?>" alt="" id="thumbnail-pic">
                                </div>
                                <div class="post-info">
                                    <div class="post-title-and-author">
                                        <div class="post-title"><?php echo $blog->title ?></div>
                                        <div class="post-author">
                                            <div class="profile-pic">
                                                <img src="<?php echo "data:image/png;base64,".$author->profile_pic; ?>" alt="">
                                            </div>
                                            <div class="author-info">
                                                <div class="name"><?php echo $author->display_name ?></div>
                                                <hr>
                                                <div class="joint-date">Joint <?php echo $author->joint_date ?></div>
                                                <div class="title">
                                                    <?php
                                                    if ($author->title->the_creator == "") {
                                                        if ($author->title->certified_writer == "") {
                                                            if ($author->title->active_member == "") {
                                                                echo "New Member";
                                                            } else {
                                                                echo "Active Member";
                                                            }
                                                        } else {
                                                            echo "Certified Writer";
                                                        }
                                                    } else {
                                                        echo "The Creator";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="time-date">
                                    <div class="date"><?php echo substr($blog->time, 0, 10) ?></div>
                                    <div class="time"><?php echo substr($blog->time, 11, 8) ?></div>
                                </div>
                            </div>
                            <a href="./blog-page.php" class="blog-link">
                                <span class="link-spanner"></span>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="page-nav">
                        <ul class="page-nav-container" id="page-nav-container">
                            <?php
                            for ($i = 1; $i <= $blogs_pages; $i++) {
                                if ($blogs_page == $i) {
                                    ?>
                                    <li class="page-nav-item selected"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=1&blogs_page=<?php
                                    echo $i;
                                    if (isset($_GET['type'])) {
                                        foreach($_GET['type'] as $index => $submit_type) {
                                            echo "&type%5B".$index."%5D=".$submit_type;
                                        }
                                        echo "&filter=";
                                    }
                                    ?>"><?php echo $i?></a></li>
                                    <?php
                                } elseif ($blogs_page == "" && $i == 1) {
                                    ?>
                                    <li class="page-nav-item selected"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=1&blogs_page=<?php
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
                                    <li class="page-nav-item"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=1&blogs_page=<?php
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
    <script src="./asset/js/store/pagenav.js"></script>
</body>
</html>