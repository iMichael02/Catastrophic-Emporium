<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../asset/scss/style.css?v=<?php echo time(); ?>"/>
    <script src="https://kit.fontawesome.com/a11103ae03.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Admin</title>
</head>
<body>
    <div class="page-wrapper-admin">
        <!-- Header -->
        <div class="header-admin">
            <div class="home"><a href="index.php"><img src="../logo/logo_transparent_2.png" id="logo"></a></div>
            <div class="topnav">
                <div class="topnav-item">
                    <button class="dropbtn"><span data-count="3"><i class="fa-solid fa-envelope"></i></span></button>
                    <div class="dropdown-content">
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                    </div>
                </div>
                <div class="topnav-item">
                    <button class="dropbtn"><span data-count="3"><i class="fa-solid fa-bell"></i></span></button>
                    <div class="dropdown-content">
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                    </div>
                </div>
                <div class="topnav-item">
                    <button class="dropbtn"><i class="fa-solid fa-user"></i> Admin1 <i class="fa-solid fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div class="main-content-admin">
            <div class="side-bar">
                <div class="side-bar-item"><i class="fa-solid fa-gauge"></i> Dashboard</div>
                <div class="side-bar-item"><i class="fa-solid fa-chart-simple"></i> Charts</div>
                <div class="side-bar-item"><i class="fa-solid fa-table"></i> Tables</div>
                <div class="side-bar-item"><i class="fa-solid fa-file-pen"></i> Forms</div>
            </div>
            <div class="content"></div>
        </div>
    </div>
    <script>
    $(".dropbtn").addEvenListener("click", () => {
    $(this).toggleClass("active");
    });
    </script>
</body>
</html>