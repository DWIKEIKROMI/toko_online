<div class="container">
    <div class="col-lg-12">
        <center>
            <div class="alert alert-success" role="alert"><?= $usr; ?>
            </div>
        </center>
        <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah_user"> <i class="fas fa-plus fa-sm"></i> Tambah User </button><br><br>



        <center>
            <table class="table table-bordered table-striped tabel-hover">
                <tr style="text-align: center">
                    <th>No</th>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php
                $no = 1;
                foreach ($user as $usr) : {
                    } ?>
                    <tr style="text-align: center">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $usr->id ?></td>
                        <td><?php echo $usr->name ?></td>
                        <td><?php echo $usr->email ?></td>
                        <td><?php echo $usr->number ?></td>

                        <td width="20px"> <?php echo anchor('admin/update/' . $usr->id, '<div class="btn btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </div>') ?></td>

                        <td width="20px"><?php echo anchor('admin/delete/' . $usr->id, '<div class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </div>') ?></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </center>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'admin/tambah_aksi'; ?>" method="POST" enctype="multipart/form-data">

                        <div class="from-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" required>

                        </div><br>
                        <div class="from-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>

                        </div><br>
                        <div class="from-group">
                            <label>No. Telepon</label>
                            <input type="text" name="number" class="form-control" required>
                        </div><br>
                        <div class="from-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
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