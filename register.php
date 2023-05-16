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
    <title>Blogs</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-register">
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
                <form class="subscribe-form">
                    <label for="fname" class="subscribe-label">First Name:</label><br><br>
                    <input type="text" id="fname" name="fname" class="subscribe-input" placeholder="Enter your first name"><br><br>
                    <label for="lname" class="subscribe-label">Last Name:</label><br><br>
                    <input type="text" id="lname" name="lname" class="subscribe-input" placeholder="Enter your last name"><br><br>
                    <label for="email" class="subscribe-label">Email:</label><br><br>
                    <input type="email" id="email" name="email" class="subscribe-input" placeholder="Enter your email"><br><br>
                    <label for="password" class="subscribe-label">Password:</label><br><br>
                    <input type="password" id="password" name="password" class="subscribe-input" placeholder="Enter you password"><br><br>
                    <label for="cfpassword" class="subscribe-label">Confirm Password:</label><br><br>
                    <input type="password" id="cfpassword" name="cfpassword" class="subscribe-input" placeholder="Enter you password again"><br><br>
                    <input type="checkbox"><span class="submit-text">I agree with all <a href="#">Terms and Conditions</a></span>
                    <br><br>
                    <input type="submit" value="Submit">
                </form>
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