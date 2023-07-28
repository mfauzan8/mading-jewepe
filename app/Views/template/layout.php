<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- My CSS -->
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>JeWePe</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-default navbar-static-top" id="scroll-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('images/logo-jewepe.png'); ?>" class="rounded-circle" alt="logo" width="50" height="50">
                Sekolah Tinggi JeWePe</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#mading">Mading</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary " href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Mengambil Konten -->
    <?= $this->renderSection('konten'); ?>
    <!-- end konten -->

    <footer class=" bg-dark text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 text-primary"> © 2023 Copyright <a class="text-light" href="
									<?= base_url() ?>">Muhammad Fauzan </a>
        </div>
        <!-- Copyright -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </footer>

</html>