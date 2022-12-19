<div class="container">
    <div class="col-lg-12">
        <center>
            <h3>UPDATE DATA BARANG</h3><br>
        </center>
        <?php foreach ($user as $usr) ?>

        <form action="<?php echo base_url() . 'admin/update_aksi/' ?>" method="POST">

            <div class="from-group">
                <label>Nama</label>
                <input type="hidden" name="id" value="<?php echo $usr->id ?>">
                <input type="text" name="name" class="form-control" value="<?php echo $usr->name ?>">

            </div><br>
            <div class=" from-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $usr->email ?>">

            </div><br>
            <div class=" from-group">
                <label>No. Telepon</label>
                <input type="text" name="number" class="form-control" value="<?php echo $usr->number ?>">

            </div><br>
            <div class=" from-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $usr->password ?>">

            </div><br>
            <center>
                <a href="<?php echo base_url('admin/index') ?>"> <button type=" button" class="btn btn-secondary ml-3">Close</button></a>
                <button type=" submit" class="btn btn-primary ml-3">Save changes</button>
            </center><br><br>
        </form>
        <php endforeach; ?>

    </div>
</div>