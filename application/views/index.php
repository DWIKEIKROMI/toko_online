<!-- banner -->
<?= $this->session->flashdata('pesan'); ?>
<div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"><?php echo base_url('assest/images/banner1.jpg') ?></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="carousel-caption text-center">
                    <h3>Men’s eyewear
                        <span>Cool summer sale 50% off</span>
                    </h3>
                    <a href="<?php echo base_url('shop') ?>" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                </div>
            </div>
            <div class="carousel-item item2">
                <div class="carousel-caption text-center">
                    <h3>Women’s eyewear
                        <span>Want to Look Your Best?</span>
                    </h3>
                    <a href="<?php echo base_url('shop') ?>" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

                </div>
            </div>
            <div class="carousel-item item3">
                <div class="carousel-caption text-center">
                    <h3>Men’s eyewear
                        <span>Cool summer sale 50% off</span>
                    </h3>
                    <a href="<?php echo base_url('shop') ?>" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

                </div>
            </div>
            <div class="carousel-item item4">
                <div class="carousel-caption text-center">
                    <h3>Women’s eyewear
                        <span>Want to Look Your Best?</span>
                    </h3>
                    <a href="<?php echo base_url('shop') ?>" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
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

<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container-fluid">
        <div class="inner-sec-shop px-lg-4 px-3">
            <h3 class="tittle-w3layouts my-lg-4 my-4">New Arrivals for you </h3>
            <div class="row">
                <!-- /womens -->
                <?php foreach ($barang as $brg) : ?>
                    <div class="col-md-3 product-men women_two">
                        <div class="product-googles-info googles">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="<?php echo base_url() . 'assets/images/' . $brg['foto'] ?>" class="img-fluid" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="<?php echo base_url() . 'dashboard/detail/' . $brg['id_barang'] ?>" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <h4>
                                                    <a href="<?php echo base_url() . 'dashboard/detail/' . $brg['id_barang'] ?>"><?php echo $brg['nama'] ?></a>
                                                </h4>
                                                <div class="grid-price mt-2">
                                                    <span class="money ">Rp. <?php echo $brg['harga'] ?></span>
                                                </div>
                                            </div>
                                            <ul class="stars">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg['id_barang'], '<div class="#">
                                            
                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                    <i class="fas fa-cart-plus"></i>
                                                </button>
                                     
                                        </div>')
                                        ?>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- about -->