<div class="container" style="margin-top: 150px; margin-bottom: 150px;">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Input Pemain
                </div>
                <div class="card-body">
                    <form action="<?php base_url('Produk/add') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Pemain</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Usia</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Role</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Gaji</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tim</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="img">Picture</label><br>
                            <input type="file" name="userfile[]" multiple="multiple" size="20" required>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Pemain</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
