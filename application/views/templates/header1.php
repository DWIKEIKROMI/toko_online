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
    <link href="<?php echo base_url("assets/css/bootstrap.css") ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url("assets/css/login_overlay.css") ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url("assets/css/style6.css") ?>" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/shop.css") ?>" type="text/css" />
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
                        <a class="navbar-brand" href="<?php echo base_url('login') ?>">
                            Goggles </a>
                    </h1>
                </div>
                <div class="col-md-3 top-info-cart text-right mt-lg-4">
                    <ul class="cart-inner-info">
                        <li class="button-log">
                            <a class="btn-open" href="#">
                                <center>
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                    <H5 style="color: tomato">LOGIN</H5>
                                </center>
                            </a>
                        </li>
                    </ul>
                    <div class="overlay-login text-left">
                        <button type="button" class="overlay-close1">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        <div class="wrap">
                            <h5 class="text-center mb-4">Login Now</h5>
                            <div class="login p-5 bg-dark mx-auto mw-100">
                                <form action="<?php echo base_url('login'); ?>" method="post">
                                    <div class="form-group">
                                        <label class="mb-2">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        <?= form_error('email', '<small style="background: #fff; color: #eb5a46" class="pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                                        <?= form_error('password', '<small style="background: #fff; color: #eb5a46" class="pl-3">', '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                                </form>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
            <!-- <div class="search">
                <div class="mobile-nav-button">
                    <button id="trigger-overlay" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div> -->
            <!-- open/close -->
            <!-- <div class="overlay overlay-door">
                    <button type="button" class="overlay-close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <form action="#" method="post" class="d-flex">
                        <input class="form-control" type="search" placeholder="Search here..." required="">
                        <button type="submit" class="btn btn-primary submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                </div> -->
            <!-- open/close -->
    </div>
    <label class="top-log mx-auto"></label> <br><br>
    </header>

    <!-- banner -->
    <?= $this->session->flashdata('pesan'); ?>
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-caption text-center">
                        <h3>Hai Guys! <br> Welcome GOGGLES Website's
                            <span>If you don't have account, let's registered</span>
                        </h3>
                        <a href="<?php echo base_url('registrasi') ?>" class="btn btn-sm animated-button gibson-three mt-4">REGISTERED</a>
                    </div>
                </div>
                <div class="carousel-item item2">
                    <div class="carousel-caption text-center">
                        <h3>Hai Guys! <br> Welcome GOGGLES Website's
                            <span>If you don't have account, let's registered</span>
                        </h3>
                        <a href="<?php echo base_url('registrasi') ?>" class="btn btn-sm animated-button gibson-three mt-4">REGISTERED</a>

                    </div>
                </div>
                <div class="carousel-item item3">
                    <div class="carousel-caption text-center">
                        <h3>Hai Guys! <br> Welcome GOGGLES Website's
                            <span>If you don't have account, let's registered</span>
                        </h3>
                        <a href="<?php echo base_url('registrasi') ?>" class="btn btn-sm animated-button gibson-three mt-4">REGISTERED</a>

                    </div>
                </div>
                <div class="carousel-item item4">
                    <div class="carousel-caption text-center">
                        <h3>Hai Guys! <br> Welcome GOGGLES Website's
                            <span>If you don't have account, let's registered</span>
                        </h3>
                        <a href="<?php echo base_url('registrasi') ?>" class="btn btn-sm animated-button gibson-three mt-4">REGISTERED</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--//banner -->
    </div>
    </div>
    <!--//banner-sec-->

    <!--footer -->
    <footer class="py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row footer-top-w3layouts">
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>About Us</h3>
                    </div>
                    <div class="footer-text">
                        <p>Googles is the name of the biggest shop from Indonesia that specializes in luxury sunglasses for men and women. Googles was founded in Malang, Indonesia and then began to spread throughout Europe, America and even the world.
                            Products sold at Googles are famous for their simple and elegant designs on their products.</p>
                        <ul class="footer-social text-left mt-lg-4 mt-3">

                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fas fa-rss"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-vk"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Location :</h4>
                        <p>Jl. Borobudur No.32, Lowokwaru, Malang, Indonesia. 608798</p>
                        <div class="phone">
                            <h4>Contact :</h4>
                            <p>Phone : (+62)8545678099</p>
                            <p>Email :
                                <a href="mailto:info@example.com">Goggles@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="<?php echo base_url("registrasi") ?>">If you don't have account <br> Let's create account in REGISTRATION</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Sign up for your offers</h3>
                    </div>
                    <div class="footer-text">
                        <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                        <form action="#" method="post">
                            <input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
                            <button class="btn1">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                            </button>
                            <div class="clearfix"> </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- //footer -->

    <!--jQuery-->
    <script src="<?php echo base_url() ?>assets/js/jquery-2.2.3.min.js"></script>
    <!-- newsletter modal -->


    <!--search jQuery-->
    <script src="<?php echo base_url() ?>assets/js/modernizr-2.6.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/classie-search.js"></script>
    <script src="<?php echo base_url() ?>assets/js/demo1-search.js"></script>
    <!--//search jQuery-->
    <!-- cart-js -->
    <script src="<?php echo base_url() ?>assets/js/minicart.js"></script>
    <script>
        googles.render();

        googles.cart.on('googles_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <script>
        $(document).ready(function() {
            $(".button-log a").click(function() {
                $(".overlay-login").fadeToggle(200);
                $(this).toggleClass('btn-open').toggleClass('btn-close');
            });
        });
        $('.overlay-close1').on('click', function() {
            $(".overlay-login").fadeToggle(200);
            $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
            open = false;
        });
    </script>
    <!-- carousel -->
    <!-- Count-down -->
    <script src="<?php echo base_url("assets/js/simplyCountdown.js") ?>"></script>
    <link href="<?php echo base_url("assets/css/simplyCountdown.css") ?>" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    900: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>

    <!-- //end-smooth-scrolling -->


    <!-- dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <script src="<?php echo base_url() ?>assets/js/move-top.js"></script>
    <script src="<?php echo base_url() ?>assets/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <!-- js file -->

</body>

</html>