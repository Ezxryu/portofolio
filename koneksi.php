<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'inception_db';

    $conn = mysqli_connect($hostname, $username , $password , $db_name) or die ('koneksi ke database gagal');
?>