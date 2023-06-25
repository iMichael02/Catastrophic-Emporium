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
            <div class="home"><a href="../"><img src="../logo/logo_transparent_2.png" id="logo"></a></div>
            <div class="topnav">
                <div class="topnav-item">
                    <button class="dropbtn mails"><span data-count="3"><i class="fa-solid fa-envelope"></i></span></button>
                    <div class="dropdown-content mails">
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                    </div>
                </div>
                <div class="topnav-item">
                    <button class="dropbtn notifications"><span data-count="3"><i class="fa-solid fa-bell"></i></span></button>
                    <div class="dropdown-content notifications">
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                        <a href="#">Something</a>
                    </div>
                </div>
                <div class="topnav-item">
                    <button class="dropbtn admin"><i class="fa-solid fa-user"></i> Admin1 <i class="fa-solid fa-caret-down"></i></button>
                    <div class="dropdown-content admin">
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
                <ul class="side-bar-list">
                    <li class="side-bar-item dashboard"><a href="index.php?content=dashboard"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
                    <li class="side-bar-item charts"><a href="index.php?content=charts"><i class="fa-solid fa-chart-simple"></i> Charts</a></li>
                    <li class="side-bar-item tables"><a href="index.php?content=tables"><i class="fa-solid fa-table"></i> Tables</a></li>
                    <li class="side-bar-item users"><a href="index.php?content=users"><i class="fa-solid fa-user"></i> Users</a></li>
                    <li class="side-bar-item products"><i class="fa-brands fa-product-hunt"></i> Products <i class="fa-solid fa-angle-down"></i></li>
                    <ul class="side-bar-dropdown products">
                        <li class="side-bar-dropdown-item"><a href="index.php?content=all_products">All Products</a></li>
                        <li class="side-bar-dropdown-item"><a href="index.php?content=add_product">Add Product</a></li>
                    </ul>
                    <li class="side-bar-item bands"><a href="index.php?content=bands"><i class="fa-solid fa-guitar"></i> Bands</a></li>
                    <li class="side-bar-item genres"><a href="index.php?content=genres"><i class="fa-solid fa-list"></i> Genres</a></li>
                    <li class="side-bar-item posts"><i class="fa-solid fa-newspaper"></i> Posts <i class="fa-solid fa-angle-down"></i></li>
                    <ul class="side-bar-dropdown posts">
                        <li class="side-bar-dropdown-item"><a href="index.php?content=all_posts">All Posts</a></li>
                        <li class="side-bar-dropdown-item"><a href="index.php?content=add_post">Add Post</a></li>
                    </ul>
                </ul>
            </div>
            <div class="content">
                <?php
                if (isset($_GET['content'])) {
                    $content = $_GET['content'];
                    switch($content) {
                        case "dashboard":
                            include_once "./dashboard.php";
                            break;
                        case "charts":
                            include_once "./charts.php";
                            break;
                        case "tables":
                            include_once "./tables.php";
                            break;
                        case "users":
                            include_once "./users.php";
                            break;
                        case "all_products":
                            include_once "./all-products.php";
                            break;
                        case "add_products":
                            include_once "./add-products.php";
                            break;
                        case "bands":
                            include_once "./bands.php";
                            break;
                        case "genres":
                            include_once "./genres.php";
                            break;
                        case "all_posts":
                            include_once "./all-posts.php";
                            break;
                        case "add_post":
                            include_once "./add-post.php";
                            break;
                        default:
                            include_once "./dashboard.php";
                    }
                } else {
                    include_once "./dashboard.php";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="../asset/js/admin/dropdown.js"></script>
</body>
</html>