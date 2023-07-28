<?= $this->extend('admin/template/layout_admin'); ?>

<?= $this->section('kontenadmin') ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between w-98">
        <h3>Data Mading</h3>
        <a href="/mading/tambah_mading" class="btn btn-primary"> Tambah Mading</a>
    </div>
    <div class="garis-primary"></div>
    <hr>
    <table class="table table-bordered">
        <thead class="thead-light text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi Mading</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($mading as $m) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><img style="height: 100px;" src="/images/<?= $m['gambar']; ?>"></td>
                    <td><?= $m['judul']; ?></td>
                    <td class="col-6"><?= $m['isi']; ?></td>
                    <td>
                        <form action="/mading/<?= $m['id_mading']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger"
                             onclick="return confirm('Apakah anda yakin Dihapus?');"><i class="bi bi-trash3"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>

<?= $this->endSection(); ?>