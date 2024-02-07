<?php
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASSWORD = '';
    $DATABASE_NAME = 'login-system';

    $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_NAME);

    if(mysqli_connect_error()) {
        exit("Connection with MySql Failed" . mysqli_connect_error());
    }
?>