<?php
include "koneksi.php";
$username = $_POST['username'];
$pass     = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * FROM t_admin WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $pass)
{
session_start();
$_SESSION['username'] = $row['username'];
$_SESSION['password'] = $row['password'];
  header('location:index.php'); //jika login berhasil, maka ganti/letakkan halaman utamamu disini
}else{
    echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='login.php';</script>";
}
?>