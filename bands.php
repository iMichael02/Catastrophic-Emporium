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
    <title>Bands</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-bands" style="background: url('./images/background/homebg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./index.php">Home</a></div>
                    <div class="breadcrumb-item">Bands</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <div class="main-content-container">
                <div class="main-content-grid-item">
                    <div class="grid-item-title">A</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Anthrax</a></li>
                        <li class="grid-list-item"><a>Architects</a></li>
                        <li class="grid-list-item"><a>Avenged Sevenfold</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">B</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Black Sabbath</a></li>
                        <li class="grid-list-item"><a href="./band-page.php">Bring Me The Horizon</a></li>
                        <li class="grid-list-item"><a>Bon Jovi</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">C</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Cannibal Corpse</a></li>
                        <li class="grid-list-item"><a>Carnifex</a></li>
                        <li class="grid-list-item"><a>Cradle Of Filth</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">D</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Darkthrone</a></li>
                        <li class="grid-list-item"><a>Deicide</a></li>
                        <li class="grid-list-item"><a>Disturbed</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">E</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Electric Callboy</a></li>
                        <li class="grid-list-item"><a>Emperor</a></li>
                        <li class="grid-list-item"><a>Exodus</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">F</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Falling In Reverse</a></li>
                        <li class="grid-list-item"><a>Fit For A King</a></li>
                        <li class="grid-list-item"><a>Fit For An Autopsy</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">G</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Ghost</a></li>
                        <li class="grid-list-item"><a>Gojira</a></li>
                        <li class="grid-list-item"><a>Gorgoroth</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">H</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Hatebreed</a></li>
                        <li class="grid-list-item"><a>Heaven Shall Burn</a></li>
                        <li class="grid-list-item"><a>Helloween</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">I</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Impending Doom</a></li>
                        <li class="grid-list-item"><a>Infant Annihilator</a></li>
                        <li class="grid-list-item"><a>Iron Maiden</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">J</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Jinjer</a></li>
                        <li class="grid-list-item"><a>Job For A Cowboy</a></li>
                        <li class="grid-list-item"><a>Judas Priest</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">K</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Killswitch Engage</a></li>
                        <li class="grid-list-item"><a>Korn</a></li>
                        <li class="grid-list-item"><a>Knock Loose</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">L</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Lamb Of God</a></li>
                        <li class="grid-list-item"><a>Lorna Shore</a></li>
                        <li class="grid-list-item"><a>Linkin Park</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">M</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Metallica</a></li>
                        <li class="grid-list-item"><a>Motionless In White</a></li>
                        <li class="grid-list-item"><a>Mudvayne</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">N</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Napalm Death</a></li>
                        <li class="grid-list-item"><a>Norma Jean</a></li>
                        <li class="grid-list-item"><a>Northlane</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">O</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Obituary</a></li>
                        <li class="grid-list-item"><a>Of Mice And Men</a></li>
                        <li class="grid-list-item"><a>Opeth</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">P</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Pantera</a></li>
                        <li class="grid-list-item"><a>Parkway Drive</a></li>
                        <li class="grid-list-item"><a>Possessed</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">Q</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>QueenSryche</a></li>
                        <li class="grid-list-item"><a>Quiet Riot</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">R</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Rage Against The Machine</a></li>
                        <li class="grid-list-item"><a>Rammstein</a></li>
                        <li class="grid-list-item"><a>Rings Of Saturn</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">S</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Slaughter To Prevail</a></li>
                        <li class="grid-list-item"><a>Slipknot</a></li>
                        <li class="grid-list-item"><a>Suicide Silence</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">T</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Three Days Grace</a></li>
                        <li class="grid-list-item"><a>Thy Art Is Murder</a></li>
                        <li class="grid-list-item"><a>Trivium</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">U</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Underoath</a></li>
                        <li class="grid-list-item"><a>Unearth</a></li>
                        <li class="grid-list-item"><a>Upon A Burning Body</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">V</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Veil Of Maya</a></li>
                        <li class="grid-list-item"><a>Venom</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">W</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a>Waking The Cadaver</a></li>
                        <li class="grid-list-item"><a>Wage War</a></li>
                        <li class="grid-list-item"><a>We Came As Roman</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">X</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a><span>Xavleg...</span></a></li>
                        <li class="grid-list-item"><a>X-Japan</a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">Y</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a></a></li>
                    </ul>
                </div>
                <div class="main-content-grid-item">
                    <div class="grid-item-title">Z</div>
                    <ul class="grid-list">
                        <li class="grid-list-item"><a></a></li>
                    </ul>
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
</body>
</html>