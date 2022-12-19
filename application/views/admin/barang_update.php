<div class="container">
    <div class="col-lg-12">
        <center>
            <h3>UPDATE DATA BARANG</h3><br>
        </center>
        <?php foreach ($barang as $brg) ?>

        <form action="<?php echo base_url() . 'barang/update_aksi' ?>" method="POST">

            <div class="from-group">
                <label>Nama Barang</label>
                <input type="hidden" name="id_barang" value="<?php echo $brg->id_barang ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $brg->nama ?>">

            </div><br>
            <div class=" from-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">

            </div><br>
            <div class=" from-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">

            </div><br>
            <div class=" from-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">

            </div><br>

            <center>
                <button type=" button" class="btn btn-secondary ml-3" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary ml-3">Save changes</button>
            </center><br><br>

        </form>

        <php endforeach; ?>
    </div>
</div>