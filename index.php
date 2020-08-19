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
table {
    border: solid 2px coral;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    height : 50%;
    margin: 20px auto 20px auto;
}
table thead th {
    background-color: bisque;
    border: solid 1px coral;
    color: black;
    padding: 10px;
    text-align: center;
    text-shadow: 1px 1px 1px white;
    text-decoration: none;
}
table tbody td {
    border: solid 1px coral;
    color: black;
    padding: 12px;
    text-shadow: 1px 1px 1px white;
}
a {
    background-color: salmon;
    color: white;
    padding: 10px;
    text-decoration: none;
    font-size: 16px;
}

</style>
</head>

<body>
    <center><h1>Data Mahasiswa</h1><center>
        <center><a href="tambah_data.php">+ &nbsp; Tambah Data</a><center>
    <br/>
    <table>
    <thead>
        <tr>
        <th>No</th>    
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Tempat</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>No Telepon</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php

      $query = "SELECT * FROM t_mahasiswa ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);

      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
     }


      $no = 1; 

      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nim']; ?></td>
          <td><?php echo $row['nama_mahasiswa']; ?></td>
          <td><?php echo $row['tempat']; ?></td>
          <td><?php echo $row['tanggal_lahir']; ?></td>
          <td><?php echo $row['jenis_kelamin']; ?></td>
          <td><?php echo $row['no_telepon']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['email']; ?></td>

          
          <td>
              <a href="edit_data.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++;
      }
      ?>
    </tbody>
    </table>
  </body>
</html>