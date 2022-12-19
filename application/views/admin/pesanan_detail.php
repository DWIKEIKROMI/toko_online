<div class="container">
    <div class="col-lg-12">
        <center>
            <div class="alert alert-success" role="alert">
                <i class="fas fa-eye"></i> Detail Pesanan Invoice : <?php echo $invoice->id_invoice ?>
            </div>
        </center>


        <center>
            <table class="table table-bordered table-striped tabel-hover">
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Id Barang</th>
                    <th>Nama Product</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
                <?php
                $total = 0;
                $no = 1;
                foreach ($cart as $crt) : {
                        $subtotal = $crt->jumlah * $crt->harga;
                        $total += $subtotal;
                    } ?>
                    <tr style="text-align: center">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $crt->id_barang ?></td>
                        <td><?php echo $crt->nama ?></td>
                        <td><?php echo $crt->jumlah ?></td>
                        <td><?php echo number_format($crt->harga, 0, ',', '.')  ?></td>
                        <td><?php echo number_format($subtotal, 0, ',', '.') ?></td>


                    </tr>

                <?php endforeach; ?>
                <tr>
                    <td colspan="5" align="right"><b> Total Bayar :</b></td>
                    <td><b>Rp <?php echo number_format($total, 0, ',', '.'); ?> </b></td>
                </tr>
            </table>
            <a href="<?php echo base_url('invoice/index') ?>">
                <div class="btn btn-primary">Kembali</div><br><br>
        </center>
    </div>
</div>