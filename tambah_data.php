<?php
  include('koneksi.php'); 
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>AKADEMIK</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Data</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>NIM</label>
          <input type="text" name="nim" autofocus="" required="" />
        </div>
        <div>
          <label>Nama Mahasiswa</label>
          <input type="text" name="nama_mahasiswa" autofocus="" required="" />
        </div>
        <div>
            <label>Tempat</label>
          <input type="text" name="tempat" />
        </div>
        <div>
            <label>Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" required="" />
        </div>
        <div>
            <label>Jenis Kelamin</label>
          <input type="text" name="jenis_kelamin" required="" />
        </div>
        <div>
            <label>No Telepon</label>
          <input type="text" name="no_telepon" required="" />
        </div>
        <div>
            <label>Alamat</label>
          <input type="text" name="alamat" required="" />
        </div>
        <div>
            <label>Email</label>
          <input type="text" name="email" required="" />
        </div>
        <div>
          <button type="submit">Simpan Data</button>
        </div>
        </section>
      </form>
  </body>
</html>