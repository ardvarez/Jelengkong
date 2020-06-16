<!DOCTYPE html>
<html lang="en">

<?php
include "config/koneksi.php";
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Galeri Lukisan</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

    <!-- =======================================================
  * Template Name: Amoeba - v2.0.0
  * Template URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
/**
* Template Name: Amoeba - v2.0.0
* Template URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
    font-family: "Open Sans", sans-serif;
    color: #777;
}

a {
    color: #43aea0;
}

a:hover {
    color: #00d3b8;
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6,
.font-primary {
    font-family: "Lato", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
    position: fixed;
    display: none;
    width: 40px;
    height: 40px;
    border-radius: 3px;
    right: 15px;
    bottom: 15px;
    background: #70b9b0;
    color: #fff;
    transition: display 0.5s ease-in-out;
    z-index: 99999;
}

.back-to-top i {
    font-size: 24px;
    position: absolute;
    top: 8px;
    left: 8px;
}

.back-to-top:hover {
    color: #fff;
    background: #8bc6bf;
    transition: background 0.2s ease-in-out;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
    height: 80px;
    transition: all 0.5s;
    z-index: 997;
    transition: all 0.5s;
    padding: 20px 0;
    background: #2d6760;
}

#header.header-scrolled {
    background: #1d443f;
    height: 60px;
    padding: 10px 0;
}

#header .logo h1 {
    font-size: 30px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 700;
    letter-spacing: 1px;
}

#header .logo h1 a,
#header .logo h1 a:hover {
    color: #fff;
    text-decoration: none;
}

#header .logo img {
    padding: 0;
    margin: 0;
    max-height: 40px;
}

@media (max-width: 768px) {
    #header .logo h1 {
        font-size: 28px;
        padding: 8px 0;
    }
}

#main {
    margin-top: 80px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu,
.nav-menu * {
    margin: 0;
    padding: 0;
    list-style: none;
}

.nav-menu>ul>li {
    position: relative;
    white-space: nowrap;
    float: left;
}

.nav-menu a {
    display: block;
    position: relative;
    color: #d2ece9;
    padding: 10px 15px;
    transition: 0.3s;
    font-size: 14px;
    font-family: "Open Sans", sans-serif;
}

.nav-menu a:hover,
.nav-menu .active>a,
.nav-menu li:hover>a {
    color: #9cd5ce;
    text-decoration: none;
}

.nav-menu .drop-down ul {
    display: block;
    position: absolute;
    left: 0;
    top: calc(100% - 30px);
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    padding: 10px 0;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: ease all 0.3s;
}

.nav-menu .drop-down:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
}

.nav-menu .drop-down li {
    min-width: 180px;
    position: relative;
}

.nav-menu .drop-down ul a {
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 500;
    text-transform: none;
    color: #25564f;
}

.nav-menu .drop-down ul a:hover,
.nav-menu .drop-down ul .active>a,
.nav-menu .drop-down ul li:hover>a {
    color: #70b9b0;
}

.nav-menu .drop-down>a:after {
    content: "\ea99";
    font-family: IcoFont;
    padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
    top: 0;
    left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
}

.nav-menu .drop-down .drop-down>a {
    padding-right: 35px;
}

.nav-menu .drop-down .drop-down>a:after {
    content: "\eaa0";
    font-family: IcoFont;
    position: absolute;
    right: 15px;
}

@media (max-width: 1366px) {
    .nav-menu .drop-down .drop-down ul {
        left: -90%;
    }

    .nav-menu .drop-down .drop-down:hover>ul {
        left: -100%;
    }

    .nav-menu .drop-down .drop-down>a:after {
        content: "\ea9d";
    }
}

/* Mobile Navigation */
.mobile-nav {
    position: fixed;
    top: 0;
    bottom: 0;
    z-index: 9999;
    overflow-y: auto;
    left: -260px;
    width: 260px;
    padding-top: 18px;
    background: #01292a;
    transition: 0.4s;
}

.mobile-nav * {
    margin: 0;
    padding: 0;
    list-style: none;
}

.mobile-nav a {
    display: block;
    position: relative;
    color: #d2ece9;
    padding: 10px 20px;
    font-weight: 500;
}

.mobile-nav a:hover,
.mobile-nav .active>a,
.mobile-nav li:hover>a {
    color: #9cd5ce;
    text-decoration: none;
}

.mobile-nav .drop-down>a:after {
    content: "\ea99";
    font-family: IcoFont;
    padding-left: 10px;
    position: absolute;
    right: 15px;
}

.mobile-nav .active.drop-down>a:after {
    content: "\eaa0";
}

.mobile-nav .drop-down>a {
    padding-right: 35px;
}

.mobile-nav .drop-down ul {
    display: none;
    overflow: hidden;
}

.mobile-nav .drop-down li {
    padding-left: 20px;
}

.mobile-nav-toggle {
    position: fixed;
    right: 15px;
    top: 15px;
    z-index: 9998;
    border: 0;
    background: none;
    font-size: 24px;
    transition: all 0.4s;
    outline: none !important;
    line-height: 1;
    cursor: pointer;
    text-align: right;
}

.mobile-nav-toggle i {
    color: #fff;
}

.mobile-nav-overly {
    width: 100%;
    height: 100%;
    z-index: 9997;
    top: 0;
    left: 0;
    position: fixed;
    background: rgba(1, 41, 42, 0.9);
    overflow: hidden;
    display: none;
}

.mobile-nav-active {
    overflow: hidden;
}

.mobile-nav-active .mobile-nav {
    left: 0;
}

.mobile-nav-active .mobile-nav-toggle i {
    color: #fff;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
    padding: 60px 0;
}

.section-bg {
    background-color: #f2f9f8;
}

.section-title {
    text-align: center;
    padding-bottom: 30px;
}

.section-title h2 {
    font-size: 32px;
    font-weight: 300;
    margin-bottom: 20px;
    padding-bottom: 0;
    color: #555;
}

.section-title p {
    margin-bottom: 0;
}

/*--------------------------------------------------------------
# About Us
--------------------------------------------------------------*/
.about h3 {
    font-weight: 400;
    font-size: 26px;
}

.about ul {
    list-style: none;
    padding: 0;
}

.about ul li {
    padding-bottom: 10px;
}

.about ul i {
    font-size: 20px;
    padding-right: 4px;
    color: #70b9b0;
}

.about p:last-child {
    margin-bottom: 0;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
    margin-bottom: 20px;
    text-align: center;
}

.services .icon {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
}

.services .icon i {
    color: #70b9b0;
    font-size: 42px;
}

.services .title {
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
    text-transform: uppercase;
}

.services .title a {
    color: #343a40;
    transition: 0.3s;
}

.services .icon-box:hover .title a {
    color: #70b9b0;
}

.services .description {
    line-height: 24px;
    font-size: 14px;
}

/*--------------------------------------------------------------
# Call To Action
--------------------------------------------------------------*/
.call-to-action {
    background: linear-gradient(rgba(1, 41, 42, 0.5), rgba(7, 56, 57, 0.5)), url("../img/call-to-action-bg.jpg") fixed center center;
    background-size: cover;
    padding: 60px 0;
}

.call-to-action h3 {
    color: #fff;
    font-size: 28px;
    font-weight: 700;
}

.call-to-action p {
    color: #fff;
}

.call-to-action .cta-btn {
    font-family: "Lato", sans-serif;
    font-weight: 400;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 28px;
    border-radius: 25px;
    transition: 0.5s;
    margin-top: 10px;
    border: 2px solid #fff;
    color: #fff;
}

.call-to-action .cta-btn:hover {
    background: #70b9b0;
    border: 2px solid #70b9b0;
}

/*--------------------------------------------------------------
# Our Portfolio
--------------------------------------------------------------*/
.portfolio {
    padding: 60px 0;
}

.portfolio #portfolio-flters {
    padding: 0;
    margin: 0 0 35px 0;
    list-style: none;
    text-align: center;
}

.portfolio #portfolio-flters li {
    cursor: pointer;
    margin: 0 15px 15px 0;
    display: inline-block;
    padding: 10px 20px;
    font-size: 12px;
    line-height: 20px;
    color: #777;
    border-radius: 4px;
    text-transform: uppercase;
    background: white;
    margin-bottom: 5px;
    transition: all 0.3s ease-in-out;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
    background: #70b9b0;
    color: #fff;
}

.portfolio #portfolio-flters li:last-child {
    margin-right: 0;
}

.portfolio .portfolio-item {
    background: #073839;
    overflow: hidden;
    min-height: 200px;
    position: relative;
    border-radius: 4px;
    margin: 0 0 30px 0;
}

.portfolio .portfolio-item img {
    transition: all 0.3s ease-in-out;
}

.portfolio .portfolio-item .portfolio-info {
    opacity: 0;
    position: absolute;
    transition: all .3s linear;
    text-align: center;
    top: 10%;
    left: 0;
    right: 0;
}

.portfolio .portfolio-item .portfolio-info h3 {
    font-size: 22px;
}

.portfolio .portfolio-item .portfolio-info h3 a {
    color: #fff;
    font-weight: bold;
}

.portfolio .portfolio-item .portfolio-info a i {
    color: #70b9b0;
    font-size: 24px;
}

.portfolio .portfolio-item:hover img {
    opacity: 0.4;
    transform: scale(1.1);
}

.portfolio .portfolio-item:hover .portfolio-info {
    opacity: 1;
    top: calc(50% - 30px);
}

/*--------------------------------------------------------------
# Frequently Asked Questions
--------------------------------------------------------------*/
.faq {
    padding: 60px 0;
}

.faq .faq-list {
    padding: 0;
    list-style: none;
}

.faq .faq-list li {
    padding: 0 0 20px 25px;
}

.faq .faq-list a {
    display: block;
    position: relative;
    font-family: #70b9b0;
    font-size: 18px;
    font-weight: 500;
}

.faq .faq-list i {
    font-size: 18px;
    position: absolute;
    left: -25px;
    top: 6px;
}

.faq .faq-list p {
    margin-bottom: 20px;
    font-size: 15px;
}

.faq .faq-list a.collapse {
    color: #70b9b0;
}

.faq .faq-list a.collapsed {
    color: #343a40;
}

.faq .faq-list a.collapsed:hover {
    color: #70b9b0;
}

.faq .faq-list a.collapsed i::before {
    content: "\eab2" !important;
}

/*--------------------------------------------------------------
# Our Team
--------------------------------------------------------------*/
.team .member {
    text-align: center;
    margin-bottom: 20px;
    box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
    padding: 30px 20px;
    background: #fff;
}

.team .member img {
    max-width: 60%;
    border-radius: 50%;
    margin: 0 0 30px 0;
}

.team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
}

.team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
}

.team .member p {
    padding-top: 10px;
    font-size: 14px;
    font-style: italic;
    color: #aaaaaa;
}

.team .member .social {
    margin-top: 15px;
}

.team .member .social a {
    color: #92cac3;
    transition: 0.3s;
}

.team .member .social a:hover {
    color: #3c8b81;
}

.team .member .social i {
    font-size: 18px;
    margin: 0 2px;
}

/*--------------------------------------------------------------
# Contact Us
--------------------------------------------------------------*/
.contact .contact-about h3 {
    font-size: 36px;
    margin: 0 0 10px 0;
    padding: 0;
    line-height: 1;
    font-weight: 500;
    letter-spacing: 1px;
    color: #70b9b0;
}

.contact .contact-about p {
    font-size: 14px;
    line-height: 24px;
    font-family: "Lato", sans-serif;
    color: #888;
}

.contact .social-links {
    padding-bottom: 20px;
}

.contact .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #fff;
    color: #70b9b0;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
    border: 1px solid #70b9b0;
}

.contact .social-links a:hover {
    background: #70b9b0;
    color: #fff;
}

.contact .info {
    color: #777;
}

.contact .info i {
    font-size: 32px;
    color: #70b9b0;
    float: left;
    line-height: 1;
}

.contact .info label {
    font-size: 16px;
    float: left;
    line-height: 28px;
}

.contact .info p {
    line-height: 28px;
    font-size: 16px;
}

.contact .php-email-form .validate {
    display: none;
    color: red;
    margin: 0 0 15px 0;
    font-weight: 400;
    font-size: 13px;
}

.contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
}

.contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
}

.contact .php-email-form button[type="submit"] {
    background: #70b9b0;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
}

.contact .php-email-form button[type="submit"]:hover {
    background: #92cac3;
}

@-webkit-keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

/*--------------------------------------------------------------
# Map
--------------------------------------------------------------*/
.map {
    padding: 0;
    margin-bottom: -10px;
}

.map iframe {
    width: 100%;
    height: 380px;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
    background: #073839;
    padding: 30px 0;
    color: #fff;
    font-size: 14px;
}

#footer .copyright {
    text-align: center;
}

#footer .credits {
    padding-top: 10px;
    text-align: center;
    font-size: 13px;
    color: #fff;
}

#hero {
    width: 100%;
    height: 70vh;
    background: url("assets/img/header.jpg") top center;
    background-size: cover;
    position: relative;
    margin-bottom: -80px;
}

#hero:before {
    content: "";
    background: rgba(105, 170, 150, 0.65);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}

#hero .hero-container {
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    padding-top: 80px;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
}

#hero h1 {
    margin: 0 0 10px 0;
    font-size: 48px;
    font-weight: 300;
    line-height: 56px;
    color: #fff;
}

#hero h2 {
    color: #eee;
    margin-bottom: 50px;
    font-size: 20px;
    font-weight: 300;
}

#hero .btn-get-started {
    font-family: "Cormorant Garamond", sans-serif;
    font-weight: 400;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 28px 10px 28px;
    border-radius: 50px;
    transition: 0.5s;
    border: 1px solid #fff;
    color: #fff;
}

#hero .btn-get-started:hover {
    background: #fff;
    color: #70b9b0;
    border: 1px solid #70b9b0;
}

@media (min-width: 1024px) {
    #hero {
        background-attachment: fixed;
    }
}

@media (max-width: 768px) {
    #hero h1 {
        font-size: 28px;
        line-height: 36px;
    }

    #hero h2 {
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 30px;
    }
}

.filterDiv {
    display: none;
}

.show {
    display: block;
}

.contain {
    margin-top: 20px;
    overflow: hidden;
}

/* Style the buttons */
.tombol {
    border: none;
    outline: none;
    padding: 12px 12px;
    width: 12%;
    font-size: 15px;
    background-color: #f1f1f1;
    cursor: pointer;
    margin-bottom: 2%;
}

.tombol:hover {
    background-color: #ddd;
}

.tombol.active {
    background-color: #70B9B0;
    border: none;

    outline: none;
    color: white;
}



form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 90%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 10%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="#hero"><span>Jelekong</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="text-light"><a href="index.php #about">Profil Desa</a></li>
                    <li><a href="index.php #portfolio">Galeri Lukisan</a></li>
                    <li><a href="index.php #team">Acara</a></li>
                    <li><a href="index.php #contact">Kontak</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End #header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1 style="font-family:Glacial Indefference">GALERI LUKISAN</h1>
        </div>
    </section><!-- #hero -->

    <main id="main">


        <section id="portfolio" class="portfolio">
            <div class="container" id="myBtnContainer">
                <form class="example" action="" style="margin-bottom:2%">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <?php
                    $search = $_GET['search'];
                      if ($search !="") {
                        # code...
                        echo "
                        <label style='margin-bottom:2%'>Hasil Pencarian $search </label> <br>
                        ";
                    }
                    ?>
                <div class="row">


                    <div class="col-lg-12">

                        <center>
                            <button class="tombol active" onclick="filterSelection('all')"> Show all</button>

                            <?php
                                  $tampil_tema=mysqli_query($config,"SELECT * FROM tbl_tema LIMIT 5");
                                   while ($tema=mysqli_fetch_array($tampil_tema)){
                            ?>
                            <button class="tombol" onclick="filterSelection('<?php echo $tema[tema];?>')">
                                <?php echo $tema[tema] ?></button>

                            <?php 
                                   }
                             ?>
                        </center>
                    </div>
                </div>

                <div class="row contain">
                    <?php
                         $show=mysqli_query($config,"SELECT * FROM tbl_portofolio, tbl_user WHERE tbl_portofolio.idPelukis = tbl_user.idUser AND tbl_portofolio.namaLukisan LIKE '%$search%'");
                         while ($y=mysqli_fetch_array($show)){
                        ?>
                    <div class="col-lg-4 col-md-8 filterDiv <?php echo $y[temaLukisan]; ?>">
                        <div class="portfolio-item" data-toggle="modal"
                            data-target="#portfolioModale<?php echo $y[id]?>">
                            <div class="portfolio-item-caption align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i
                                        class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="rounded" width="auto" height="300"
                                src="pelukis/assets/img/portfolio/<?php echo $y[gambarLukisan]?>" class="img-fluid"
                                alt="">
                        </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="portfolioModale<?php echo $y[id]?>" tabindex="-1"
                        role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                </button>
                                <div class="modal-body ">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <!-- Portfolio Modal - Title-->
                                                <h3 style="text-align:left">
                                                    <?php echo $y[namaLukisan]?></h3>
                                                <!-- Icon Divider-->
                                                <div class="row" style="margin-top:3%;">
                                                    <div class="col-lg-6 order-1 order-lg-2">
                                                        <b> <label style="text-align:left;font-size:19px"
                                                                for="">Definisi</label></b>
                                                        <p><?php echo $y['deskripsiLukisan']?></p>
                                                        <b> <label style="text-align:left;margin-top:5%;font-size:19px"
                                                                for="">Spesifikasi</label></b>
                                                        <p>Nama : <?php echo $y['namaLukisan']?></p>
                                                        <p>Pelukis : <?php echo $y['namaLengkap']?></p>
                                                        <p>Media : <?php echo $y['mediaLukisan']?></p>
                                                        <p>Ukuran Lukisan : <?php echo $y['ukuranLukisan']?></p>
                                                        <p class="uang">Harga : <?php echo $y['harga']?></p>
                                                        <p>Penjual : <?php echo $y['namaPenjual']?></p>

                                                        <div style="margin-top:10%">
                                                            <a href="https://wa.me/<?php echo $y[nohp]?>"
                                                                style="text-decoration:none; width:50%"> <button
                                                                    class="btn btn-lg" name="edit" value="Edit">Hubungi
                                                                    Penjual</button></a>
                                                            <a href="<?php echo $y[link]?>"
                                                                style="text-decoration:none; width:30%"> <button
                                                                    class="btn btn-lg btn-primary"
                                                                    style="margin-left:10%" name="delete"
                                                                    value="Delete">Beli</button></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
                                                        <img class="rounded" width="530" height="500"
                                                            src="pelukis/assets/img/portfolio/<?php echo $y[gambarLukisan]?>"
                                                            alt="">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php
                         }
                    ?>
                </div>



            </div>
        </section><!-- End Our Portfolio Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->




        <!-- ======= Map Section ======= -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Amoeba</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End #footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {

        // Format mata uang.
        $('.uang').mask('000.000.000', {
            reverse: true
        });

    })
    </script>

    <script>
    filterSelection("all")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("tombol");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
    </script>


</body>

</html>