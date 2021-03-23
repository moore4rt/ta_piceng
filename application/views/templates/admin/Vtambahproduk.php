<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katagori</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('admin/dataproduk/tambah') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>Nama Produk</h4>
                </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_produk"><br>
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="<?php echo base_url('admin/dataproduk/index') ?>" class="btn btn-danger"
                        style="color: white;">Kembali</a>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>Harga</h4>
                </label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="harga"><br>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>Gambar</h4>
                </label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" name="image"><br>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>Kategori Produk</h4>
                </label>
                <div class="col-sm-5">
                    <select name="id_katagori" class="form-control">
                        <option>-- Pilih Katagori --</option>
                        <?php foreach ($katagori as $kt): ?>
                        <option value="<?php echo $kt->id_katagori ?>"> <?php echo $kt->nama_katagori ?>
                        </option>
                        <?php endforeach?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>dekrepsi</h4>
                </label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="dekrepsi"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>Stok</h4>
                </label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="stok">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>Pilih Ukuran</h4>
                </label>
                <div class="col-sm-5">
                    <input type="radio" id="ukuran" name="ukuran" value="M">
                    <label>M</label>
                    <input type="radio" id="ukuran" name="ukuran" value="L">
                    <label>L</label>
                    <input type="radio" id="ukuran" name="ukuran" value="XL">
                    <label>XL</label>
                    <input type="radio" id="ukuran" name="ukuran" value="XXL">
                    <label>XXL</label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>Pilih Warna</h4>
                </label>
                <div class="col-sm-5">
                    <input type="radio" id="warna" name="warna" value="Hitam">
                    <label>Hitam</label>
                    <input type="radio" id="warna" name="warna" value="Abu-abu">
                    <label>Abu-abu</label>
                    <input type="radio" id="warna" name="warna" value="Putih">
                    <label>Putih</label>
                    <input type="radio" id="warna" name="warna" value="Biru">
                    <label>Biru</label>
                </div>
            </div>
    </div>
    </form>
</div>
</div>