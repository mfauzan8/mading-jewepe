<?= $this->extend('admin/template/layout_admin'); ?>

<?= $this->section('kontenadmin') ?>
<div class="container-fluid">
    <h3>Halaman Dashboard, Hallo <?php echo session()->get('username') ?></h3>
    <div class="garis-primary"></div>
    <hr>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= $mading; ?></h3>
                    <p>Total Mading</p>
                </div>
                <div class="icon">
                    <i class="bi bi-card-text"></i>
                </div>
                <a href="/profile" class="small-box-footer">
                    Selengkapnya <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= $komentar; ?></h3>
                    <p>Total Komentar</p>
                </div>
                <div class="icon">
                    <i class="bi bi-chat-left-dots"></i>
                </div>
                <a href="/skema" class="small-box-footer">
                    Selengkapnya <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>

    </div>
</div>
</div>
<?= $this->endSection(); ?>