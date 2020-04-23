<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url('/user/index') ?>" method="post">
        <div class="form-input">
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-input">
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" value="submit">login</button>
        <button type="reset" value="reset">batal</button>
    </form>
</body>

</html>