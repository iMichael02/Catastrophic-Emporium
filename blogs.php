<?php
session_start();
include "./dbconnect.php";
include "./functions.php";
$blogs = $maindb->blog;
$members = $maindb->member;
$blogs_list = $blogs->find([]);
$members_list = $members->find([]);
$sorted_blog_list = [];
foreach ($blogs_list as $blog) {
    $sorted_blog_list[] = $blog;
}
usort($sorted_blog_list, function ($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
});
if (isset($_GET['page'])) {
    $page = (int)$_GET['page'];
    $skip = 6 * ($page - 1);
} else {
    $page = 1;
    $skip = 0;
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
    <title>Blogs</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <?php
        include "./asset/header&footer/header.php";
        ?>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-blogs" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item">Blogs</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->

            <!-- Main Content Container -->
            <div class="main-content-container">
                <?php
                for ($i = sizeof($sorted_blog_list) - 1 - $skip; $i > sizeof($sorted_blog_list) - 1 - $skip - 6; $i--) {
                    if ($i >= 0) {
                ?>
                <div class="blog">
                    <div class="blog-container">
                        <div class="thumbnail" id="thumbnail">
                            <img src="data:image/png;base64,<?= $sorted_blog_list[$i]->thumbnail ?>" alt="" id="thumbnail-pic">
                        </div>
                        <div class="post-info">
                            <div class="post-title-and-author">
                                <div class="post-title"><?= $sorted_blog_list[$i]->title ?></div>
                                <div class="post-author">
                                    <div class="profile-pic">
                                        <img src="data:image/png;base64,<?php
                                        $author = $members->findOne(['_id' => $sorted_blog_list[$i]->author]);
                                        echo $author->profile_pic;
                                        ?>" alt="">
                                    </div>
                                    <div class="author-info">
                                        <div class="name"><?= $author->display_name ?></div>
                                        <hr>
                                        <div class="joint-date">Joint <?= $author->joint_date ?></div>
                                        <div class="title"><?php
                                        if($author->title->active_member != "") {
                                            if($author->title->certified_writer != "") {
                                                if($author->title->the_creator != "") {
                                                    echo "The Creator";
                                                } else {
                                                    echo "Certified Writer";
                                                }
                                            } else {
                                                echo "Active Member";
                                            }
                                        } else {
                                            echo "New Member";
                                        }
                                        ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="time-date">
                            <div class="date"><?= substr($sorted_blog_list[$i]->time, 0, 10) ?></div>
                            <div class="time"><?= substr($sorted_blog_list[$i]->time, 11, 8) ?></div>
                        </div>
                    </div>
                    <a href="./blog-page.php?id=<?= $sorted_blog_list[$i]->_id ?>" class="blog-link">
                        <span class="link-spanner"></span>
                    </a>
                </div>
                <?php
                    }
                }
                ?>
                <div class="page-nav">
                    <ul class="page-nav-container" id="page-nav-container">
                        <?php
                        $pages = ceil(sizeof($sorted_blog_list)/6);
                        for ($i = 1; $i <= $pages; $i++) {
                            if ($page == $i) {
                                ?>
                                <li class="page-nav-item selected"><a href="./blogs.php?page=<?= $i ?>"><?= $i?></a></li>
                                <?php
                            } elseif ($page == "" && $i == 1) {
                                ?>
                                <li class="page-nav-item selected"><a href="./blogs.php?page=<?= $i ?>"><?= $i?></a></li>
                                <?php
                            } else {
                                ?>
                                <li class="page-nav-item"><a href="./blogs.php?page=<?= $i ?>"><?php echo $i?></a></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- End Main Content Container -->
        </div>
        <!-- End Main Content -->

        <!-- Footer -->
        <?php
        include "./asset/header&footer/header.php";
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
    <script src="./asset/js/blogs/pagenav.js"></script>
</body>
</html>