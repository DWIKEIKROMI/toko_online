<div class="container">
    <div class="col-lg-12">
        <center>
            <div class="alert alert-success" role="alert"><?= $usr; ?>
            </div>
        </center>

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
</div>