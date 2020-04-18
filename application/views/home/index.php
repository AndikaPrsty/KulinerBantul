<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <title>kulinerBantul</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav>
            <div class="logo">
                KuliBan
            </div>
            <div class="nav-search">
                <button class="fas fa-search"></button>
                <input type="text" placeholder="    search...">
            </div>
            <div class="nav-menu">
                <a class="fas fa-lg fa-home"></a>
                <a class="fas fa-lg fa-bell"></a>
                <a class="fas fa-lg fa-compass"></a>
                <a><img src="<?= base_url('/assets/img/default.jpg') ?>"></a>
            </div>
        </nav>
        <div class="content">
            <div class="post">POST..</div>
            <div class="event">EVENT...</div>
        </div>
        <img class="nav-img" src="<?= base_url('/assets/img/nav.jpg') ?>">
        <div class="nav-gradient"></div>
        <div class="mobile-menu">
            <a class="fas fa-lg fa-home"></a>
            <a class="fas fa-lg fa-bell"></a>
            <a class="fas fa-lg fa-compass"></a>
            <a><img src="<?= base_url('/assets/img/default.jpg') ?>"></a>
        </div>
    </div>
    <script>
        document.querySelector('.logo').addEventListener('click', () => {
            document.querySelector('.event').classList.toggle('show');
        });
    </script>
</body>

</html>