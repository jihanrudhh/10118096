<?php
include 'koneksi.php';

    $id               = $_POST['id'];
    $nim              = $_POST['nim'];
    $nama_mahasiswa   = $_POST['nama_mahasiswa'];
    $tempat           = $_POST['tempat'];
    $tanggal_lahir    = $_POST['tanggal_lahir'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $no_telepon       = $_POST['no_telepon'];
    $alamat           = $_POST['alamat'];
    $email            = $_POST['email'];



$query  = "UPDATE t_mahasiswa SET nim = '$nim', nama_mahasiswa  = '$nama_mahasiswa ', tempat = '$tempat', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', no_telepon = '$no_telepon', alamat = '$alamat', email = '$email'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    } else {
echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
}