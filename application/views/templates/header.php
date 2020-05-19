<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <title>kulinerBantul</title>
    <link rel="stylesheet" href="<?= base_url('/assets/bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/fontawesome-free/css/all.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/assets/leaflet/leaflet.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/croppie/croppie.css') ?>">
    <script src="<?= base_url('/assets/croppie/croppie.js') ?>"></script>
    <script src="<?= base_url('/assets/leaflet/leaflet.js') ?>"></script>

</head>

<body>
    <div class="containerr">
        <nav>
            <div onclick="window.location.href = '<?= base_url(); ?>'" class="logo">
                KuliBan
            </div>
            <div class="nav-search">
                <button class="fas fa-search"></button>
                <input type="text" placeholder="    search...">
            </div>
            <?php if ($this->session->userdata('email')) : ?>
                <div class="nav-menu">
                    <div class="dropdown">
                        <button><i class="fas fa-folder-plus"></i> Posting</button>
                        <div class="dropdown-menu">
                            <a href="<?= base_url('/post/tambah_tempat_kuliner') ?>">Tempat kuliner</a>
                            <a href="<?= base_url('/post/tambah_event') ?>">Event kuliner</a>
                        </div>
                    </div>
                    <a onclick="window.location.href = '<?= base_url(); ?>'" class="fas fa-lg fa-home"></a>
                    <a class="fas fa-lg fa-bell"></a>
                    <a class="fas fa-lg fa-compass"></a>
                    <a><img src="<?= $this->session->userdata('image') ?>"></a>
                </div>
            <?php else : ?>
                <div>
                    <a href="<?= base_url('user') ?>" class="btn btn-secondary">login</a>
                    <a class="btn btn-secondary">daftar</a>
                </div>
            <?php endif ?>
        </nav>
        <div class="nav-gradient"></div>
        <!-- end header -->