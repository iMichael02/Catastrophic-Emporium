<?php
include "./dbconnect.php";
include "./load-profile.php";
include "./functions.php";
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
    <script> 
        $(function(){
            $("#header").load("./asset/header&footer/header.php");
            $("#footer").load("./asset/header&footer/footer.php");
        });
    </script>
    <title><?php echo $profile->fname." ".$profile->lname ?></title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-profile" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item"><a href="#">User</a></div>
                    <div class="breadcrumb-item">Mike Sovereignborn</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->

            <div class="main-content-container">
                <div class="profile-block block1">
                    <div class="profile-pic">
                        <img src="./logo/facebook_profile_image.png" alt="">
                    </div>
                    <div class="name"><?php echo $profile->display_name ?></div>
                    <div class="description">
                        <?php
                        if ($profile->title->the_creator == "") {
                            if ($profile->title->certified_writer == "") {
                                if ($profile->title->active_member == "") {
                                    echo "New Member";
                                } else {
                                    echo "Active Member";
                                }
                            } else {
                                echo "Certified Writer";
                            }
                        } else {
                            echo "The Creator";
                        }
                        ?>
                    </div>
                    <div class="followers"><?php echo sizeof($profile->followers) ?> Followers | 
                    <?php echo $total_upvote ?> <i class="fa-solid fa-up-long"></i> | <?php echo $total_downvote ?> <i class="fa-solid fa-down-long"></i></div>
                    <button class="follow-button">Follow</button>
                </div>
                <div class="profile-block block2">
                    <div class="info row-name">
                        <div class="title">Full Name</div>
                        <div class="name"><?php echo $profile->fname." ".$profile->lname ?></div>
                    </div>
                    <div class="info row-joint-date">
                        <div class="title">Joint Date</div>
                        <div class="joint-date"><?php echo $profile->joint_date ?></div>
                    </div>
                    <div class="info row-phone">
                        <div class="title">Phone</div>
                        <div class="phone"><?php echo $profile->phone ?></div>
                    </div>
                    <div class="info row-address">
                        <div class="title">Address</div>
                        <div class="address"><?php echo $profile->address ?></div>
                    </div>
                    <div class="info row-blogs">
                        <div class="title">Blogs Written</div>
                        <div class="blogs"><?php echo sizeof($profile->blogs) ?></div>
                    </div>
                </div>
                <div class="profile-block block3">
                    <div class="title">Other Media</div>
                    <div class="media-container">
                        <div class="media row-facebook">
                            <div class="icon facebook"><i class="fa-brands fa-facebook-f"></i></div>
                            <div class="link"><a href="<?php echo $profile->media[0] ?>"><?php echo $profile->media[0] ?></a></div>
                        </div>
                        <div class="media row-instagram">
                            <div class="icon instagram"><i class="fa-brands fa-square-instagram"></i></div>
                            <div class="link"><a href="<?php echo $profile->media[1] ?>"><?php echo $profile->media[1] ?></a></div>
                        </div>
                        <div class="media row-reddit">
                            <div class="icon reddit"><i class="fa-brands fa-reddit-alien"></i></div>
                            <div class="link"><a href="<?php echo $profile->media[2] ?>"><?php echo $profile->media[2] ?></a></div>
                        </div>
                        <div class="media row-twitter">
                            <div class="icon twitter"><i class="fa-brands fa-twitter"></i></div>
                            <div class="link"><a href="<?php echo $profile->media[3] ?>"><?php echo $profile->media[3] ?></a></div>
                        </div>
                        <div class="media row-google">
                            <div class="icon google"><i class="fa-solid fa-envelope"></i></div>
                            <div class="link"><?php echo $profile->media[4] ?></div>
                        </div>
                    </div>
                </div>
                <div class="profile-block block4">
                    <div class="slide-buttons">
                        <div class="slide-button blogs-button" onclick="showBlog()">Blogs</div>
                        <div class="slide-button achievements-button" onclick="showAchievement()">Achievements</div>
                    </div>
                    <div class="slide-content">
                        <div class="blogs-content" id="blogs-content">
                            <?php
                            foreach($display_list as $blog) {
                                ?>
                                <div class="blog">
                                    <div class="thumbnail">
                                        <img src="data:image/png;base64,<?php echo $blog->thumbnail ?>" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="title"><?php echo $blog->title ?></div>
                                        <div class="time-date"><?php echo $blog->time ?></div>
                                    </div>
                                    <a href="./blog-page.php" class="blog-link">
                                        <span class="link-spanner"></span>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="blog-nav">
                                <ul class="blog-nav-container" id="blog-nav-container">
                                    <?php
                                    for ($i = 1; $i <= $pages; $i++) {
                                        if ($page == $i) {
                                            ?>
                                            <li class="blog-nav-item selected"><a href="./profile.php?id=<?php echo $profile->_id?>&page=<?php echo $i?>"><?php echo $i?></a></li>
                                            <?php
                                        } elseif ($page == "" && $i == 1) {
                                            ?>
                                            <li class="blog-nav-item selected"><a href="./profile.php?id=<?php echo $profile->_id?>&page=<?php echo $i?>"><?php echo $i?></a></li>
                                            <?php
                                        } else {
                                            ?>
                                            <li class="blog-nav-item"><a href="./profile.php?id=<?php echo $profile->_id?>&page=<?php echo $i?>"><?php echo $i?></a></li>
                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="achievements-content" id="achievements-content">
                            <div class="timeline">
                                <div class="time-stamp">
                                    <div class="time-stamp-content">
                                        <h3 class="date"><?php echo $profile->joint_date ?></h3>
                                        <p class="achievement">Joint Catastrophic Emporium</p>
                                    </div>
                                </div>
                                <?php
                                if ($timeline != []) {
                                    for ($i = 0; $i < sizeof($timeline); $i++) {
                                        ?>
                                        <div class="time-stamp">
                                            <div class="time-stamp-content">
                                                <h3 class="date"><?php echo substr($timeline[$i][0]->time, 0, 10) ?></h3>
                                                <p class="achievement"><?php echo $timeline[$i][1] ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="./asset/js/profile/blognav.js"></script>
    <script src="./asset/js/profile/slidenav.js"></script>
</body>
</html>