<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Katagori</h6>
    </div>
    <div class="card-body">
        <?php foreach ($katagori as $kt) {?>
        <form action="<?php echo base_url('admin/datakatagori/update') ?>" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-lg">
                    <h4>Katagori</h4>
                </label>
                <div class="col-sm-5">
                    <input type="hidden" class="form-control" name="id_katagori" value="<?php echo $kt->id_katagori ?>">
                    <input type="text" class="form-control" name="nama_katagori"
                        value="<?php echo $kt->nama_katagori ?>">
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="<?php echo base_url('admin/datakatagori/index') ?>" class="btn btn-danger"
                        style="color: white;">Kembali</a>

                </div>
            </div>
        </form>
        <?php }?>
    </div>
</div>