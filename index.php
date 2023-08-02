<?php
session_start();
include "./dbconnect.php";
include "./functions.php";
$products = $maindb->product;
$bands = $maindb->band;
$genres = $maindb->genre;
$blogs = $maindb->blog;
$members = $maindb->member;
$products_list = $products->find([]);
$bands_list = $bands->find([]);
$genres_list = $genres->find([]);
$blogs_list = $blogs->find([]);
$sorted_blog_list = [];
foreach ($blogs_list as $blog) {
    $sorted_blog_list[] = $blog;
}
usort($sorted_blog_list, function ($a, $b) {
    if ($a->time == $b->time) {
        return 0;
    }
    return ($a->time > $b->time) ? -1 : 1;
});
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
    <title>Catastrophic Emporium</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <?php
        include "./asset/header&footer/header.php";
        ?>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <div class="main-content-container">
                <!-- Slider -->
                <div class="slider-container">
                    <div class="slider">
                        <a href="#"><img class="top-slides" src="./images/slider/slide1.png"></a>
                        <a href="#"><img class="top-slides" src="./images/slider/slide2.png"></a>
                        <a href="#"><img class="top-slides" src="./images/slider/slide3.png"></a>
                        <a href="#"><img class="top-slides" src="./images/slider/slide4.png"></a>
                        <a href="#"><img class="top-slides" src="./images/slider/slide5.png"></a>
                    </div>
                    <div class="slider-btn">
                        <div class="slider-button left" type="button" onclick="plusDivs(-1)"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="slider-button right" type="button" onclick="plusDivs(1)"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                <!-- End Slider -->

                <!-- Strength -->
                <div class="strength">
                    <div class="strength-list">
                        <div class="strength-item item1"><i class="fa-solid fa-truck"></i> Free shipping within Hanoi</div>
                        <div class="strength-item item2"><i class="fa-solid fa-tag"></i> New sales every week</div>
                        <div class="strength-item item3"><i class="fa-solid fa-copyright"></i> Exclusive products</div>
                    </div>
                </div>
                <!-- End Strength -->

                <!-- Top Banner -->
                <div class="top-banner">
                    <div class="top-banner-container">
                        <div class="top-banner-item item1"><a href="./store.php?type%5B0%5D=t_shirt"><img src="./images/banner/top/banner1.png" alt=""></a></div>
                        <div class="top-banner-item item2"><a href="./store.php?type%5B15%5D=vinyl"><img src="./images/banner/top/banner2.png" alt=""></a></div>
                        <div class="top-banner-item item2"><a href="./store.php?type%5B8%5D=mask"><img src="./images/banner/top/banner3.png" alt=""></a></div>
                    </div>
                </div>
                <!-- End Top Banner -->

                <!-- Latest Products -->
                <div class="section-title latest-title">Lastest Products</div>
                <div class="latest-slider">
                    <?php
                    $products_time_list = [];
                    foreach($products_list as $prod) {
                        array_push($products_time_list, [$prod, $prod->sales]);
                    }
                    simpleQuickSort($products_time_list);
                    for($i = 0; $i < 10; $i++) {
                    ?>
                    <div class="latest-item">
                        <a href="./product.php?id=<?= $products_time_list[$i][0]->_id ?>">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="data:image/png;base64,<?= $products_time_list[$i][0]->image1 ?>" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title"><?php
                                    $product_band = $bands->findOne(['_id' => $products_time_list[$i][0]->band_id]);
                                    echo $product_band->name;
                                    ?></span><br>
                                    <span class="latest-name"><?= $products_time_list[$i][0]->name ?></span>
                                </p>
                                <p class="latest-price"><?= commas($products_time_list[$i][0]->price)." VND" ?></p>
                            </div>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- End Latest Products -->

                <!-- Bands And Genres -->
                <div class="section-title bands-title">Infamous Bands</div>
                <div class="bands-slider">
                <?php
                $sorted_band_list = [];
                foreach($bands_list as $band) {
                    $sorted_band_list[] = $band;
                }
                usort($sorted_band_list, function ($a, $b) {
                    if ($a->sales == $b->sales) {
                        return 0;
                    }
                    return ($a->sales > $b->sales) ? -1 : 1;
                });
                for ($i = 0; $i < 10; $i++) {
                    ?>
                    <div class="bands-item">
                        <div class="band">
                            <a href="./band-page.php?id=<?= $sorted_band_list[$i]->_id ?>" class="band-link">
                                <img src="data:image/png;base64,<?= $sorted_band_list[$i]->logo ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <div class="section-title genres-title">Popular Genres</div>
                <div class="genres-slider">
                <?php
                $sorted_genre_list = [];
                foreach($genres_list as $genre) {
                    $sorted_genre_list[] = $genre;
                }
                usort($sorted_genre_list, function ($a, $b) {
                    if ($a->sales == $b->sales) {
                        return 0;
                    }
                    return ($a->sales > $b->sales) ? -1 : 1;
                });
                for ($i = 0; $i < 10; $i++) {
                    ?>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="./genre-page.php?id=<?= $sorted_genre_list[$i]->_id ?>" class="genre-link">
                                <img src="data:image/png;base64,<?= $sorted_genre_list[$i]->logo ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <!-- End Bands And Genres -->

                <!-- Bottom Banner -->
                <div class="bottom-banner">
                    <div class="bottom-banner-container">
                        <div class="bottom-banner-item item1"><a href="./store.php?type%5B9%5D=necklace&type%5B10%5D=ring&type%5B11%5D=bracelet&type%5B12%5D=earing&type%5B13%5D=nose_ring"><img src="./images/banner/bottom/banner1.png" alt=""></a></div>
                        <div class="bottom-banner-item item2"><a href="./store.php?type%5B17%5D=figure"><img src="./images/banner/bottom/banner2.png" alt=""></a></div>
                    </div>
                </div>

                <!-- Customer Review -->
                <div class="section-title review-title">Customers' Reviews</div>
                <div class="review-container">
                    <a href="#" class="review-link">
                        <div class="review-item">
                            <img src="./images/review/review1.png" alt="" class="review-image">
                            <p class="review-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                            <p class="review-text">"Very nice! Nothing's better than the good old AC/DC, loving it!" - D. Harris</p>
                        </div>
                    </a>
                    <a href="#" class="review-link">
                        <div class="review-item">
                            <img src="./images/review/review2.png" alt="" class="review-image">
                            <p class="review-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
                            <p class="review-text">"Like it so far" - K. Russells</p>
                        </div>
                    </a>
                    <a href="#" class="review-link">
                        <div class="review-item">
                            <img src="./images/review/review3.png" alt="" class="review-image">
                            <p class="review-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                            <p class="review-text">"The cloth is great, the print is great, keep jamming hard! \m/" - O. Espinoza</p>
                        </div>
                    </a>
                </div>
                <!-- End Customer Review -->

                <!-- Blog -->
                <div class="section-title blog-title">Newest Blogs</div>
                <div class="blog-container">
                <?php
                for ($i = 0; $i < 3; $i++) {
                    ?>
                    <div class="blog-item">
                        <div class="blog-image"><a href="./blog-page.php?id=<?= $sorted_blog_list[$i]->_id ?>"><img src="data:image/png;base64,<?= $sorted_blog_list[$i]->thumbnail ?>" alt=""></a></div>
                        <div class="blog-item-title"><a href="./blog-page.php?id=<?= $sorted_blog_list[$i]->_id ?>"><?= $sorted_blog_list[$i]->title ?></a></div>
                        <div class="blog-description"><?= $sorted_blog_list[$i]->content ?></div>
                        <div class="blog-read-more"><a href="./blog-page.php?id=<?= $sorted_blog_list[$i]->_id ?>">READ MORE <i class="fa-solid fa-angles-right"></i></a></div>
                        <hr>
                        <div class="blog-info">
                            <div class="blog-date"><i class="fa-solid fa-calendar-days"></i> <?= $sorted_blog_list[$i]->time ?></div>
                            <div class="blog-author"><i class="fa-solid fa-pen"></i> <?php
                            $author = $members->findOne(['_id' => $sorted_blog_list[$i]->author]);
                            echo $author->display_name;
                            ?></div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <!-- End Blog -->

                <!-- End Bottom Banner -->
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
    <script src="./asset/js/home/slider.js"></script>
    <script>
        $('.latest-slider').slick({
            slidesToShow: 5,
            infinite: true,
            autoplay: true,
            autoplayspeed: 3000,
            draggable: false,
            prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
            responsive: [
                {
                    breakpoint: 1399,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1023,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 424,
                    settings: {
                        slidesToShow: 2,
                    }
                },
            ],
        });
        $('.bands-slider').slick({
            slidesToShow: 5,
            infinite: true,
            autoplay: true,
            autoplayspeed: 3000,
            draggable: false,
            prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
            responsive: [
                {
                    breakpoint: 1399,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1023,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 424,
                    settings: {
                        slidesToShow: 2,
                    }
                },
            ],
        });
        $('.genres-slider').slick({
            slidesToShow: 5,
            infinite: true,
            autoplay: true,
            autoplayspeed: 3000,
            draggable: false,
            prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
            responsive: [
                {
                    breakpoint: 1399,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1023,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 424,
                    settings: {
                        slidesToShow: 2,
                    }
                },
            ],
        });
    </script>
</body>
</html>