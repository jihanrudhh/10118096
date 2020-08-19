<?php
$dbhost = 'localhost:3307';
$dbuser = 'root';
$dbpass = '';
$dbname = 'akademik'; //sesuai nama databasemu//
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>