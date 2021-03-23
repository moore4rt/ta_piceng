<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="<?php echo base_url('admin/dataproduk/create'); ?>" class="btn btn-outline-primary"
                style="float: right;">Data Produk
            </a><br><br>
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Image</th>
                        <th>Katagori</th>
                        <th>Deskrepsi</th>
                        <th>Stok</th>
                        <th>Ukuran</th>
                        <th>Warna</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
$no = 1;
foreach ($produk as $pr) {
    ?>
                <tr>
                    <div>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pr->nama_produk ?></td>
                        <td><?php echo $pr->harga ?></td>
                        <td><img src="<?php echo base_url('uploads/').$pr->image ?>" width="150"></td>
                        <td><?php echo $pr->nama_katagori ?></td>
                        <td><?php echo $pr->dekrepsi ?></td>
                        <td><?php echo $pr->stok ?></td>
                        <td><?php echo $pr->ukuran ?></td>
                        <td><?php echo $pr->warna ?></td>
                        <td> <?php echo anchor('admin/dataproduk/edit/' . $pr->id_produk,
        ' <i class="far fa-edit"></i>', [
            'class' => 'btn btn-outline-primary',
        ]); ?>
                            <?php echo anchor('admin/dataproduk/hapus/' . $pr->id_produk,
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