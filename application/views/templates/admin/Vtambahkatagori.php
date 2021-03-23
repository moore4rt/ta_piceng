<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katagori</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('admin/datakatagori/tambah') ?>" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>Tambah Katagori</h4>
                </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_katagori"><br>
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="<?php echo base_url('admin/datakatagori/index') ?>" class="btn btn-danger"
                        style="color: white;">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>