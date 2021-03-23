<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="<?php echo base_url('transaksi/create'); ?>" class="btn btn-outline-primary"
                style="float: right;">Tambah
                Produk</a><br><br>
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Foto</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tr>
                    <div>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td> <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i></button>
                            <button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-trash"
                                    aria-hidden="true"></i></button>
                        </td>
                    </div>
                </tr>
            </table>
        </div>
    </div>
</div>