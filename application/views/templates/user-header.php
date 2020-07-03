<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <title>kulinerBantul</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <style>
        .sidebar {
            background: linear-gradient(to bottom,
			rgb(126, 161, 31),
			rgba(126, 161, 31, 0.616),
			rgb(126, 161, 31));
            display:flex;
            position:absolute;
            flex-direction:column;
            margin-top:-19px;
            height:100vh;
            width:150px;
            align-items:center;
        }
        .sidebar a {
            text-decoration:none;
            color:white;
            padding-top:30px;
        }
        .sidebar a:hover{
            opacity:0.5;
            transition:0.5s;
        }
    </style>
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
                    <a href="<?= base_url('user/') ?>"><img src="<?= $this->session->userdata('image') ?>"></a>
                    <a href="<?= base_url('user/logout') ?>" class="btn btn-secondary">logout</a>
                </div>
            <?php else : ?>
                <div>
                    <a href="<?= base_url('user/login') ?>" class="btn btn-secondary">login</a>
                    <a href="<?= base_url('user/daftar') ?>" class="btn btn-secondary">daftar</a>
                </div>
            <?php endif ?>
        </nav>
        <div class="nav-gradient"></div>
        <!-- end header -->