<?= $this->extend('template/layout'); ?>
<?= $this->section('konten') ?>
<div class="konten">
    <div class="container">
        <h3 class="mt-3 text-uppercase fw-bold"><?= $mading['judul']; ?></h3>
        <hr>
        <img src="/images/<?= $mading['gambar']; ?>" class="card-img-top" height="400px" alt="<?= $mading['judul']; ?>" />
        <div class="m-3">
            <p> <?= $mading['isi']; ?></p>
        </div>
        <div class="card p-3 m-3">
            <h4 class="fw-bold">Komentar</h4>
            <form action="/komentar/save_komentar" method="POST" enctype="multipart/form-data">
                <div class="d-flex gap-4">
                    <input type="text" class="form-control " id="nama" name="nama" placeholder="Nama Lengkap">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    <input type="hidden" name="id_mading" id="id_mading" class="form-control" value="<?= $mading['id_mading']; ?>">
                </div>
                <textarea type="text" id="komentar" name="komentar" class="form-control mt-3 mb-2" placeholder="Isi Komentar" rows="3"></textarea>
                <button type="submit" class="btn btn-primary"> Kirim </button>
            </form>
        </div>
    </div>
</div>
</div>
</section <?= $this->endSection(); ?>