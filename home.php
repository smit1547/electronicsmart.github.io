<?php
session_start();
include "db_conn.php";
include "functions.php";
if (isset($_SESSION["username"])) {

?>
    <?=template_header()?>
        <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6
                                order-lg-last">
                                <img class="img-fluid" src="./assets/img/model01.png" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex
                                align-items-center">
                                <div class="text-align-left align-self-center">
                                    <h3 class="h2">Fancy Lamps</h3>
                                    <p>
                                        Homesake Home Decor Hanging Light, Pendant Ceiling Lights for Home Decoration, Home Decor Items for Living Room, Wall Lights, Antique Home Decor, Jhumar Lighting for Home, (Golden).

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6
                                order-lg-last">
                                <img class="img-fluid" src="./assets/img/model02.png" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex
                                align-items-center">
                                <div class="text-align-left">
                                    <h3 class="h2">Ceiling Fan with high speed</h3>
                                    <p>
                                        Crompton Hill Briz 1200 mm (48 inch) High Speed Ceiling Fan (Brown) </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6
                                order-lg-last">
                                <img class="img-fluid" src="./assets/img/model03.png" style="height:400px" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex
                                align-items-center">
                                <div class="text-align-left">
                                    <h3 class="h2">Water purifier </h3>
                                    <p>Aquadpure Active Copper 12-L RO+UV Water Filter Purifier for Home | Purified Water with Goodness of Copper
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

        <section class="container py-5">
            <div class="row text-center pt-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Categories</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="./assets/img/fan.jpg" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Fans</h5>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="https://m.media-amazon.com/images/W/WEBP_402378-T1/images/I/81-6gC6NBtL._SX522_.jpg" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Lights and lamps</h2>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="https://5.imimg.com/data5/MM/TA/MY-2944315/uv-water-purifier-500x500.jpg" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Water purifier</h2>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="https://freepngimg.com/save/51154-mixer-grinder-download-hd-png/1200x1140" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Mixer</h2>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="https://media.croma.com/image/upload/v1605184445/Croma%20Assets/Small%20Appliances/Food%20Processors/Images/8984922849310.png" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Blender</h2>
                </div>
                <div class="col-12 col-md-4 p-5 mt-3">
                    <a href="#"><img src="https://www.pngall.com/wp-content/uploads/12/Electrical-Switch-Equipment.png" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Tools & Accessories</h2>
                </div>
            </div>
        </section>


        <section class="bg-light">
            <div class="container py-5">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Featured Product</h1>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="shop-single.html">
                                <img src="./assets/img/fan.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex
                                    justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                    <li class="text-muted text-right">₹5,999
                                    </li>
                                </ul>
                                <a href="shop-single.php?id=1" class="h2
                                    text-decoration-none text-dark">Decorative
                                    Ceiling Fan</a>
                                <p class="card-text">
                                    Hans Lightings Decorative Ceiling Fan with Lights 1200 mm(48 inch) Brown </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="shop-single.html">
                                <img src="https://m.media-amazon.com/images/W/WEBP_402378-T1/images/I/71VjolBajUL._SX522_.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex
                                    justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                    <li class="text-muted text-right">₹1,699</li>
                                </ul>
                                <a href="shop-single.php?id=6" class="h2
                                    text-decoration-none text-dark">Wire</a>
                                <p class="card-text">
                                    Polycab Eco-Friendly red Wire - Colour:RED 90m 1sqmm </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="shop-single.html">
                                <img src="https://m.media-amazon.com/images/W/WEBP_402378-T1/images/I/618AGnIz9rL._SX522_.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex
                                    justify-content-between">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                    </li>
                                    <li class="text-muted text-right">₹575</li>
                                </ul>
                                <a href="shop-single.php?id=2" class="h2
                                    text-decoration-none text-dark">LED lights</a>
                                <p class="card-text">
                                    Murphy 20W LED Cool White Tube Light, Pack of 1 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?=template_footer()?>
            <?php }
?>