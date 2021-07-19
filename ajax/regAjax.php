<?php

$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($username) <= 3) {
    $error = 'Enter the name';
}elseif (strlen($email) <= 3) {
    $error = 'Enter the email';
}elseif (strlen($login) <= 3) {
    $error = 'Enter the login';
}elseif (strlen($pass) <= 3) {
    $error = 'Enter the password';
}
if ($error != '') {
    echo $error;
    exit();
}


$salt = '@mUkUW42y^nyHUS4nmtR*5?rP-m4r9zj+w8tQZ=kc4y^K5Fd6%dFtpf3PYz%QFr?';
$encrypted_password = md5($pass . $salt);

require_once '../Connect_to_PostgreSQL_Database.php';

$result = pg_query($db, "INSERT INTO users (username, email, login, pass)
                                                    VALUES ('$username', '$email', '$login', '$encrypted_password');");
echo 'Ready';

pg_close($db);

?>