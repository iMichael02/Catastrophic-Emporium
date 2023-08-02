<?php
session_start();
include "./dbconnect.php";

$members = $maindb->member;
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $searched_member = $members->findOne(['email' => $email]);
    if ($searched_member != null) {
        if(password_verify($password, $searched_member->password)) {
            $_SESSION['uid'] = $searched_member->_id;
            header("Location: ./index.php");
        } else {
            header("Location: ./login.php");
        }
    }
}
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
    <title>Login</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <?php
        include "./asset/header&footer/header.php"
        ?>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-login" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item">Login</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <form class="login-form" method="post" action="./login.php">
                    <label for="email" class="login-label">Email:</label><br>
                    <input type="email" id="email" name="email" class="login-input" placeholder="Enter your email"><br><br>
                    <label for="password" class="login-label">Password:</label><br>
                    <input type="password" id="password" name="password" class="login-input" placeholder="Enter you password"><br><br>
                    <button type="submit" name="login">Login</button>
                </form>
                <div class="division-line"><span class="division-text">Don't have an account yet?</span></div>
                <div class="register-option"><a href="./register.php" class="register-link">Register</a> to Catastrophic Emporium</div>
            </div>
        </div>
        <!-- End Main Content -->
        
        <!-- Footer -->
        <?php
        include "./asset/header&footer/footer.php"
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
</body>
</html>