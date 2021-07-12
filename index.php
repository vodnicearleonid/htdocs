<!doctype html>
<html lang="ru">
<head>
<?php
$website_title = 'PHP BLOG';
require 'bloks/head.php';
?>
</head>
<body>

<?php
require 'bloks/header.php';
?>

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

