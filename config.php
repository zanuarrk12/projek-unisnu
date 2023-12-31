<?php
    $host = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = 'database';

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn){
        die("Koneksi database gagal: ".mysqli_connect_error());
    }
?>