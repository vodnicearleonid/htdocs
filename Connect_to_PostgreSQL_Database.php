<?php
    $host = 'host = localhost';
    $port = 'port = 5432';
    $dbname = 'dbname = postgres';
    $credentials = 'user = postgres password=sherlock';
    $db = pg_connect("$host $port $dbname $credentials");
?>