<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $title; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="jpg/png" href="<?php echo base_url('img/logo.jpg') ?>">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/style.css" type="text/css" />
    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url('css/my-style.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?php echo base_url() ?>/home/index"><img class="logonama" src="<?php echo base_url() ?>/img/logo/logo.png" alt="" srcset=""></a>
                    </div>
                    <marquee class="pb-5 kecil">
                        <p>SELAMAT DATANG DI WEBSITE PRIBADI CATUR PAMUNGKAS. SILAHKAN BERKIRIM PESAN DENGAN TUTUR DAN BAHASA YANG SOPAN YA.. TERIMAKASIH <i class="fa fa-heart-o"></i></p>
                    </marquee>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li><a href="<?php echo base_url() ?>/home/index">Home</a></li>
                                <li><a href="<?php echo base_url() ?>/home/about">About</a></li>
                                <li><a href="<?php echo base_url() ?>/home/galery">Galery</a></li>
                                <li><a href="<?php echo base_url() ?>/home/hoby">Hoby</a></li>
                                <li><a href="<?php echo base_url() ?>/contact">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="https://www.facebook.com/catur.tavrus/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/catur_al_pamungkas/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                        <marquee class="pb-5 besa">
                            <p>SELAMAT DATANG DI WEBSITE PRIBADI CATUR PAMUNGKAS. SILAHKAN BERKIRIM PESAN DENGAN TUTUR DAN BAHASA YANG SOPAN YA.. TERIMAKASIH <i class="fa fa-heart-o"></i></p>
                        </marquee>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- <marquee>
        <p>SELAMAT DATANG DI WEBSITE CATUR PAMUNGKAS. SILAHKAN BERKIRIM PESAN DENGAN TUTUR DAN BAHASA YANG SOPAN YA.. TERIMAKASIH <i class="fa fa-heart-o"></i></p>
    </marquee> -->

    <?php echo $this->renderSection('content'); ?>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="waktu">
                            <?php
                            echo date("H:i A") . "<br>";
                            echo date("l,d F Y") . "<br>";
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="https://www.facebook.com/catur.tavrus/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/catur_al_pamungkas/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- copyright -->
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="footer__copyright__text">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserve | WebSite Ini Dibuat Pada Tanggal <i> Rabu, 25 November 2020</i>
                            <i aria-hidden="true"></i> By
                            <i class="fa fa-heart-o"> Catur Pamungkas</i>
                        </p>
                    </div>
                </div>
            </div>
            <!-- end copyrifgt -->
        </div>
    </footer>
    <!-- my alet -->
    <script src="<?php echo base_url() ?>/js/script.js"></script>
    <!-- Footer End -->
    <!-- swet aler -->
    <script src="<?php echo base_url('swet/sweetalert2.all.min.js') ?>"></script>
    <!-- end Swet -->
    <!-- my swet alert -->
    <script type="text/javascript" src="<?php echo base_url('swet/alert.js') ?>"></script>
    <!-- end swet alert -->
    <!-- Js Plugins -->
    <script src="<?php echo base_url() ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>/js/mixitup.min.js"></script>
    <script src="<?php echo base_url() ?>/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url() ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>/js/main.js"></script>
    <script src="<?php echo base_url() ?>/jquery/jquery.js"></script>

</body>

</html>