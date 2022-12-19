<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Goggles Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url() ?>assets/css/login_overlay.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url() ?>assets/css/style6.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/shop.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.css" type="text/css" media="all">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url() ?>assets/css/fontawesome-all.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets///fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets///fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flexslider.css" type="text/css" media="screen" />
    <link href="<?php echo base_url() ?>assets/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery-ui1.css">
    <link href="<?php echo base_url() ?>assets/css/contact.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/checkout.css">
</head>

<body>
    <div class="banner-top container-fluid" id="home">
        <!-- header -->
        <header>
            <div class="row">
                <div class="col-md-3 top-info text-left mt-lg-4">
                    <h6>Need Help</h6>
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i> Call</li>
                        <li class="number-phone mt-3">(+62)8545678099</li>
                    </ul>
                </div>
                <div class="col-md-6 logo-w3layouts text-center">
                    <h1 class="logo-w3layouts">
                        <a class="navbar-brand" href="<?php echo base_url('dashboard') ?>">
                            Goggles </a>
                    </h1>
                </div>

                <div class="col-md-3 top-info-cart text-right mt-lg-4">
                    <ul class="cart-inner-info">
                        <li class="button-log">
                            <a class="btn-open" href="#">
                                <span class="fa fa-user" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="galssescart galssescart2 cart cart box_1">
                            <?php $keranjang = '<button class="top_googles_cart" type="submit" name="submit" value="">
                                My Cart 
                                ' . $this->cart->total_items() ?>
                            <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                            <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </li>
                    </ul>
                    <!---->

                    <div class="overlay-login text-left">
                        <button type="button" class="overlay-close1">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        <div class="wrap">
                            <h5 class="text-center mb-4"></h5>
                            <div class="login p-5 bg-dark mx-auto mw-100">
                                <form action="#" method="post">
                                    <!-- <?php foreach ($user as $usr) : ?>
                                        <div>
                                            <label class="mb-2">Name : <?php echo $usr->name ?></label>
                                        </div>
                                        <div>
                                            <label class="mb-2">Password</label>
                                        </div>
                                    <?php endforeach; ?> -->
                                    <button class="btn btn-primary submit mb-4"> <a href="<?php echo base_url('dashboard/logout') ?>"><label>Log Out</label></a></button>

                                </form>
                            </div>
                            <!---->
                        </div>
                    </div>

                    <!---->
                </div>
            </div>

            <label class="top-log mx-auto"></label>
            <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

                <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">

                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-mega mx-auto">
                        <li class="nav-item">
                            <a class="nav-link ml-lg-0" href="<?php echo base_url('dashboard') ?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('about') ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('contact') ?>">Contact</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <!-- //header -->