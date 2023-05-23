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
    <title>Blogs</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
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
                    <div class="heading-item">Type</div>
                    <div class="heading-item">Price</div>
                    <div class="heading-item">Actions</div>
                </div>
                <div class="items-list">
                    <div class="item">
                        <div class="item-info item-image">
                            <a href="#">
                                <img src="./images/latest/latest1.png">
                            </a>
                        </div>
                        <div class="item-info item-name"><p>Sempiternal T-Shirt</p></div>
                        <div class="item-info item-type"><p>XL</p></div>
                        <div class="item-info item-price"><p>280.000 VND</p></div>
                        <div class="item-info item-action">
                            <div class="action-container">
                                <div class="action1"><a href="#">Delete item</a></div>
                                <div class="action2"><a href="#">Find similar items</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info item-image">
                            <a href="#">
                                <img src="./images/latest/latest2.png">
                            </a>
                        </div>
                        <div class="item-info item-name"><p>Wolf T-Shirt</p></div>
                        <div class="item-info item-type"><p>XL</p></div>
                        <div class="item-info item-price"><p>280.000 VND</p></div>
                        <div class="item-info item-action">
                            <div class="action-container">
                                <div class="action1"><a href="#">Delete item</a></div>
                                <div class="action2"><a href="#">Find similar items</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info item-image">
                            <a href="#">
                                <img src="./images/latest/latest3.png">
                            </a>
                        </div>
                        <div class="item-info item-name"><p>And I Return To Nothingness T-Shirt</p></div>
                        <div class="item-info item-type"><p>XL</p></div>
                        <div class="item-info item-price"><p>280.000 VND</p></div>
                        <div class="item-info item-action">
                            <div class="action-container">
                                <div class="action1"><a href="#">Delete item</a></div>
                                <div class="action2"><a href="#">Find similar items</a></div>
                            </div>
                        </div>
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
</body>
</html>