        <!-- Mobile Search Bar -->
        <div class="mobile-search-bar" id="mobile-search-bar">
            <div class="top-search-bar">
                <div class="top-search-bar-item back-icon" onclick="closeSearch()"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="top-search-bar-item"><input type="text" class="search-field-mobile"></div>
                <div class="top-search-bar-item search-icon"><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></div>
            </div>
            <div class="search-title">Recently searched</div>
            <div class="search-list">
                <div class="search-list-item">placeholder</div>
                <div class="search-list-item">placeholder</div>
                <div class="search-list-item">placeholder</div>
            </div>
        </div>
        <!-- End Mobile Search Bar -->

        <!-- Header -->
        <header class="header">
            <div class="header-container">
                <div class="header-item slogan">100% Imaginarily Licensed Merchandises</div>
                <div class="header-item wistlist"><a href="./wishlist.php">Wishlist</a></div>
                <div class="header-item register"><a href="./register.php">Register</a></div>
                <div class="header-item account"><a href="./profile.php"><i class="fa-solid fa-user"></i></a></div>
                <div class="header-item cart"><a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i></a></div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Menu -->
        <div class="topnavbar">
            <div class="topnav-container">
                <div class="home"><a href="index.php"><img src="./logo/logo_transparent_2.png" id="logo"></a></div>
                <div class="topnav">
                    <a class="topnav-item" href="./index.php">Home</a>
                    <a class="topnav-item" href="./store.php">Store</a>
                    <a class="topnav-item" href="./bands.php">Bands</a>
                    <a class="topnav-item" href="./genres.php">Genres</a>
                    <a class="topnav-item" href="./blogs.php">Blogs</a>
                    <form action="">
                        <div class="search-form">
                            <button class="topnav-item button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input class="topnav-item search-field" type="text" placeholder="Search...">
                        </div>
                    </form>
                </div>
                <div class="topnav-icon" id="myTopNavIcon"><a onclick="showNavItem()"><i class="fa-solid fa-bars"></i></a></div>
            </div>
        </div>
        <div class="topnav-mobile" id="topnav-mobile">
            <a class="searchm" onclick="openSearch()"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
            <a href="./home.html" class="homem">Home</a>
            <a href="./store.html" class="storem">Store</a>
            <a href="./bands.html" class="bandsm">Bands</a>
            <a href="./genres.html" class="genresm">Genres</a>
            <a href="./blogs.html" class="blogsm">Genres</a>
        </div>
        <!-- End Menu -->