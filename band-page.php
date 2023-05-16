<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./asset/scss/style.css"/>
    <script src="https://kit.fontawesome.com/a11103ae03.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script> 
        $(function(){
            $("#header").load("./asset/header&footer/header.html");
            $("#footer").load("./asset/header&footer/footer.html");
        });
    </script>
    <title>Bring Me The Horizon Store</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-band-page">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./home.html">Home</a></div>
                    <div class="breadcrumb-item">Bands</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <div class="band-description">
                    <div class="banner">
                        <img src="./images/band-banner/Bring-Me-The-Horizon.png" alt="">
                    </div>
                    <div class="info-container">
                        <div class="info">
                            <p class="name">Bring Me The Horizon</p>
                            <div class="description">
                                <p class="bibliography">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eaque nemo explicabo asperiores, at ratione laudantium numquam provident. Suscipit consequatur harum similique ullam perferendis a iure laboriosam eveniet cum incidunt?</p>
                                <div class="collapsible">
                                    <div class="accordion">
                                        <button type="button" class="accordion-button">What was Bring Me The Horizon's biggest hit?</button>
                                        <div class="accordion-content">
                                            <p>"Throne" from their fifth studio album "That's The Spirit"</p>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <button type="button" class="accordion-button">Which Bring Me The Horizon's album sold the most?</button>
                                        <div class="accordion-content">
                                            <p>"That's The Spirit", their fifth studio album</p>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <button type="button" class="accordion-button">What is Bring Me The Horizon's total album sales?</button>
                                        <div class="accordion-content">
                                            <p>Bring Me The Horizon has sold over 4,000,000 albums worldwide, including 1,000,000 in the United States and 680,000 in the United Kingdom</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-grid">
                    <div class="product-type-title apparels-title">Apparels</div>
                    <ul class="product-type apparels">
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">T-Shirts</li>
                        <li class="product-option apparels-option"><input type="checkbox" id="" name="" class="option">Sweat Shirts</li>
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
                    <div class="mid-grid-container" id="page1">
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest1.png" alt=""></a></div>
                                <div class="grid-item-title">Bring Me The Horizon</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Sempiternal T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest1.png" alt=""></a></div>
                                <div class="grid-item-title">Bring Me The Horizon</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Sempiternal T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest1.png" alt=""></a></div>
                                <div class="grid-item-title">Bring Me The Horizon</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Sempiternal T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest1.png" alt=""></a></div>
                                <div class="grid-item-title">Bring Me The Horizon</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Sempiternal T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest1.png" alt=""></a></div>
                                <div class="grid-item-title">Bring Me The Horizon</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Sempiternal T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest1.png" alt=""></a></div>
                                <div class="grid-item-title">Bring Me The Horizon</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Sempiternal T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mid-grid-container" id="page2">
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest2.png" alt=""></a></div>
                                <div class="grid-item-title">Architects</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Wolf T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest2.png" alt=""></a></div>
                                <div class="grid-item-title">Architects</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Wolf T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest2.png" alt=""></a></div>
                                <div class="grid-item-title">Architects</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Wolf T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest2.png" alt=""></a></div>
                                <div class="grid-item-title">Architects</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Wolf T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest2.png" alt=""></a></div>
                                <div class="grid-item-title">Architects</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Wolf T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest2.png" alt=""></a></div>
                                <div class="grid-item-title">Architects</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">Wolf T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mid-grid-container" id="page3">
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest3.png" alt=""></a></div>
                                <div class="grid-item-title">Lorna Shore</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">And I Return To Nothiness... T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest3.png" alt=""></a></div>
                                <div class="grid-item-title">Lorna Shore</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">And I Return To Nothiness... T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest3.png" alt=""></a></div>
                                <div class="grid-item-title">Lorna Shore</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">And I Return To Nothiness... T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest3.png" alt=""></a></div>
                                <div class="grid-item-title">Lorna Shore</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">And I Return To Nothiness... T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest3.png" alt=""></a></div>
                                <div class="grid-item-title">Lorna Shore</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">And I Return To Nothiness... T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-item-container">
                                <div class="grid-item-image"><a href="#" class="grid-item-link"><img src="./images/latest/latest3.png" alt=""></a></div>
                                <div class="grid-item-title">Lorna Shore</div>
                                <div class="grid-item-name"><a href="#" class="grid-item-link">And I Return To Nothiness... T-Shirt</a></div>
                                <div class="grid-item-price">280.000VND</div>
                                <div class="grid-item-shopping-options">
                                    <a href="#" class="shopping-option-link buy-now-link"><div class="buy-now"><div>Buy Now</div></div></a>
                                    <a href="#" class="shopping-option-link add-to-cart-link"><div class="add-to-cart"><div><i class="fa-solid fa-cart-shopping"></i></div></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-nav">
                        <ul class="page-nav-container" id="page-nav-container">
                            <li class="page-nav-item" onclick="pageChange(this)" id="page-nav-item1">1</li>
                            <li class="page-nav-item" onclick="pageChange(this)" id="page-nav-item2">2</li>
                            <li class="page-nav-item" onclick="pageChange(this)" id="page-nav-item3">3</li>
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