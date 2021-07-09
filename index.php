<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php Blog</title>
    <link rel="stylesheet" href="/htdocs/styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="/htdocs/styles/css/main.css">
    <link rel="icon" href="/htdocs/img/favicon.ico">
</head>
<body>

<?php require 'bloks/header.php'; ?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h3 class="mb-3">The main part</h3>
        </div>
        <?php require 'bloks/aside.php'; ?>
    </div>
</main>

<?php require 'bloks/footer.php'; ?>

</body>
</html>

