<!doctype html>
<html lang="ru">
<head>
<?php
$website_title = 'Registration on the site';
require 'bloks/head.php';
?>
</head>
<body>

<?php require 'bloks/header.php'; ?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h3>Registration</h3>
            <form action="reg/reg.php" method="post">
                <label for="username" class="mt-3">Your name</label>
                <input type="text" name="username" id="username" class="form-control">

                <label for="email" class="mt-3">Your email</label>
                <input type="email" name="email" id="email" class="form-control">

                <label for="login" class="mt-3">Your login</label>
                <input type="text" name="login" id="login " class="form-control">

                <label for="pass" class="mt-3">Your password</label>
                <input type="password" name="pass" id="pass" class="form-control">

                <button type="submit" class="btn btn-success mt-5">Sign up</button>
            </form>
        </div>
        <?php require 'bloks/aside.php'; ?>
    </div>
</main>

<?php require 'bloks/footer.php'; ?>

</body>
</html>

