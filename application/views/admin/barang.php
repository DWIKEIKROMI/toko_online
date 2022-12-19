<div class="container">
    <div class="col-lg-12">
        <center>
            <!-- <div class="alert alert-success" role="alert">
                <i class="fas fa-user"></i> Barang
            </div> -->
            <?= $this->session->flashdata('pesan'); ?>
        </center><br>
        <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah_barang"> <i class="fas fa-plus fa-sm"></i> Tambah Barang </button><br><br>

        <center>
            <table class="table table-bordered table-striped tabel-hover">
                <tr style="text-align: center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Stok</th>
                    <th>Foto</th>
                    <th colspan="3">Aksi
                    </th>
                </tr>

                <?php
                $no = 1;
                foreach ($barang as $brg) : ?>
                    <tr style="text-align: center">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $brg['nama'] ?></td>
                        <td><?php echo $brg['harga'] ?></td>
                        <td><?php echo $brg['keterangan'] ?></td>
                        <td><?php echo $brg['stok'] ?></td>
                        <td><?php echo $brg['foto'] ?></td>
                        <td>
                        <td width="20px"><?php echo anchor('barang/update/' . $brg['id_barang'], '<div class="btn btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </div>') ?></td>
                        </td>
                        <td width="20px"><?php echo anchor('barang/delete/' . $brg['id_barang'], '<div class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </div>') ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'barang/tambah_aksi'; ?>" method="POST" enctype="multipart/form-data">

                        <div class="from-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama" class="form-control">

                        </div><br>
                        <div class="from-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control">

                        </div><br>
                        <div class="from-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control">

                        </div><br>
                        <div class="from-group">
                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control">

                        </div><br>
                        <div class="from-group">
                            <label>Gambar Barang</label><br>
                            <input type="file" name="foto" class="form-control">

                        </div><br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--modal-->
</div>
<br><br>