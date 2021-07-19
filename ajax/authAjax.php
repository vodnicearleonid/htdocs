<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($login) <= 3) {
    $error = 'Enter the login';
}elseif (strlen($pass) <= 5) {
    $error = 'Enter the password';
}
if ($error != '') {
    echo $error;
    exit();
}

$salt = '@mUkUW42y^nyHUS4nmtR*5?rP-m4r9zj+w8tQZ=kc4y^K5Fd6%dFtpf3PYz%QFr?';
$encrypted_password = md5($pass . $salt);

require_once '../Connect_to_PostgreSQL_Database.php';

$result = pg_query($db, " SELECT id FROM users WHERE login = '$login' AND pass = '$encrypted_password' ");
$arr = pg_fetch_all($result);

    setcookie('log', $login, time() + 3600 * 24 * 30, "/");
    echo 'ok';
}

pg_close($db);
?>