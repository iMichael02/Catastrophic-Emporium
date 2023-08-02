<form id="filter-form" method="get">
    <div class="product-type-title apparels-title">Apparels</div>
    <ul class="product-type apparels">
        <li class="product-option apparels-option"><input type="checkbox" id="" name="type[0]" value="t_shirt" class="option" 
        <?php
        if (isset($_GET['type'][0])) {
            echo "checked";
        }
        ?>>T-Shirts</li>
        <li class="product-option apparels-option"><input type="checkbox" id="" name="type[1]" value="sweatshirt" class="option" 
        <?php
        if (isset($_GET['type'][1])) {
            echo "checked";
        }
        ?>>Sweatshirts</li>
        <li class="product-option apparels-option"><input type="checkbox" id="" name="type[2]" value="hoodie" class="option" 
        <?php
        if (isset($_GET['type'][2])) {
            echo "checked";
        }
        ?>>Hoodies</li>
        <li class="product-option apparels-option"><input type="checkbox" id="" name="type[3]" value="shorts" class="option" 
        <?php
        if (isset($_GET['type'][3])) {
            echo "checked";
        }
        ?>>Shorts</li>
        <li class="product-option apparels-option"><input type="checkbox" id="" name="type[4]" value="pants" class="option" 
        <?php
        if (isset($_GET['type'][4])) {
            echo "checked";
        }
        ?>>Pants</li>
        <li class="product-option apparels-option"><input type="checkbox" id="" name="type[5]" value="shoes" class="option" 
        <?php
        if (isset($_GET['type'][5])) {
            echo "checked";
        }
        ?>>Shoes</li>
        <li class="product-option apparels-option"><input type="checkbox" id="" name="type[6]" value="hat" class="option" 
        <?php
        if (isset($_GET['type'][6])) {
            echo "checked";
        }
        ?>>Hats</li>
        <li class="product-option apparels-option"><input type="checkbox" id="" name="type[7]" value="tank_top" class="option" 
        <?php
        if (isset($_GET['type'][7])) {
            echo "checked";
        }
        ?>>Tank-tops</li>
        <li class="product-option apparels-option"><input type="checkbox" id="" name="type[8]" value="mask" class="option" 
        <?php
        if (isset($_GET['type'][8])) {
            echo "checked";
        }
        ?>>Masks</li>
    </ul>
    <hr>
    <div class="product-type-title accessories-title">Accessories</div>
    <ul class="product-type accessories">
        <li class="product-option accessories-option"><input type="checkbox" id="" name="type[9]" value="necklace" class="option" 
        <?php
        if (isset($_GET['type'][9])) {
            echo "checked";
        }
        ?>>Necklaces</li>
        <li class="product-option accessories-option"><input type="checkbox" id="" name="type[10]" value="ring" class="option" 
        <?php
        if (isset($_GET['type'][10])) {
            echo "checked";
        }
        ?>>Rings</li>
        <li class="product-option accessories-option"><input type="checkbox" id="" name="type[11]" value="bracelet" class="option" 
        <?php
        if (isset($_GET['type'][11])) {
            echo "checked";
        }
        ?>>Bracelets</li>
        <li class="product-option accessories-option"><input type="checkbox" id="" name="type[12]" value="earing" class="option" 
        <?php
        if (isset($_GET['type'][12])) {
            echo "checked";
        }
        ?>>Earings</li>
        <li class="product-option accessories-option"><input type="checkbox" id="" name="type[13]" value="nose_ring" class="option" 
        <?php
        if (isset($_GET['type'][13])) {
            echo "checked";
        }
        ?>>Nose Rings</li>
        <li class="product-option accessories-option"><input type="checkbox" id="" name="type[14]" value="patch" class="option" 
        <?php
        if (isset($_GET['type'][14])) {
            echo "checked";
        }
        ?>>Patches</li>
    </ul>
    <hr>
    <div class="product-type-title collectibles-title">Collectibles</div>
    <ul class="product-type collectibles">
        <li class="product-option collectibles-option"><input type="checkbox" id="" name="type[15]" value="vinyl" class="option" 
        <?php
        if (isset($_GET['type'][15])) {
            echo "checked";
        }
        ?>>Vinyl</li>
        <li class="product-option collectibles-option"><input type="checkbox" id="" name="type[16]" value="cd_dvd" class="option" 
        <?php
        if (isset($_GET['type'][16])) {
            echo "checked";
        }
        ?>>CD/DVD</li>
        <li class="product-option collectibles-option"><input type="checkbox" id="" name="type[17]" value="figure" class="option" 
        <?php
        if (isset($_GET['type'][17])) {
            echo "checked";
        }
        ?>>Figures</li>
        <li class="product-option collectibles-option"><input type="checkbox" id="" name="type[18]" value="guitar_pick" class="option" 
        <?php
        if (isset($_GET['type'][18])) {
            echo "checked";
        }
        ?>>Guitar Picks</li>
        <li class="product-option collectibles-option"><input type="checkbox" id="" name="type[19]" value="collectibles_other" class="option" 
        <?php
        if (isset($_GET['type'][19])) {
            echo "checked";
        }
        ?>>Others</li>
    </ul>
    <hr>
    <div class="product-type-title decors-title">Decors</div>
    <ul class="product-type decors">
        <li class="product-option decors-option"><input type="checkbox" id="" name="type[20]" value="banner" class="option" 
        <?php
        if (isset($_GET['type'][20])) {
            echo "checked";
        }
        ?>>Banners</li>
        <li class="product-option decors-option"><input type="checkbox" id="" name="type[21]" value="picture_frame" class="option" 
        <?php
        if (isset($_GET['type'][21])) {
            echo "checked";
        }
        ?>>Picture Frames</li>
        <li class="product-option decors-option"><input type="checkbox" id="" name="type[22]" value="decors_other" class="option" 
        <?php
        if (isset($_GET['type'][22])) {
            echo "checked";
        }
        ?>>Others</li>
    </ul>
    <hr>
    <input type="hidden" name="id" value="<?php if (isset($_GET['id'])) {echo htmlspecialchars($_GET['id']);} ?>">
    <div class="filter-button-container">
        <button class="filter-button" type="submit" name="filter">Filter</button>
    </div>
</form>