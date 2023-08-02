<?php
session_start();
include "./dbconnect.php";

$members = $maindb->member;
$members_list = $members->find([]);
$first_member = $members->findOne([]);
if (isset($_POST['register'])) {
    $email = strtolower($_POST['email']);
    $searched_member = $members->findOne(['email' => $email]);
    if ($searched_member == null) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $cfpassword = $_POST['cfpassword'];
        if (preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/[0-9]/', $password)) {
            if ($cfpassword != $password) {
                ?>
                <script type="text/javascript">
                    window.alert("Passwords don't match!");
                </script>
                <?php
                header("Location: register.php");
            } else {
                $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
                $dname = $fname." ".$lname;
                $largest = $first_member->_id;
                foreach ($members_list as $member) {
                    if ($member->_id > $largest) {
                        $largest = $member->_id;
                    }
                }
                $largest = $largest + 1;
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $title = [];
                $title["new_member"] = date("d-m-Y", strtotime('now'));
                $title["active_member"] = "";
                $title["certified_writer"] = "";
                $title["the_creator"] = "";
                $cursor = $members->insertOne([
                    '_id' => $largest,
                    'email' => $email,
                    'fname' => $fname,
                    'lname' => $lname,
                    'joint_date' => date("d-m-Y", strtotime('now')),
                    'display_name' => $dname,
                    'title' => $title,
                    'followers' => [],
                    'follow_bands' => [],
                    'profile_pic' => "",
                    'admin' => false,
                    'blogs' => [],
                    'comments' => [],
                    'address' => "",
                    'phone' => "",
                    'media' => [],
                    'password' => $password,
                    'status' => "normal",
                    'ban' => []
                ]);
                
                $_SESSION['uid'] = $largest;
                header("Location: index.php");
            }
        } else {
            ?>
            <script type="text/javascript">
                window.alert("Choose another password!");
            </script>
            <?php
        }
    } else {
        ?>
        <script type="text/javascript">
            window.alert("Email used!");
        </script>
        <?php
        header("Location: register.php");
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
    <title>Register</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <?php
        include "./asset/header&footer/header.php"
        ?>
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
                    <div class="breadcrumb-item">Register</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <form action="./register.php" class="register-form" method="post">
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
                    <button type="submit" name="register" value="submit">Register</button>
                </form>
                <div class="division-line"><span class="division-text">or</span></div>
                <div class="login-option"><a href="./login.php" class="login-link">Login</a> if you already have an account</div>
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