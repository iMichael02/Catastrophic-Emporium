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
    <title>Genres</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-genres">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./home.html">Home</a></div>
                    <div class="breadcrumb-item">Genres</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <ul class="genres-list">
                    <li class="genre"><a href="#">Black Metal</a></li>
                    <li class="genre"><a href="#">Christian Metal</a></li>
                    <li class="genre"><a href="#">Death Metal</a></li>
                    <li class="genre"><a href="#">Deathcore</a></li>
                    <li class="genre"><a href="#">Doom Metal</a></li>
                    <li class="genre"><a href="#">Experimental Metal</a></li>
                    <li class="genre"><a href="#">Extreme Metal</a></li>
                    <li class="genre"><a href="#">Folk Metal</a></li>
                    <li class="genre"><a href="#">Glam Metal</a></li>
                    <li class="genre"><a href="#">Gothic Metal</a></li>
                    <li class="genre"><a href="#">Grindcore</a></li>
                    <li class="genre"><a href="#">Groove Metal</a></li>
                    <li class="genre"><a href="#">Industrial Metal</a></li>
                    <li class="genre"><a href="#">Black Metal</a></li>
                    <li class="genre"><a href="#">Heavy Metal</a></li>
                    <li class="genre"><a href="./genre-page.html">Metalcore</a></li>
                    <li class="genre"><a href="#">Power Metal</a></li>
                    <li class="genre"><a href="#">Progressive Metal</a></li>
                    <li class="genre"><a href="#">Speed Metal</a></li>
                    <li class="genre"><a href="#">Symphonic Metal</a></li>
                    <li class="genre"><a href="#">Thrash Metal</a></li>
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