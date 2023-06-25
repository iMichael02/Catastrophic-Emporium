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
    <title>Register</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-register" style="background: url('./images/background/homebg.png');
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
                <form class="register-form">
                    <label for="fname" class="register-label">First Name:</label><br>
                    <input type="text" id="fname" name="fname" class="register-input" placeholder="Enter your first name"><br><br>
                    <label for="lname" class="register-label">Last Name:</label><br>
                    <input type="text" id="lname" name="lname" class="register-input" placeholder="Enter your last name"><br><br>
                    <label for="email" class="register-label">Email:</label><br>
                    <input type="email" id="email" name="email" class="register-input" placeholder="Enter your email"><br><br>
                    <label for="password" class="register-label">Password:</label><br>
                    <input type="password" id="password" name="password" class="register-input" placeholder="Enter you password"><br>
                    <div class="password-notice">Password's length should be at least 8 characters and should consist of uppercase, lowercase letter and number</div><br>
                    <label for="cfpassword" class="register-label">Confirm Password:</label><br>
                    <input type="password" id="cfpassword" name="cfpassword" class="register-input" placeholder="Enter you password again"><br><br>
                    <input type="checkbox"><span class="submit-text">I agree with all <a href="#">Terms and Conditions</a></span>
                    <br><br>
                    <button type="submit" name="submit">Register</button>
                </form>
                <div class="division-line"><span class="division-text">or</span></div>
                <div class="login-option"><a href="#" class="login-link">Login</a> if you already have an account</div>
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