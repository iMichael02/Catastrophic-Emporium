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
    <title>Catastrophic Emporium</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
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
                        <div class="top-banner-item item1"><a href="#"><img src="./images/banner/top/banner1.png" alt=""></a></div>
                        <div class="top-banner-item item2"><a href="#"><img src="./images/banner/top/banner2.png" alt=""></a></div>
                        <div class="top-banner-item item2"><a href="#"><img src="./images/banner/top/banner3.png" alt=""></a></div>
                    </div>
                </div>
                <!-- End Top Banner -->

                <!-- Latest Products -->
                <div class="section-title latest-title">Lastest Products</div>
                <div class="latest-slider">
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest1.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Bring Me The Horizon</span><br>
                                    <span class="latest-name">Sempiternal T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest2.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Architects</span><br>
                                    <span class="latest-name">Wolf T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest3.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Lorna Shore</span><br>
                                    <span class="latest-name">And I Return To Nothingness... T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest4.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Slaughter To Prevail</span><br>
                                    <span class="latest-name">Demon Mask T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest5.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Slipknot</span><br>
                                    <span class="latest-name">New Masks T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest6.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Motionless In White</span><br>
                                    <span class="latest-name">Face Split T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest7.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Metallica</span><br>
                                    <span class="latest-name">Overprint Justice T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest8.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Thy Art Is Murder</span><br>
                                    <span class="latest-name">Skull Pile T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest9.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Lamb Of God</span><br>
                                    <span class="latest-name">Crow T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                    <div class="latest-item">
                        <a href="#">
                            <div class="latest-content">
                                <div class="latest-image">
                                    <img src="./images/latest/latest10.png" alt="">
                                </div>
                                <p class="latest-description">
                                    <span class="latest-item-title">Cannibal Corpse</span><br>
                                    <span class="latest-name">Cannibal Feast T-Shirt</span>
                                </p>
                                <p class="latest-price">280.000VND</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Latest Products -->

                <!-- Bands And Genres -->
                <div class="section-title bands-title">Infamous Bands</div>
                <div class="bands-slider">
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo4.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo5.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo6.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo7.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo8.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo9.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bands-item">
                        <div class="band">
                            <a href="#" class="band-link">
                                <img src="./images/band-logo/logo10.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section-title genres-title">Popular Genres</div>
                <div class="genres-slider">
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo4.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo5.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo6.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo7.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo8.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo9.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="genres-item">
                        <div class="genre">
                            <a href="#" class="genre-link">
                                <img src="./images/genre-logo/logo10.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Bands And Genres -->

                <!-- Bottom Banner -->
                <div class="bottom-banner">
                    <div class="bottom-banner-container">
                        <div class="bottom-banner-item item1"><a href="#"><img src="./images/banner/bottom/banner1.png" alt=""></a></div>
                        <div class="bottom-banner-item item2"><a href="#"><img src="./images/banner/bottom/banner2.png" alt=""></a></div>
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
                    <div class="blog-item">
                        <div class="blog-image"><a href="#"><img src="./images/blog/blog1.png" alt=""></a></div>
                        <div class="blog-item-title"><a href="#">Metallica's "72 Seasons" Album Review</a></div>
                        <div class="blog-description">Coming up on 14th this month is the premiere of the thrash metal icon Metallica with their brand new album "72 Seasons". Fortunately, we, people at Catastrophic Emporium, had a chance to pre-experience this infamous comeback.</div>
                        <div class="blog-read-more"><a href="#">READ MORE <i class="fa-solid fa-angles-right"></i></a></div>
                        <hr>
                        <div class="blog-info">
                            <div class="blog-date"><i class="fa-solid fa-calendar-days"></i> Apr, 6th, 2023</div>
                            <div class="blog-author"><i class="fa-solid fa-pen"></i> Mike Sovereignborn</div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-image"><a href="#"><img src="./images/blog/blog2.png" alt=""></a></div>
                        <div class="blog-item-title"><a href="#">Top 10 Albums of 2023 So Far</a></div>
                        <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam veritatis quaerat vel beatae odit eligendi laborum magni. Veritatis omnis, nostrum blanditiis tenetur mollitia quia totam doloremque. Fugit, nemo aspernatur?</div>
                        <div class="blog-read-more"><a href="#">READ MORE <i class="fa-solid fa-angles-right"></i></a></div>
                        <hr>
                        <div class="blog-info">
                            <div class="blog-date"><i class="fa-solid fa-calendar-days"></i> Apr, 6th, 2023</div>
                            <div class="blog-author"><i class="fa-solid fa-pen"></i> Mike Sovereignborn</div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-image"><a href="#"><img src="./images/blog/blog3.png" alt=""></a></div>
                        <div class="blog-item-title"><a href="#">Meet Sleep Token, A New Rising Star In The Metal Scene</a></div>
                        <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam veritatis quaerat vel beatae odit eligendi laborum magni. Veritatis omnis, nostrum blanditiis tenetur mollitia quia totam doloremque. Fugit, nemo aspernatur?</div>
                        <div class="blog-read-more"><a href="#">READ MORE <i class="fa-solid fa-angles-right"></i></a></div>
                        <hr>
                        <div class="blog-info">
                            <div class="blog-date"><i class="fa-solid fa-calendar-days"></i> Apr, 6th, 2023</div>
                            <div class="blog-author"><i class="fa-solid fa-pen"></i> Mike Sovereignborn</div>
                        </div>
                    </div>
                </div>
                <!-- End Blog -->

                <!-- End Bottom Banner -->
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