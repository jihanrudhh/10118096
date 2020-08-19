<?php

include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    $query = "SELECT * FROM t_mahasiswa WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if(!$result){
    die ("Query Error: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);

    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
        echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}  

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
    <h1>Data Mahasiswa : <?php echo $data['nim']; ?></h1>
    <center>
    <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
    <section class="base">
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
            <label>NIM</label>
            <input type="text" name="nim" value="<?php echo $data['nim']; ?>" autofocus="" required="" />
        </div>
        <div>
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>" autofocus="" required="" />
        </div>
        <div>
            <label>Tempat</label>
            <input type="text" name="tempat" value="<?php echo $data['tempat']; ?>" />
        </div>
        <div>
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" required=""value="<?php echo $data['tanggal_lahir']; ?>" />
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" required="" value="<?php echo $data['jenis_kelamin']; ?>"/>
        </div>
        <div>
            <label>No Telepon</label>
            <input type="text" name="no_telepon" required="" value="<?php echo $data['no_telepon']; ?>"/>    
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" name="alamat" required="" value="<?php echo $data['alamat']; ?>"/>    
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" required="" value="<?php echo $data['email']; ?>"/>    
        </div>
        <div>
        <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
    </form>
</body>
</html>