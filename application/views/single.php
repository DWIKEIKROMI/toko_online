<!-- banner -->

<div class="banner_inner">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="<?php echo base_url('dashboard') ?>">Home</a>
                    <i>|</i>
                </li>
                <li>Single Page</li>
            </ul>
        </div>
    </div>

</div>
<!--/shop-->
<?php foreach ($barang as $brg) : ?>
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-shop pt-lg-4 pt-3">
                <div class="row">
                    <div class="col-lg-4 single-right-left ">
                        <div class="grid images_3_of_2">
                            <div class="flexslider1">
                                <div class="thumb-image">
                                    <img src="<?php echo base_url() . 'assets/images/' . $brg->foto ?>" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                        <h3><?php echo $brg->nama ?></h3>
                        <p><span class="item_price">Rp. <?php echo $brg->harga ?></span>
                        </p>

                        <div class="color-quality">
                            <div class="color-quality-right">
                                <h5>Stock :</h5>
                                <p><b><?php echo $brg->stok ?></b></p>
                            </div>
                        </div>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_barang, '<div class="occasion-cart">
                            <div class="googles single-item singlepage">
                                <button type="submit" class="googles-cart pgoogles-cart">
                                    Add to Cart
                                </button>
                            </div>
                        </div>')
                        ?>
                        <ul class="footer-social text-left mt-lg-4 mt-3">
                            <li>Share On : </li>
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
                        </ul>
                    </div>
                    <div class="responsive_tabs mt-1">
                        <div id="horizontalTab">
                            <center><b>Description</b></center><br>
                            <div class="resp-tabs-container">
                                <!--/tab_one-->
                                <div class="tab1">

                                    <div class="single_page">
                                        <h6>Lorem ipsum dolor sit amet</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                            blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                            ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                            magna aliqua.</p>
                                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                            blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                            ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                            magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>