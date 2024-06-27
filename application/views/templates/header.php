<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> <?= $title; ?> | PPID DINKES Kota cimahi</title>

    <!-- Bootstrap CSS -->
    <link href="<?= site_url(); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="180x180" href="<?= base_url(); ?>assets/images/logofavicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/images/logofavicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/images/logofavicon.png">

    <!-- boostrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.css">

    <!-- mycss -->
    <link href="<?= base_url(); ?>assets/css/myCss.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/styleKu.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/fontello/css/fontello.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/fonts.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="assets/css/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/media-queries.css"> -->

    <!-- data tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>





</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand h2" href="#">
                <img src="<?= base_url(); ?>assets/images/ppid.png" alt="" style="width:80px;" class="d-inline-block align-text-top">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href=" <?php echo site_url('beranda'); ?>">Beranda</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href=" <?php echo site_url('regulasi'); ?>">Regulasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi publik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href=" <?php echo site_url('InformasiPublikBerkala'); ?>">Informasi publik secara berkala</a></li>
                            <li><a class="dropdown-item" href=" <?php echo site_url('InformasiPublikSS'); ?>">informasi publik setiap saat</a></li>
                            <li><a class="dropdown-item" href=" <?php echo site_url('InformasiPublikSM'); ?>">informasi publik serta merta</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('P_informasi'); ?>">Permohonan informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('FAQ'); ?>">FAQ</a>
                    </li>
                    <!-- <li class="log">
                        <button type="button" class="btn btn-success" href="#">Login</button>
                    </li> -->
            </div>
        </div>


    </nav>
    <!-- akhir navar -->