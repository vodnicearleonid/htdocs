<!doctype html>
<html lang="ru">
<head>
    <?php
    $website_title = 'Authentication on the site';
    require 'bloks/head.php';
    ?>
</head>
<body>

<?php require 'bloks/header.php'; ?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <?php
                if ($_COOKIE['log'] == ''):
            ?>
            <h3>Authentication on the site</h3>
            <form action="" method="post">
                <label for="login" class="mt-3">Your login</label>
                <input type="text" name="login" id="login" class="form-control">

                <label for="pass" class="mt-3">Your password</label>
                <input type="password" name="pass" id="pass" class="form-control">

                <div class=" mt-3 alert alert-danger" id="errorBlock"></div>
                <button type="button" id="authentication_user" class="btn btn-success mt-3">Authentication</button>
            </form>
            <?php
                else:
            ?>
                <h3><?=$_COOKIE['log']?></h3> <!-- if the cookie is not empty we display the username -->
                <button class="btn btn-danger id="exit_btn">Exit</button>
            <?php
                endif;
            ?>
        </div>
        <?php require 'bloks/aside.php'; ?>
    </div>
</main>

<?php require 'bloks/footer.php'; ?>

<script src="https://ajax.googleapis.c om/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    //primim datele din forma
    $('#exit_btn').click(function () {
        $.ajax({
            url: '/ajax/exitAjax.php',
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'html',
            success: function (data) {
            document.location.reload(true); //actualizarea paginei de browser
            }
        });
    });
</script>

</body>
</html>

