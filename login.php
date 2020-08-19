<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style type="text/css">
* {
    padding: 0;
    margin: 0;
}
body {
    font-family: arial;
    background: bisque;
}
#container {
    padding: 15px;
}
.login {
    padding: 1em;
    margin: 2em auto;
    width: 17em;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.19);
    border-radius: 20px;
    background: coral;
    border-radius: 15px;
}
.login h1, p {
    text-align: center;
    padding-bottom: 20px;
}

label {
    font-size: 10pt;
    color: black;
}

input[type="text"],
input[type="password"],
textarea {
    padding: 8px;
    width: 95%;
    background:white;
    border: 0;
    font-size: 10pt;
    margin: 6px 0px;
}

.tombol {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.19);
    border-radius: 20px;
    background: white;
    color: black;
    border: 0;
    padding: 10px 15px;
    margin: 20px 100px;
    border-radius: 20px;
    cursor: pointer;
}
.tombol:hover {
    color: red;
}

</style>
</head>

<body>
<?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
    }
    }

?>
<div id="container">
    <div class="login">
        <h1>Login</h1>
        <p>Masuk Terlebih Dahulu !</p>
        <form action="auth.php" method="post" onSubmit="return validasi()">
            <div>
                <label>Username:</label>
                <input type="text" name="username" id="username" />
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" id="password" />
            </div>  
            <div>
                <input type="submit" value="Login" class="tombol">
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" src="login.js"></script>

</body>
</html>