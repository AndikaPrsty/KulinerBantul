<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url('home/daftar') ?>" method="post" enctype="multipart/form-data">
        <?= validation_errors() ?>
        <div class="form-input">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div class="form-input">
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-input">
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-input">
            <label for="password2">password</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div class="form-input">
            <label for="gambar">gambar</label>
            <input type="file" name="gambar" id="gambar">
            <progress class="progress" value="0"></progress>
        </div>
        <div class="form-input">
            <label for="tanggal">tanggal</label>
            <input type="date" name="tanggal" id="tanggal">
        </div>
        <div class="form-input">
            <label for="telp">telp</label>
            <input type="number" name="telp" id="telp">
        </div>

        <button type="submit" class="submit" value="submit">daftar</button>
        <button type="reset" value="reset">batal</button>
    </form>
    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase.js"></script>
    <script src="<?= base_url('/assets/js/daftar.js') ?>"></script>
</body>

</html>