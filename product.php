<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./asset/scss/style.css"/>
    <script src="https://kit.fontawesome.com/a11103ae03.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script> 
        $(function(){
            $("#header").load("./asset/header&footer/header.html"); 
            $("#footer").load("./asset/header&footer/footer.html"); 
        });
    </script>
    <title>Product</title>
</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <div id="header"></div>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content-product">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <div class="breadcrumb-container">
                    <div class="breadcrumb-item"><a href="./home.html">Home</a></div>
                    <div class="breadcrumb-item"><a href="./store.html">Store</a></div>
                    <div class="breadcrumb-item">Product</div>
                    <div class="breadcrumb-item triangle"></div>
                </div>
            </div>
            <!-- End Breadcrumb -->

            <!-- Main Content Container -->
            <div class="main-content-container">
                <div class="product-grid">
                    <div class="product-image" id="product-image">
                        <div id="lens"></div>
                        <img src="./images/latest/latest1.png" alt="" id="featured">
                    </div>
                    <div id="slide-wrapper" class="slide-wrapper">
                        <div class="arrow" id="slide-left"><i class="fa-solid fa-angle-left"></i></div>
                        <div id="slider" class="slider">
                            <img class="thumbnail active" src="./images/latest/latest1.png">
                            <img class="thumbnail" src="./images/latest/latest2.png">
                            <img class="thumbnail" src="./images/latest/latest3.png">
                        </div>
                        <div class="arrow" id="slide-right"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                    <div class="product-info">
                        <h1>Bring Me The Horizon</h1>
                        <h2>Sempiternal T-Shirt</h2>
                        <hr>
                        <h3>280.000 VND</h3>
                        <p class="product-id">Product ID: <span class="prod-id">#1651</span></p>
                        <p class="size">Size <span class="open-size-chart" onclick="showChart()"><i class="fa-solid fa-ruler-horizontal"></i> Size chart</span></p>
                        <div class="size-chart" id="size-chart">
                            <i class="fa-solid fa-xmark" onclick="closeChart()"></i>
                            <div class="inner">
                                <p class="chart-header">Size Chart</p>
                                <hr>
                                <table>
                                    <caption>T-shirts/Sweatshirts</caption>
                                    <tbody>
                                        <tr>
                                            <td>Size</td>
                                            <td>Width</td>
                                            <td>Length</td>
                                        </tr>
                                        <tr>
                                            <td>Small</td>
                                            <td>34-36(in)/87-92(cm)</td>
                                            <td>27(in)/69(cm)</td>
                                        </tr>
                                        <tr>
                                            <td>Medium</td>
                                            <td>38-40(in)/97-102(cm)</td>
                                            <td>28.5(in)/73(cm)</td>
                                        </tr>
                                        <tr>
                                            <td>Large</td>
                                            <td>42-44(in)/107-112(cm)</td>
                                            <td>29.5(in)/75(cm)</td>
                                        </tr>
                                        <tr>
                                            <td>X-Large</td>
                                            <td>46-48(in)/117-122(cm)</td>
                                            <td>31(in)/79(cm)</td>
                                        </tr>
                                        <tr>
                                            <td>XX-Large</td>
                                            <td>50-52(in)/127-132(cm)</td>
                                            <td>32(in)/82(cm)</td>
                                        </tr>
                                        <tr>
                                            <td>XXX-Large</td>
                                            <td>54-56(in)/137-142(cm)</td>
                                            <td>33.5(in)/86(cm)</td>
                                        </tr>
                                        <tr>
                                            <td>XXXX-Large</td>
                                            <td>58-60(in)/148-152(cm)</td>
                                            <td>34.5(in)/88(cm)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <caption>Caps</caption>
                                    <tbody>
                                        <tr>
                                            <td>Item Size</td>
                                            <td>Cap Size</td>
                                        </tr>
                                        <tr>
                                            <td>Small/Medium</td>
                                            <td>6.75-7.25(in)/18-19(cm)</td>
                                        </tr>
                                        <tr>
                                            <td>Large/X-large</td>
                                            <td>7.125-7.625(in)/19-20(cm)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <caption>Girls/Junior Tees</caption>
                                    <tbody>
                                        <tr>
                                            <td>Our Size</td>
                                            <td>Junior Size</td>
                                        </tr>
                                        <tr>
                                            <td>Small</td>
                                            <td>3/4</td>
                                        </tr>
                                        <tr>
                                            <td>Medium</td>
                                            <td>5/6</td>
                                        </tr>
                                        <tr>
                                            <td>Large</td>
                                            <td>7/8</td>
                                        </tr>
                                        <tr>
                                            <td>X-Large</td>
                                            <td>9/10</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <caption>Youth Sizes</caption>
                                    <tbody>
                                        <tr>
                                            <td>Our Size</td>
                                            <td>Youth's Size</td>
                                        </tr>
                                        <tr>
                                            <td>Small</td>
                                            <td>6-8</td>
                                        </tr>
                                        <tr>
                                            <td>Medium</td>
                                            <td>10-12</td>
                                        </tr>
                                        <tr>
                                            <td>Large</td>
                                            <td>14-16</td>
                                        </tr>
                                        <tr>
                                            <td>X-Large</td>
                                            <td>18-20</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <caption>Baby Dolls/Fitted & Raglan Tees/Tanks</caption>
                                    <tbody>
                                        <tr>
                                            <td>Size</td>
                                            <td>Bust</td>
                                            <td>Waist</td>
                                            <td>Length</td>
                                            <td>Dress Size</td>
                                        </tr>
                                        <tr>
                                            <td>Small</td>
                                            <td>28(in)</td>
                                            <td>26(in)</td>
                                            <td>22.125(in)</td>
                                            <td>0-2</td>
                                        </tr>
                                        <tr>
                                            <td>Medium</td>
                                            <td>30(in)</td>
                                            <td>28(in)</td>
                                            <td>22.75(in)</td>
                                            <td>4-6</td>
                                        </tr>
                                        <tr>
                                            <td>Large</td>
                                            <td>33(in)</td>
                                            <td>31(in)</td>
                                            <td>23.375(in)</td>
                                            <td>8-10</td>
                                        </tr>
                                        <tr>
                                            <td>X-Large</td>
                                            <td>35(in)</td>
                                            <td>33(in)</td>
                                            <td>24(in)</td>
                                            <td>12</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table>
                                    <caption>Shoe Size Conversion Chart (Mens 3.5-7.5)</caption>
                                    <tbody>
                                        <tr>
                                            <td>USA Men</td>
                                            <td>3.5</td>
                                            <td>4</td>
                                            <td>4.5</td>
                                            <td>5</td>
                                            <td>5.5</td>
                                            <td>6</td>
                                            <td>6.5</td>
                                            <td>7</td>
                                            <td>7.5</td>
                                        </tr>
                                        <tr>
                                            <td>USA Women</td>
                                            <td>5</td>
                                            <td>5.5</td>
                                            <td>6</td>
                                            <td>6.5</td>
                                            <td>7</td>
                                            <td>7.5</td>
                                            <td>8</td>
                                            <td>8.5</td>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <td>Europe</td>
                                            <td>-</td>
                                            <td>36</td>
                                            <td>-</td>
                                            <td>37</td>
                                            <td>38</td>
                                            <td>-</td>
                                            <td>39</td>
                                            <td>40</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>UK</td>
                                            <td>2.5</td>
                                            <td>3</td>
                                            <td>3.5</td>
                                            <td>4</td>
                                            <td>4.5</td>
                                            <td>5</td>
                                            <td>5.5</td>
                                            <td>6</td>
                                            <td>6.5</td>
                                        </tr>
                                        <tr>
                                            <td>Japan</td>
                                            <td>-</td>
                                            <td>220</td>
                                            <td>-</td>
                                            <td>230</td>
                                            <td>235</td>
                                            <td>-</td>
                                            <td>245</td>
                                            <td>250</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam</td>
                                            <td>-</td>
                                            <td>37</td>
                                            <td>-</td>
                                            <td>38</td>
                                            <td>39</td>
                                            <td>-</td>
                                            <td>40</td>
                                            <td>41</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <caption>Shoe Size Conversion Chart (Mens 8-12)</caption>
                                    <tbody>
                                        <tr>
                                            <td>USA Men</td>
                                            <td>8</td>
                                            <td>8.5</td>
                                            <td>9</td>
                                            <td>9.5</td>
                                            <td>10</td>
                                            <td>10.5</td>
                                            <td>11</td>
                                            <td>11.5</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>USA Men</td>
                                            <td>9.5</td>
                                            <td>10</td>
                                            <td>10.5</td>
                                            <td>11</td>
                                            <td>11.5</td>
                                            <td>12</td>
                                            <td>12.5</td>
                                            <td>13</td>
                                            <td>13.5</td>
                                        </tr>
                                        <tr>
                                            <td>Europe</td>
                                            <td>41</td>
                                            <td>42</td>
                                            <td>-</td>
                                            <td>43</td>
                                            <td>44</td>
                                            <td>-</td>
                                            <td>45</td>
                                            <td>46</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>UK</td>
                                            <td>7</td>
                                            <td>7.5</td>
                                            <td>8</td>
                                            <td>8.5</td>
                                            <td>9</td>
                                            <td>9.5</td>
                                            <td>10</td>
                                            <td>10.5</td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>Japan</td>
                                            <td>260</td>
                                            <td>265</td>
                                            <td>-</td>
                                            <td>275</td>
                                            <td>280</td>
                                            <td>-</td>
                                            <td>290</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Vietnam</td>
                                            <td>42</td>
                                            <td>43</td>
                                            <td>-</td>
                                            <td>44</td>
                                            <td>45</td>
                                            <td>-</td>
                                            <td>46</td>
                                            <td>47</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="size-options">
                            <div class="container" >
                                <input type="radio" name="size" value="MD" id="sizeM">
                                <label for="sizeM" class="size-btn"> M </label>
                            </div>
                            <div class="container">
                                <input type="radio" name="size" value="LG" id="sizeL">
                                <label for="sizeL" class="size-btn"> L </label>
                            </div>
                            <div class="container">
                                <input type="radio" name="size" value="XL" id="sizeXL">
                                <label for="sizeXL" class="size-btn"> XL </label>
                            </div>
                        </div>
                        <div class="quantity">
                            <input value=1 type="number">
                            <br>
                            <div class="buttons">
                                <button class="add-to-cart" type="submit">Add to Cart</button>
                                <button class="add-to-wishlist" type="submit"><i class="fa-solid fa-plus"></i> Add to Wishlist</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="section-divider">
                <div class="banner">
                    <img src="./images/band-banner/Bring-Me-The-Horizon.png" alt="">
                    <div class="band-info">
                        <h1 class="name">Bring Me The Horizon</h1>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit sapiente illo repellendus assumenda consectetur dignissimos eligendi iste mollitia tempore enim. Quisquam excepturi nam, ratione quibusdam obcaecati cupiditate in rerum facilis.</p>
                        <div class="page-btn"><a href="#"><span>Bring Me The Horizon</span> Store <i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                </div>
                <h1 class="review-title">Reviews</h1>
                <div class="review">
                    <div class="review-container">
                        <div class="review-item">
                            <div class="reviewer">
                                <img src="./logo/facebook_profile_image.png" alt="">
                                <div class="name">Massacre3000</div>
                                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="review-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quod expedita nisi labore quidem error esse, sit magnam maiores beatae veritatis eaque at repellat voluptas laborum culpa magni debitis mollitia!
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="reviewer">
                                <img src="./logo/facebook_profile_image.png" alt="">
                                <div class="name">Massacre3000</div>
                                <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                            </div>
                            <div class="review-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quod expedita nisi labore quidem error esse, sit magnam maiores beatae veritatis eaque at repellat voluptas laborum culpa magni debitis mollitia!
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
    <script src="./asset/js/product/sizeChart.js"></script>
    <script src="./asset/js/product/slider.js"></script>
    <script src="./asset/js/product/lens.js"></script>
</body>
</html>