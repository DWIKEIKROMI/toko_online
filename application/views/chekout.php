<!-- banner -->
<div class="banner_inner">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="index.html">Home</a>
                    <i>|</i>
                </li>
                <li>Checkout </li>
            </ul>
        </div>
    </div>

</div>
<!--//banner -->

<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container">
        <div class="inner-sec-shop px-lg-4 px-3">

            <h3 class="tittle-w3layouts my-lg-4 mt-3">Checkout </h3>
            <div class="checkout-right">
                <h4>Your shopping cart contains:
                    <?php $keranjang = '
                                ' . $this->cart->total_items() . ' product' ?>
                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>

                </h4>
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($this->cart->contents() as $items) :

                        ?>
                            <tr class="rem1">
                                <td class="invert"><?php echo $no++ ?></td>
                                <td class="invert"><?php echo $items['name'] ?></td>
                                <!-- <td class="invert-image">
                                    <a href="single.html">
                                        <img src="<?php echo $items['barang'] ?>" alt=" " class="img-responsive">
                                    </a>
                                </td> -->
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <?php echo $items['qty'] ?>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></td>

                                <td class="invert">
                                    <div class="rem">
                                        <a class="close1" href="<?= base_url('dashboard/hapus_keranjang/') ?><?= $items['rowid'] ?>"></a>

                                    </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="checkout-left row">
                <div class="col-md-4 checkout-left-basket">
                    <h4>Subtotal</h4>
                    <?php
                    $no = 1;
                    foreach ($this->cart->contents() as $items) :

                    ?>
                        <ul>
                            <li><?php echo $items['name'] ?>
                                <i>-</i>
                                <span>Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></span>
                            </li>
                            <i></i>
                        <?php endforeach; ?>
                        <hr>
                        <li style="color: black"> Total
                            <i>-</i>
                            <span>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.')  ?></span>
                        </li>
                        </ul><br><br><br>

                        <div class="information-wrapper">
                            <a class="submit check_out" href="<?= base_url('dashboard/proses_bayar') ?>">Make a Payment </a>
                        </div>
                </div>
            </div>
        </div>
</section>