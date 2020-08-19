<?php

include 'koneksi.php';

    $nim              = $_POST['nim'];
    $nama_mahasiswa   = $_POST['nama_mahasiswa'];
    $tempat           = $_POST['tempat'];
    $tanggal_lahir    = $_POST['tanggal_lahir'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $no_telepon       = $_POST['no_telepon'];
    $alamat           = $_POST['alamat'];
    $email            = $_POST['email'];



    $query = "INSERT INTO t_mahasiswa (nim, nama_mahasiswa, tempat, tanggal_lahir, jenis_kelamin, no_telepon, alamat, email) VALUES ('$nim', '$nama_mahasiswa', '$tempat', '$tanggal_lahir', '$jenis_kelamin', '$no_telepon', '$alamat', '$email')";
    $result = mysqli_query($koneksi, $query);


    if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    }

    ?>