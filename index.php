<?php
session_start();
$title = 'Say Story';
$harga = 12000;
$produk = array(
    1 => array(
        'namaproduk' => 'Signature Redvelvet Choco',
        'gambar' => 'redvelvet.jpg',
        'harga' => 12000
    ),
    2 => array(
        'namaproduk' => 'Signature Smoothies',
        'gambar' => 'smoothies.jpg',
        'harga' => 12000
    ),
    3 => array(
        'namaproduk' => 'Signature Choco Ding',
        'gambar' => 'chocoding.jpg',
        'harga' => 12000
    ),
    4 => array(
        'namaproduk' => 'Signature Coffee',
        'gambar' => 'signaturecoffee.jpg',
        'harga' => 12000
    ),
    5 => array(
        'namaproduk' => 'Signature Choco Taro',
        'gambar' => 'chocotaro.jpg',
        'harga' => 12000
    ),
    6 => array(
        'namaproduk' => 'Signature Coffee Mocca',
        'gambar' => 'coffeemocca.jpg',
        'harga' => 12000
    ),
    7 => array(
        'namaproduk' => 'Signature Greentea Choco',
        'gambar' => 'greenteachoco.jpg',
        'harga' => 12000
    ),
    8 => array(
        'namaproduk' => 'Signature Choco Brown Sugar',
        'gambar' => 'chocobrownsugar.jpg',
        'harga' => 14000
    ),
    9 => array(
        'namaproduk' => 'Signature Special Greentea',
        'gambar' => 'specialgreentea.jpg',
        'harga' => 12000
    ),
    10 => array(
        'namaproduk' => 'Signature Squash Strawberry Orange',
        'gambar' => 'squashstrawberry.jpg',
        'harga' => 12000
    ),
    11 => array(
        'namaproduk' => 'Signature Special Redvelvet',
        'gambar' => 'specialredvelvet.jpg',
        'harga' => 12000
    ),
    12 => array(
        'namaproduk' => 'Signature Special Taro',
        'gambar' => 'specialtaro.jpg',
        'harga' => 12000
    ),
    13 => array(
        'namaproduk' => 'Signature Choco Nuttela',
        'gambar' => 'choconuttela.jpg',
        'harga' => 14000
    ),
    14 => array(
        'namaproduk' => 'Signature Greentea Redvelvet',
        'gambar' => 'greentearedvelvet.jpg',
        'harga' => 14000
    ),
    15 => array(
        'namaproduk' => 'Signature Creamy Mango',
        'gambar' => 'creamymango.jpg',
        'harga' => 14000
    ),
    16 => array(
        'namaproduk' => 'Signature Redvelvet Taro',
        'gambar' => 'redvelvettaro.jpg',
        'harga' => 14000
    )
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Say Story's Shop</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logoutama.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="css/slider.css" media="screen,projection" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style2.css" rel="stylesheet" />
    <link href="cobahover.css" rel="stylesheet" />
    <link href="css/parallax.css" rel="stylesheet" />

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <h2 style="margin-left: -22px;">Say Story's Shop</h2>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto" style="font-weight: 550;">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services" style="font-size: 18px; margin-top:7px">Best Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio" style="font-size: 18px; margin-top:7px">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about" style="font-size: 18px; margin-top:7px">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team" style="font-size: 18px; margin-top:7px">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact" style="font-size: 18px; margin-top:7px">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/home/login.php" class="demo-4">
                            <span style="margin-top: 10px;">
                                <span>Login</span>
                                <span>Sure?</span>
                                <span></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="height: 773px;">
        <div class="container">
            <div class="masthead-subheading">
                Welcome To <br />
                Our Shop!
            </div>
            <div class="masthead-heading text-uppercase">
                It's Nice To <br />
                Meet You
            </div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger tombol" href="#slider">Tell Me More</a>
        </div>
    </header>
    <!-- Slider -->
    <div class="slider" id="slider" style="margin-top: 40px; margin-bottom:70px">
        <ul class="slides">
            <li>
                <img src="img/slider/gambar1.jpg" />
                <!-- random image -->
                <div class="caption left-align">
                    <h3>Minuman Khas Say Story</h3>
                    <h5 class="light grey-text text-lighten-3">
                        Berdiri sejak 2018
                    </h5>
                </div>
            </li>
            <li>
                <img src="img/slider/gambar2.jpg" />
                <!-- random image -->
                <div class="caption right-align text-right">
                    <h3>Dan sekarang...</h3>
                    <h5 class="light grey-text text-lighten-3">

                    </h5>
                </div>
            </li>
            <li>
                <img src="img/slider/gambar3.jpg" />
                <!-- random image -->
                <div class="caption center-align text-center">
                    <h3>Minuman Khas Say Story</h3>
                    <h5 class="light grey-text text-lighten-3">
                        Menjadi salah satu minuman populer di kota Solo
                    </h5>
                </div>
            </li>
            <li>
                <img src="img/slider/gambar4.jpg" />
                <!-- random image -->
                <div class="caption left-align">
                    <h3>Minuman Khas Say Story</h3>
                    <h5 class="light grey-text text-lighten-3">
                        Harga sangat terjangkau mulai dari Rp 12.000
                    </h5>
                </div>
            </li>
            <li>
                <img src="img/slider/gambar5.jpg" />
                <!-- random image -->
                <div class="caption right-align text-right">
                    <h3>Dan juga sudah mempunyai 300 gerai di Indonesia</h3>
                    <h5 class="light grey-text text-lighten-3">

                    </h5>
                </div>
            </li>
        </ul>
    </div>

    <!-- Best Seller -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Best Seller</h2>
                <h3 class="section-subheading text-muted">
                    Berikut beberapa minuman khas terlaris saat ini.
                </h3>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-4x">
                        <i class="fa-stack-2x text-primary"></i>
                        <img src="assets/img/bestseller/redvelvet.jpg" alt="" />
                    </span>
                    <p class="text-muted">
                        Perpaduan Red Velvet Full Cream Milk Melted Chocolate
                        dengan <br> Milk membuat minuman ini semakin nikmat.
                    </p>
                </div>
                <div class="col-md-6">
                    <span class="fa-4x">
                        <i class="fa-stack-2x text-primary"></i>
                        <img src="assets/img/bestseller/squashstrawberry.jpg" alt="" />
                    </span>
                    <p class="text-muted">
                        Perpaduan Strawberry Orange Squash dan Soda yang
                        sebenarnya nikmat membuat minuman ini semakin nikmat.
                    </p>
                </div>
                <div class="col-md-12">
                    <span class="fa-4x">
                        <i class="fa-stack-2x text-primary"></i>
                        <img src="assets/img/bestseller/signature.jpg" alt="" />
                    </span>
                    <p class="text-muted">
                        Perpaduan rasa leci dan strawberry dengan susu ditambah topping pudding <br>yang lembut dan nikmat membuat minuman ini semakin nikmat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid-->
    <section class="page-section1 bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase white-text">
                    Menu
                </h2>
                <h3 class="section-subheading white-text">
                    Berikut adalah beberapa minuman khas yang tersedia saat ini.
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/01-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/02-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/03-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/04-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/05-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/06-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/07-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/08-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 14.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/09-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/10-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/11-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/12-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 12.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal13">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/13-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 14.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal14">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/14-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 14.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal15">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/15-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 14.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal16">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/products/16-thumbnail.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                Harga :
                            </div>
                            <div class="portfolio-caption-subheading text-muted">
                                RP 14.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <div class="portfolio-caption">
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <div class="portfolio-caption-heading1 text-center">
                                Coming
                            </div>
                            <div class="portfolio-caption-heading1 text-center">
                                Soon..
                            </div>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <div class="portfolio-caption">
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <div class="portfolio-caption-heading1 text-center">
                                Coming
                            </div>
                            <div class="portfolio-caption-heading1 text-center">
                                Soon..
                            </div>
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimoni -->
    <section class="page-section" style="padding:0">
        <div class="text-center">
            <h2 class="section-heading text-uppercase" style="margin-top: 75px;">Testimoni</h2>
            <h3 class="section-subheading text-muted">
                Berikut adalah beberapa testimoni dari pelanggan kami.
            </h3>
            <div class="jumbotron jumbotron-fluid" style="width: 100%; margin-top:-65px">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-fluid" src="assets/img/products/08-thumbnail.jpg" alt="" />
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136; margin-top:20px"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <h1 class="display-4" style="font-size: 36px;">Salsabilla</h1>
                            <p class="lead">Choco Brown Sugar paling favorit pokoknya.. rasanya enak banget, harganya murah <br> dan juga terjangkau. <br> Thanks Say Story :) </p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid" src="assets/img/products/01-thumbnail.jpg" alt="" />
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136; margin-top:20px"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <h1 class="display-4" style="font-size: 36px;">Nesya Regina</h1>
                            <p class="lead">Suka banget sama Redvelvet <br> Choco, rasa red velvetnya <br> enak poll ditambah coklat <br> lumernya yang lembut bikin <br> pengen beli lagi, hehehe. </p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid" src="assets/img/products/10-thumbnail.jpg" alt="" />
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136; margin-top:20px"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                            <h1 class="display-4" style="font-size: 36px;">Larasatty</h1>
                            <p class="lead">Squash rasa strawberry dan <br> jeruknya seger banget, <br> ada campuran soda nya dan <br> juga susu didalemnya, mantep <br> deh pokoknya. </p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-sm-4" style="display: block; margin:auto; margin-top:30px"">
                                <img
                                class=" img-fluid" src="assets/img/products/15-thumbnail.jpg" alt="" />
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136; margin-top:20px"></i>
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                        <h1 class="display-4" style="font-size: 36px;">Chintya Aurel</h1>
                        <p class="lead">Kemarin nyoba beli Signature Creamy Mango ternyata rasa mangganya enak banget dan juga lembut di mulut. Cocok banget diminum <br> pas lagi santai.<br></p>
                    </div>
                    <div class="col-sm-4" style="display: block; margin:auto; margin-top:33px">
                        <img class="img-fluid" src="assets/img/products/02-thumbnail.jpg" alt="" />
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136; margin-top:20px"></i>
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                        <i class="fas fa-star" aria-hidden="true" style="color:#fed136"></i>
                        <h1 class="display-4" style="font-size: 36px;">Nissa Uswatun</h1>
                        <p class="lead">Signature Smoothies rasa leci dan strawberry nya lembut banget kayak aku, wkwkw. Ada pudding <br> juga didalemnya, <br> besuk beli lagi ah..</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">
                    Berikut adalah beberapa perjalanan Say Story dari tahun ke tahun.
                </h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/logo1.jpg" alt="" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2018-2019</h4>
                            <h4 class="subheading">Profile</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Say Story merupakan produk inovasi minuman
                                khas Indonesia yang berdiri pada
                                tahun 2018 di kota Solo.
                                Say Story berkomitmen untuk membuat
                                produk minuman khas di seluruh Indonesia.
                                Untuk harga per cup minuman Say Story
                                bisa dibilang sangat terjangkau, harga yang
                                ditawarkan mulai dari Rp 12.000.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/logo1.jpg" alt="" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2019-2020</h4>
                            <h4 class="subheading">Story</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Say Story berhasil menghadirkan produk
                                dengan bahan baku yang menarik dan tentunya
                                dengan rasa yang begitu nikmat.
                                Begitu pula dengan produk minuman khas
                                Say Story sendiri yang segmen pasarnya masih
                                sangat luas. Saat ini Say Story sendiri
                                memiliki sekitar 300 gerai di Indonesia dan bukan
                                tidak mungkin keberadaan minuman Say Story
                                yang hits ini akan terus berkembang.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="assets/img/about/logo1.jpg" alt="" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2020</h4>
                            <h4 class="subheading">
                                The journey of Say Story
                            </h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Selain harganya yang murah atau terjangkau,
                                Say Story juga menawarkan banyak varian menu
                                mulai dari Chocolate, Redvelvet, Greentea, Coffee,
                                hingga Squash. Bahkan Say Story juga memiliki
                                menu kombinasi seperti choco taro,
                                redvelvet choco, dan masih banyak lagi.
                                Say Story hingga saat ini memiliki
                                lebih dari 300 gerai di berbagai wilayah Indonesia.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team" style="background-image:url('assets/img/bg1.jpg');">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase" style="color:white;">
                    Our Amazing Team
                </h2>
                <h3 class="section-subheading" style="color:white;">
                    Ini adalah beberapa tim luar biasa kami.
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" style="border-color:lightgray;" />
                        <h4 style="color:white;">Kay Garland</h4>
                        <p style="color:white;">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/keghare" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://web.facebook.com/kay.garland.5" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/kaygarlandcreech/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" style="border-color:lightgray;" />
                        <h4 style="color:white;">Larry Parker</h4>
                        <p style="color:white;">Owner</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/gatorlbp" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://web.facebook.com/Larry-parker-116321666682276/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/larryparker_/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" style="border-color:lightgray;" />
                        <h4 style="color:white;">Diana Petersen</h4>
                        <p style="color:white;">Lead Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/BringelDiana" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://web.facebook.com/diana.petersen2" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/diana.petersen.739/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large" style="color:white;">
                        Kami berusaha mengembangkan Say Story Signature Drink agar lebih baik lagi
                        dan dapat dikenal oleh banyak orang di Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    <div class="parallax-container">
        <div class="parallax"><img src="assets/img/logos/bg1.jpg"></div>
        <div class="container clients">
            <h3 class="center">OUR CLIENTS</h3>
            <div class="row">
                <div class="col m3 center">
                    <img src="assets/img/logos/lazada.png" style="width:200px; margin-top:20px;">
                </div>
                <div class="col m3 center">
                    <img src="assets/img/logos/tokopedia.png" style="width: 220px;margin-left:65px;margin-top:7px;">
                </div>
                <div class="col m3 center">
                    <img src="assets/img/logos/grab.png" style="width: 150px;margin-left:75px;margin-top:7px;">
                </div>
                <div class="col m3 center">
                    <img src="assets/img/logos/shopee.png" style="width:300px; margin-top:-25px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Nama *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="No. HP *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Pesan *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase tombol" id="sendMessageButton" type="submit">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4" style="height:70px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left tebal" style="font-size:19px;font-weight:650;margin-top:-35px;">
                    Copyright © Say Story's Shop 2020
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/channel/UCOGimk62yPM_uMc6jozQl_g" target="_blank" style="width:3.5rem;height:3.5rem;margin-top:-35px;"><i class="fab fa-youtube" style="width:25px;height:25px;"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/saystory.id/?hl=id" target="_blank" style="width:3.5rem;height:3.5rem;margin-top:-35px;"><i class="fab fa-instagram" style="width:25px;height:25px;"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://web.facebook.com/Say-Story-1954984084627852/" target="_blank" style="width:3.5rem;height:3.5rem;margin-top:-35px;"><i class="fab fa-facebook-f" style="width:25px;height:25px;"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right tebal" style="font-size:20px;font-weight:600;margin-top:-35px;">
                    <a class="mr-3" href="http://localhost/home/index2.html" style="text-decoration:none;">Privacy Policy</a>
                    <a href="http://localhost/home/index3.html" style="text-decoration:none;">Our Location</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Modal 01-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/01-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi Red Velvet + Full
                                    Susu Krim + Coklat Leleh dengan Susu
                                    membuat minuman ini semakin nikmat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index1.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 02-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/02-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi leci dan stroberi
                                    rasa susu plus lembut dan
                                    puding lezat membuat topping ini
                                    menjadi lebih nikmat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index2.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 03-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/03-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi khas Say Story
                                    cokelat leleh dan susu dengan lembut
                                    dan topping puding yang enak membuat minuman ini
                                    menjadi lebih nikmat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index3.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 04-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/04-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi Black Coffee +
                                    Susu Fullcream membuat minuman ini menjadi
                                    lebih lezat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index4.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 05-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/05-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi Taro + Melted
                                    Cokelat dengan Susu membuat minuman ini
                                    bahkan lebih enak.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index5.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 06-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/06-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi Kopi Mocca dan Full
                                    Cream Milk mantap bikin minuman ini
                                    bahkan lebih enak.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index6.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 07-->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/07-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi Greentea +
                                    Cokelat Meleleh Khas Say Story dengan
                                    Susu Fullcream membuat minuman ini menjadi
                                    lebih lezat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index7.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 08-->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/08-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi dari Saystory's Typical
                                    Cokelat Leleh + Gula Aren + Penuh
                                    Susu Krim dengan Cokelat Lezat
                                    dan Pudding Topping membuat minuman ini menjadi
                                    lebih lezat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 14.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index8.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 09-->
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/09-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi teh hijau Say Story
                                    dengan susu full cream bisa membuat hati
                                    menjadi lebih tenang dan santai.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index9.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 10-->
    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/10-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi Strawberry + Orange
                                    Squash dan Soda yang
                                    Lezat membuat minuman ini semakin
                                    lezat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index10.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 11-->
    <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/11-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Kombinasi dari Say Story's Typical Red Velvet dengan Full Cream Milk membuat minuman ini semakin nikmat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index11.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 12-->
    <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/12-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Perpaduan Taro Khas Say Story dengan Susu Full Cream Bikin Harimu Lebih Semarak.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 12.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index12.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 13-->
    <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/13-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Perpaduan dari Say Story's Typical Melted Chocolate + Original Nutella dan Full Cream Milk membuat minuman ini semakin nikmat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 14.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index13.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 14-->
    <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/14-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Perpaduan Typical Green Tea + Red Velvet Say Story dengan Full Cream Milk membuat minuman ini semakin nikmat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 14.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index14.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 15-->
    <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/15-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Perpaduan konsentrat mangga plus topping puding mangga dan susu full cream bikin creamy banget.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 14.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index15.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 16-->
    <div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">
                                    Say Story
                                </h2>
                                <p class="item-intro text-muted">
                                    Minuman dengan rasa yang bervariasi, sehat dan bergizi.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/products/16-thumbnail.jpg" alt="" />
                                <h5 style="font-size: 24px;">Deskripsi :</h5>
                                <br />
                                <p style="font-size: 18px;">
                                    Perpaduan Red Velvet dan Taro Khas Say Story dengan Susu Full Cream yang nikmat.
                                </p>
                                <h3 class="text-uppercase">
                                    Harga : RP 14.000
                                </h3>
                                <br />
                                <a href="http://localhost/home/index16.php" class="btn-lama" type="button" style="width: 200px; height:60px; font-size:20px">
                                    <i class="fas fa-shopping-cart mr-1" aria-hidden="true"></i>Beli Sekarang
                                </a>
                                <br />
                                <br />
                                <button class="btn btn-primary" data-dismiss="modal" type="button" style="width:200px; height:60px">
                                    <i class="fas fa-times mr-1"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const slider = document.querySelectorAll(".slider");
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000,
        });

        const parallax = document.querySelectorAll(".parallax");
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll(".materialboxed");
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll(".scrollspy");
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50,
        });
    </script>
</body>

</html>