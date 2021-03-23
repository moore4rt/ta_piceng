<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katagori</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="<?php echo base_url('admin/datakatagori/create'); ?>" class="btn btn-outline-primary"
                style="float: right;">Tambah Katagori
                Produk</a><br><br>
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Katagori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
$no = 1;
foreach ($katagori as $kt) {
    ?>
                <tr>
                    <div>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $kt->nama_katagori ?></td>
                        <td> <?php echo anchor('admin/datakatagori/edit/' . $kt->id_katagori,
        ' <i class="far fa-edit"></i>', [
            'class' => 'btn btn-outline-primary',
        ]); ?>
                            <?php echo anchor('admin/datakatagori/hapus/' . $kt->id_katagori,
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