<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/login.css') ?>">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div style="flex-direction: column;align-items:center" class="logo">
                <h1>Login Page</h1>
                <?= $this->session->flashdata('message') ?>
            </div>
            <div class="form-box">
                <form action="<?= base_url('/user/login') ?>" method="post">
                    <div class="form-input">
                        <label for="email">email</label>
                        <input type="email" name="email" id="email">
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-input">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password">
                        <?= form_error('password') ?>
                    </div>
                    <div class="form-button">
                        <button type="reset" onclick="window.location.href = '<?= base_url() ?>'" class="reset" value="reset">batal</button>
                        <button type="submit" class="submit" value="submit">login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>