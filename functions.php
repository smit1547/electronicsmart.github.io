<?php
function template_header() {
echo <<<EOT
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Electronics Mart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/1.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none
            d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light
                            text-decoration-none" href="mailto:smitsavaliya47@gmail.com">smitsavaliya47@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light
                            text-decoration-none" href="tel:+919898038073">98980
                            38073</a>
                </div>
                <div>
                    <a class="text-light" href="https://www.facebook.com/profile.php?id=100076628673034" target="_blank" rel="sponsored"><i class="fab
                                fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/_smit_savaliya_" target="_blank"><i class="fab fa-instagram fa-sm
                                fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw
                                me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm
                                fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>


    <nav class="navbar navbar-expand-lg navbar-light shadow">

        <div class="container d-flex justify-content-between
                align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="home.php">
                <span style="font-size:30px">    Electronics Mart</span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="align-self-center collapse navbar-collapse flex-fill
                    d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between
                            mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7
                            col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search
                                    ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative
                            text-decoration-none" href="myorder.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark
                                mr-1">
                                </i> 
                    </a>
                   <a href="account.php" > <i class="fa fa-fw fa-user text-dark mr-3"></i> </a>
                </div>
            </div>

        </div>
    </nav>

    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body
                    border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search
                            ...">
                    <button type="submit" class="input-group-text bg-success
                            text-light">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                </div>
            </form>
        </div>
    </div>


EOT;
}
function template_footer() {
echo <<<EOT

<footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3
                            border-light logo">Electronics Mart</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i> Surat,gujarat 395004
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:+919898038073">98980 38073</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:smitsavaliya47@gmail.com">smitsavaliya47@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3
                            border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">fan</a></li>
                        <li><a class="text-decoration-none" href="#"> LED
                                    and Lights</a></li>
                        <li><a class="text-decoration-none" href="#">Water
                                    purifier</a></li>
                        <li><a class="text-decoration-none" href="#">Mixer
                                    and Blender</a></li>
                        <li><a class="text-decoration-none" href="#">Cables
                                    and Wires</a></li>
                        <li><a class="text-decoration-none" href="#">Switch
                                    and Switch-Board</a></li>
                        <li><a class="text-decoration-none" href="#">Iron</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3
                            border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="home.php">Home</a></li>
                        <li><a class="text-decoration-none" href="about.php">About
                                    Us</a></li>
                        <li><a class="text-decoration-none" href="shop.php">shop</a></li>
                        <li><a class="text-decoration-none" href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <center>
                        <a class="text-light" href="https://www.facebook.com/profile.php?id=100076628673034" target="_blank" rel="sponsored"><i class="fab
                                        fa-facebook-f fa-sm fa-fw me-2"></i></a>
                        <a class="text-light" href="https://www.instagram.com/_smit_savaliya_" target="_blank"><i class="fab fa-instagram fa-sm
                                        fa-fw me-2"></i></a>
                        <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw
                                        me-2"></i></a>
                        <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm
                                        fa-fw"></i></a></center>
                </div>
            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>


            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <center>
                            <p class="text-left text-light">
                                Copyright &copy; 2022 Electronics Mart | Designed by Smit_Savaliya
                            </p>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
EOT;
}
