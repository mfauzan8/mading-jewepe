<?= $this->extend('admin/template/layout_admin'); ?>

<?= $this->section('kontenadmin') ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between w-98">
        <h3>Data Komentar</h3>
    </div>
    <div class="garis-primary"></div>
    <hr>
    <table class="table table-bordered">
        <thead class="thead-light text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Isi komentar</th>
                <th scope="col">ID Mading</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($komentar as $k) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $k['nama']; ?></td>
                    <td><?= $k['email']; ?></td>
                    <td class="col-6"><?= $k['komentar']; ?></td>
                    <td><?= $k['id_mading']; ?></td>
                    <td>
                        <form action="/komentar/<?= $k['id_komentar']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin Dihapus?');"><i class="bi bi-trash3"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</div>

<?= $this->endSection(); ?>