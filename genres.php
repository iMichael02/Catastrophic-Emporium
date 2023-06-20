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
    <title>Genres</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-genres" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item">Genres</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <ul class="genres-list">
                    <li class="genre"><a href="./genre-page.php?id=1">Avant-garde Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=2">Black Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=3">Christian Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=4">Death Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=5">Deathcore</a></li>
                    <li class="genre"><a href="./genre-page.php?id=6">Doom Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=7">Folk Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=8">Glam Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=9">Gothic Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=10">Grindcore</a></li>
                    <li class="genre"><a href="./genre-page.php?id=11">Groove Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=12">Industrial Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=13">Heavy Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=14">Metalcore</a></li>
                    <li class="genre"><a href="./genre-page.php?id=15">Nü Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=16">Power Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=17">Progressive Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=18">Speed Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=19">Symphonic Metal</a></li>
                    <li class="genre"><a href="./genre-page.php?id=20">Thrash Metal</a></li>
                </ul>
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