<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
    </div>
    <div class="card-body">
        <?php foreach ($produk as $pr) {?>
        <form action="<?php echo base_url('admin/dataproduk/update') ?>" method="post">
            <label class="col-sm-2 col-form-label col-form-label-lg">
                <h4>Nama Produk</h4>
            </label>
            <div class="col-sm-5">
                <input type="hidden" class="form-control" name="id_produk" value="<?php echo $pr->id_produk ?>">
                <input type="text" class="form-control" name="nama_produk" value="<?php echo $pr->nama_produk ?>"><br>
            </div>
            <div class=" col-sm-3">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?php echo base_url('admin/dataproduk/index') ?>" class="btn btn-danger"
                    style="color: white;">Kembali</a>
            </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-lg">
            <h4>Harga</h4>
        </label>
        <div class="col-sm-5">
            <input type="number" class="form-control" name="harga" value="<?php echo $pr->harga ?>"><br>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-lg">
            <h4>Gambar</h4>
        </label>
        <div class="col-sm-5">
            <input type="file" class="form-control" name="image" value="<?php echo $pr->image ?>"><br>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-lg">
            <h4>Katagori</h4>
        </label>
        <div class="col-sm-5">
            <select name="id_kelas" id="id_kelas" class="form-control">
                <option value="">-- Pilih Katagori --</option>
                <?php foreach ($katagori as $kt): ?>
                <?php if ($kt->id_katagori == $pr->id_katagori): ?>
                <option value="<?php echo $kt->id_katagori ?>" selected><?php echo $kt->nama_katagori ?>
                </option>
                <?php else: ?>
                <option value="<?php echo $kt->id_katagori ?>" ><?php echo $kt->nama_katagori ?>
                </option>
                <?php endif;?>
                <?php endforeach?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-lg">
            <h4>dekrepsi</h4>
        </label>
        <div class="col-sm-5">
            <textarea class="form-control" name="dekrepsi"><?php echo $pr->dekrepsi ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-lg">
            <h4>Stok</h4>
        </label>
        <div class="col-sm-5">
            <input type="number" class="form-control" name="stok" value="<?php echo $pr->stok ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-lg">
            <h4>Pilih Ukuran</h4>
        </label>
        <div class="col-sm-5">
            <input type="radio" id="ukuran" name="ukuran" value="<?php echo $pr->ukuran ?>" <?php if($pr->ukuran == "M"){ echo "checked='checked'"; } ?>>
            <label>M</label>
            <input type="radio" id="ukuran" name="ukuran" value="<?php echo $pr->ukuran ?>" <?php if($pr->ukuran == "L"){ echo "checked='checked'"; } ?>>
            <label>L</label>
            <input type="radio" id="ukuran" name="ukuran" value="<?php echo $pr->ukuran ?>" <?php if($pr->ukuran == "XL"){ echo "checked='checked'"; } ?>>
            <label>XL</label>
            <input type="radio" id="ukuran" name="ukuran" value="<?php echo $pr->ukuran ?>" <?php if($pr->ukuran == "XXL"){ echo "checked='checked'"; } ?>>
            <label>XXL</label>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-lg">
            <h4>Pilih Warna</h4>
        </label>
        <div class="col-sm-5">
            <input type="radio" id="warna" name="warna" value="Hitam" <?php if($pr->warna == "Hitam"){ echo "checked='checked'"; } ?>>
            <label>Hitam</label>
            <input type="radio" id="warna" name="warna" value="Abu-abu" <?php if($pr->warna == "Abu-abu"){ echo "checked='checked'"; } ?>>
            <label>Abu-abu</label>
            <input type="radio" id="warna" name="warna" value="Putih" <?php if($pr->warna == "Putih"){ echo "checked='checked'"; } ?>>
            <label>Putih</label>
            <input type="radio" id="warna" name="warna" value="Biru" <?php if($pr->warna == "Biru"){ echo "checked='checked'"; } ?>>
            <label>Biru</label>
        </div>
    </div>
</div>
</form>
</div>
<?php }?>
</div>