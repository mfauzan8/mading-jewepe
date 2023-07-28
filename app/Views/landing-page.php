<?= $this->extend('template/layout'); ?>
<?= $this->section('konten') ?>
<div class="konten">
    <div class="hero d-flex justify-content-center align-items-center">
        <img src="<?php echo base_url('images/image-home.png'); ?>" alt="logo">
        <div>
            <h2>Mading Online</h2>
            <h1><b>Sekolah Tinggi JeWePe</b></h1>
            <h6>Merupakan media komunikasi untuk dapat memberikan informasi kepada peserta didik</h6>
        </div>
    </div>

    <section id="mading">
        <div class="container">
            <h3 class="m-3">MADING</h3>
            <hr>
            <div class="content">
                <?php foreach ($mading as $m) : ?>
                    <a href="detail/<?= $m['id_mading']; ?>" class="text-decoration-none text-dark">
                        <div class="card m-3">
                            <img src="/images/<?= $m['gambar']; ?>" class="card-img-top" alt="<?= $m['judul']; ?>" />
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $m['judul']; ?></h5>
                                <p class="card-text"> <?= $m['isi']; ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
</section <?= $this->endSection(); ?>