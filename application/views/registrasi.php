<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Registrasi</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Border Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>ok/css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="<?php echo base_url() ?>ok/css/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

    <!-- Google fonts -->
    <link href="<?php echo base_url() ?>ok///fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">

    <!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>
    <h1 class="title-agile text-center">G O G G L E S </h1>
    <div class="content-w3ls">
        <div class="content-bottom">
            <h2>Register Here <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
            <form action="<?php echo base_url('registrasi') ?>" method="post">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="name" id="name" type="text" value="" placeholder="Username" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="email" id="email" type="email" value="" placeholder="Email">
                        <?= form_error('email', '<small style="background: #fff; color: #eb5a46" class="pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-phone" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="number" id="number" type="text" value="" placeholder="Contact Number">
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="myInput" type="Password" placeholder="Password">
                        <?= form_error('password', '<small style="background: #fff; color: #eb5a46" class="pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="wthree-field">
                    <input style="background: #eb5a46" id="saveForm" name="saveForm" type="submit" value="Register" />
                </div>
                <div class="account">
                    <p class="text-center">Already have an account ? <a href="<?php echo base_url('login') ?>" style="color: #eb5a46">Login</a></p>
                </div>

                <div style=></div>
            </form>
        </div>
    </div>

</body>

</html>