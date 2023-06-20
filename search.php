<?php
include "./dbconnect.php";
include "./load-search.php";
include "./functions.php";
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
                    <div class="product-type-title apparels-title">Apparels</div>
                    <ul class="product-type apparels">
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">T-Shirts</li>
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">Sweat Shirts</li>
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">Hoodies</li>
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">Shorts</li>
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">Pants</li>
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">Shoes</li>
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">Hats</li>
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">Tank-tops</li>
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">Masks</li>
                    </ul>
                    <hr>
                    <div class="product-type-title accessories-title">Accessories</div>
                    <ul class="product-type accessories">
                        <li class="product-option accessories-option"><input type="checkbox" id="" name="" class="option">Necklaces</li>
                        <li class="product-option accessories-option"><input type="checkbox" id="" name="" class="option">Rings</li>
                        <li class="product-option accessories-option"><input type="checkbox" id="" name="" class="option">Bracelets</li>
                        <li class="product-option accessories-option"><input type="checkbox" id="" name="" class="option">Earings</li>
                        <li class="product-option accessories-option"><input type="checkbox" id="" name="" class="option">Nose Rings</li>
                    </ul>
                    <hr>
                    <div class="product-type-title collectibles-title">Collectibles</div>
                    <ul class="product-type collectibles">
                        <li class="product-option collectibles-option"><input type="checkbox" id="" name="" class="option">Figures</li>
                        <li class="product-option collectibles-option"><input type="checkbox" id="" name="" class="option">Guitar Picks</li>
                        <li class="product-option collectibles-option"><input type="checkbox" id="" name="" class="option">Patches</li>
                        <li class="product-option collectibles-option"><input type="checkbox" id="" name="" class="option">Others</li>
                    </ul>
                    <hr>
                    <div class="product-type-title decors-title">Decors</div>
                    <ul class="product-type decors">
                        <li class="product-option decors-option"><input type="checkbox" id="" name="" class="option">Banners</li>
                        <li class="product-option decors-option"><input type="checkbox" id="" name="" class="option">Picture Frames</li>
                        <li class="product-option decors-option"><input type="checkbox" id="" name="" class="option">Others</li>
                    </ul>
                    <hr>
                </div>
                <div class="mid-grid">
                    <div class="mid-grid-container">
                        <?php
                        foreach($products_display_list as $product) {
                            ?>
                            <div class="grid-item">
                                <div class="grid-item-container">
                                    <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="<?php echo "data:image/png;base64,".$product->image1; ?>" alt=""></a></div>
                                    <div class="grid-item-title">
                                        <?php
                                        $band = $bands->findOne(['_id' => $product->band_id]);
                                        echo $band->name;
                                        ?>
                                    </div>
                                    <div class="grid-item-name"><a href="#" class="grid-item-link"><?php echo $product->name; ?></a></div>
                                    <div class="grid-item-price"><?php echo commas($product->price);?>VND</div>
                                    <div class="grid-item-shopping-options">
                                        <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                        <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
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
                                    <li class="page-nav-item selected"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=<?php echo $i?>&blogs_page=1"><?php echo $i?></a></li>
                                    <?php
                                } elseif ($products_page == "" && $i == 1) {
                                    ?>
                                    <li class="page-nav-item selected"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=<?php echo $i?>&blogs_page=1"><?php echo $i?></a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="page-nav-item"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=<?php echo $i?>&blogs_page=1"><?php echo $i?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="right-grid">
                    <div class="bands-title">Bands</div>
                    <ul class="bands">
                        <li class="bands-option"><a href="#" class="band">Architects</a></li>
                        <li class="bands-option"><a href="#" class="band">Bring Me The Horizon</a></li>
                        <li class="bands-option"><a href="#" class="band">Cannibal Corpse</a></li>
                        <li class="bands-option"><a href="#" class="band">Infant Annihilator</a></li>
                        <li class="bands-option"><a href="#" class="band">Jinjer</a></li>
                        <li class="bands-option"><a href="#" class="band">Korn</a></li>
                        <li class="bands-option"><a href="#" class="band">Lorna Shore</a></li>
                        <li class="bands-option"><a href="#" class="band">Metallica</a></li>
                        <li class="bands-option"><a href="#" class="band">Pantera</a></li>
                        <li class="bands-option"><a href="#" class="band">Slipknot</a></li>
                        <li class="bands-option"><a href="./bands.html" class="view-all">View all bands list <i class="fa-solid fa-angles-right"></i></a></li>
                    </ul>
                    <hr>
                    <div class="genres-title">Genres</div>
                    <ul class="genres">
                        <li class="genres-option"><a href="#" class="genre">Alternative Metal</a></li>
                        <li class="genres-option"><a href="#" class="genre">Black Metal</a></li>
                        <li class="genres-option"><a href="#" class="genre">Christian Metal</a></li>
                        <li class="genres-option"><a href="#" class="genre">Death Metal</a></li>
                        <li class="genres-option"><a href="#" class="genre">Deathcore</a></li>
                        <li class="genres-option"><a href="#" class="genre">Heavy Metal</a></li>
                        <li class="genres-option"><a href="#" class="genre">Grindcore</a></li>
                        <li class="genres-option"><a href="#" class="genre">Metalcore</a></li>
                        <li class="genres-option"><a href="#" class="genre">Nü Metal</a></li>
                        <li class="genres-option"><a href="#" class="genre">Thrash Metal</a></li>
                        <li class="genres-option"><a href="#" class="view-all">View all genres list <i class="fa-solid fa-angles-right"></i></a></li>
                    </ul>
                    <hr>
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
                                    <li class="page-nav-item selected"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=1&blogs_page=<?php echo $i?>"><?php echo $i?></a></li>
                                    <?php
                                } elseif ($blogs_page == "" && $i == 1) {
                                    ?>
                                    <li class="page-nav-item selected"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=1&blogs_page=<?php echo $i?>"><?php echo $i?></a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="page-nav-item"><a href="./search.php?search=<?php echo $spaced_searchterms ?>&products_page=1&blogs_page=<?php echo $i?>"><?php echo $i?></a></li>
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