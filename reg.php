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
            <form action="" method="post">
                <label for="username" class="mt-3">Your name</label>
                <input type="text" name="username" id="username" class="form-control">

                <label for="email" class="mt-3">Your email</label>
                <input type="email" name="email" id="email" class="form-control">

                <label for="login" class="mt-3">Your login</label>
                <input type="text" name="login" id="login" class="form-control">

                <label for="pass" class="mt-3">Your password</label>
                <input type="password" name="pass" id="pass" class="form-control">

                <div class=" mt-3 alert alert-danger" id="errorBlock"></div>
                <button type="button" id="reg_user" class="btn btn-success mt-3">Sign up</button>
            </form>
        </div>
        <?php require 'bloks/aside.php'; ?>
    </div>
</main>

<?php require 'bloks/footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    //primim datele din forma
    $('#reg_user').click(function () {
        var username = $('#username').val();
        var email = $('#email').val();
        var login = $('#login').val();
        var pass = $('#pass').val();

        //ajac query
        $.ajax({
            url: 'ajax/regAjax.php',
            type: 'POST',
            cache: false,
            data: {'username' : username, 'email' : email, 'login' : login, 'pass' : pass},
            dataType: 'html',
            success: function (data) {
                if (data == 'Ready'){
                    $('#reg_user').text('Ready finished');
                    $('#errorBlock').hide();
                } else {
                    $('#errorBlock').show(); // afisarea eroroii
                    $('#errorBlock').text(data); //afisarea erorii
                }
            }
        });

    });
</script>

</body>
</html>

