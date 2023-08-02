<?php
session_start();
include "./dbconnect.php";
include "./functions.php";
if(isset($_GET['id'])) {
    $bid = (int)$_GET['id'];
    $blogs = $maindb->blog;
    $target_blog = $blogs->findOne(['_id' => $bid]);
    $members = $maindb->member;
    $author = $members->findOne(['_id' => $target_blog->author]);
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
    <title><?= $target_blog->title ?></title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <?php
        include "./asset/header&footer/header.php";
        ?>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-blog-page" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item"><a href="./store.php">Blogs</a></div>
                    <div class="breadcrumb-item"><?= $target_blog->title ?></div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="blog-page-container">
                <div class="blog-head" style="background-image: url('data:image/png;base64,<?= $target_blog->thumbnail ?>');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                width: 100%;">
                    <div class="score" id="score">
                        <div class="votes upvotes">
                            <div class="arrow up"><i class="fa-solid fa-arrow-up"></i></div>
                            <div class="number"><?= sizeof((array)$target_blog->upvote) ?></div>
                        </div>
                        <div class="votes downvotes">
                            <div class="arrow up"><i class="fa-solid fa-arrow-down"></i></div>
                            <div class="number"><?= sizeof((array)$target_blog->downvote) ?></div>
                        </div>
                    </div>
                    <div class="blog-info" id="blog-info">
                        <div class="title"><?= $target_blog->title ?></div>
                        <div class="author">
                            <div class="profile-pic">
                                <img src="data:image/png;base64,<?= $author->profile_pic ?>" alt="">
                            </div>
                            <div class="author-info">
                                <div class="name"><?= $author->display_name ?></div>
                                <div class="description"><?php
                                if ($author->title->active_member != "") {
                                    if ($author->title->certified_writer != "") {
                                        if ($author->title->the_creator != "") {
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
                                <div class="joint-date"><?= $author->joint_date ?></div>
                            </div>
                        </div>
                        <div class="time-date">
                            <div class="date"><?= substr($target_blog->time, 0, 10) ?></div>
                            <div class="time"><?= substr($target_blog->time, 11, 8) ?></div>
                        </div>
                    </div>
                </div>
                <div class="blog-content">
                    <?= $target_blog->content ?>
                </div>
                <hr>
                <div class="argument">
                    <div class="user">
                        <div class="profile-pic">
                            <img src="./logo/facebook_profile_image.png" alt="">
                        </div>
                        <div class="user-info">
                            <div class="name">Ozzymandias666</div>
                            <div class="description">Active Member</div>
                            <div class="joint-date">Joint Apr 4th, 2023</div>
                        </div>
                    </div>
                    <div class="argument-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate deserunt et nam ex hic illum ipsa inventore! Dolore libero architecto repudiandae! Reprehenderit aut sunt maxime pariatur, atque accusantium odio possimus.</p>
                    </div>
                    <div class="votes">
                        <div class="upvotes"><i class="fa-solid fa-arrow-up"></i> 10</div>
                        <div class="downvotes"><i class="fa-solid fa-arrow-down"></i> 1</div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Main Content -->

        <!-- Footer -->
        <?php
        include "./asset/header&footer/footer.php";
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
    <script src="./asset/js/blog-page/blogCover.js"></script>
</body>
</html>