<?= $this->extend('admin/template/layout_admin'); ?>

<?= $this->section('kontenadmin') ?>
<div class="container-fluid">
    <h3>Tambah Mading </h3>
    <div class="garis-primary"></div>
    <hr>
    <div class="card col-sm-6 mx-auto shadow">
        <form action="/mading/save" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                <div class="col-sm-9">
                    <input type="text" name="judul" class="form-control 
                    <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" value="<?= old('judul'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="judul" class="col-sm-3 col-form-label">Penulis</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_admin" class="form-control" value="<?php echo session()->get('username') ?>" disabled>
                        <input type="hidden" name="id_admin" class="form-control" value="<?php echo session()->get('id_admin') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="isi" class="col-sm-3 col-form-label">Isi Mading</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="isi" class="form-control <?= ($validation->hasError('isi')) ? 'is-invalid' : ''; ?>">
								<?= old('isi'); ?>
							</textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('isi'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9 custom-file">
                        <input type="file" id="gambar" name="gambar" class="custom-file-input 
                        <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" value="<?= old('gambar'); ?>" onchange="previewImage()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('gambar'); ?>
                        </div>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="ml-3">
                    <button type="submit" class="btn btn-primary"> Save </button>
                    <button type="reset" class="btn btn-danger"> Reset </button>
                    <a href="<?= base_url('mading') ?>" class="btn btn-warning"> Back </a>
                </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>