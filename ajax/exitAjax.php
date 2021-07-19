<?php
    //setcookie('log', $_POST['login'], time() - 3600 * 24 * 30, "/");
    //$login = $_POST['login'];

    setcookie('log', $login, time() - 3600 * 24 * 30, "/");
    echo true;

?>