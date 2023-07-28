<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My CSS -->
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>Admin-JeWePe</title>
</head>

<body>
    <div class="wrap-admin">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/" class="text-center text-white text-decoration-none">
                <h5>Sekolah Tinggi</h5>
                <h4>JeWePe</h4>
            </a>
            <div class="garis-secondary"></div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link text-white" aria-current="page">
                        <i class="bi bi-speedometer2 "></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/mading" class="nav-link text-white" aria-current="page">
                        <i class="bi bi-card-text"></i>
                        Kelola Mading
                    </a>
                </li>
                <li>
                    <a href="/komentar" class="nav-link text-white">
                        <i class="bi bi-chat-left-dots"></i>
                        Kelola Komentar
                    </a>
                </li>
            </ul>
            <hr>
            <div class="logout">
                <a href="<?php echo site_url('auth/logout') ?>" class="btn btn-primary btn-block">
                    <i class=" bi bi-box-arrow-right"></i> Log out
                </a>
            </div>
        </div>

        <div id="main" class="w-100 mt-3">

            <!-- Mengambil Konten -->
            <?= $this->renderSection('kontenadmin'); ?>
            <!-- end konten -->

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>