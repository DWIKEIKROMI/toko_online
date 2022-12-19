<div class="container">
    <div class="col-lg-12">
        <center>
            <div class="alert alert-success" role="alert">
                <i class="fas fa-shopping-cart"></i> Pesanan
            </div>
        </center>


        <center>
            <table class="table table-bordered table-striped tabel-hover">
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Id Invoice</th>
                    <th>Nama Customer</th>
                    <th>Alamat Customer</th>
                    <th>No. Telepon Cus</th>
                    <th>Pengiriman</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Batas pembayaran</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($invoice as $inv) : ?>
                    <tr style="text-align: center">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $inv->id_invoice ?></td>
                        <td><?php echo $inv->nama ?></td>
                        <td><?php echo $inv->alamat ?></td>
                        <td><?php echo $inv->number ?></td>
                        <td><?php echo $inv->kirim ?></td>
                        <td><?php echo $inv->tgl_pesan ?></td>
                        <td><?php echo $inv->batas_bayar ?></td>
                        <td><?php echo anchor('invoice/detail/' . $inv->id_invoice, '<div class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i> </div>') ?>

                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </center>
    </div>
</div>