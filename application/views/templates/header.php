<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <title>kulinerBantul</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/fontawesome-free/css/all.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Pacifico&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url('/assets/css/openlayers/ol.css') ?>"> -->
    <!-- <script src="<?= base_url('/assets/css/openlayers/ol.js') ?>"></script> -->
    <link rel="stylesheet" href="<?= base_url('/assets/leaflet/leaflet.css') ?>">
    <script src="<?= base_url('/assets/leaflet/leaflet.js') ?>"></script>

</head>

<body>
    <div class="container">
        <nav>
            <div onclick="window.location.href = '<?= base_url(); ?>'" class="logo">
                KuliBan
            </div>
            <div class="nav-search">
                <button class="fas fa-search"></button>
                <input type="text" placeholder="    search...">
            </div>
            <div class="nav-menu">
                <div class="dropdown">
                    <button><i class="fas fa-folder-plus"></i> Posting</button>
                    <div class="dropdown-menu">
                        <a href="<?= base_url('/post/tambah_tempat_kuliner') ?>">Tempat kuliner</a>
                        <a href="">Event kuliner</a>
                    </div>
                </div>
                <a onclick="window.location.href = '<?= base_url(); ?>'" class="fas fa-lg fa-home"></a>
                <a class="fas fa-lg fa-bell"></a>
                <a class="fas fa-lg fa-compass"></a>
                <a><img src="<?= base_url('/assets/img/default.jpg') ?>"></a>
            </div>
        </nav>
        <div class="nav-gradient"></div>
        <!-- end header -->