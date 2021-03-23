<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Customer</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis User</th>
                        <th>Tanggal di buat akun</th>
                        <th>Aksi</th>
                </thead>
                <?php
$no = 1;
foreach ($user as $us) {
    ?>
                <tr>
                    <div>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $us->name ?></td>
                        <td><?php echo $us->email ?></td>
                        <td><?php echo $us->role ?></td>
                        <td><?php echo $us->date_created ?></td>
                        <td>
                            <?php echo anchor('admin/datauser/hapus/' . $us->id_user,
        ' <i class="far fa-trash-alt"></i>', [
            'class' => 'btn btn-outline-danger',
            'onclick' => "return confirm('Anda yakin ingin menghapus data ini?')"]); ?>
                        </td>
                    </div>
                </tr>
                <?php }?>
            </table>

        </div>
    </div>
</div>