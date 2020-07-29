<?php
session_start();
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Anggota</title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="login">
      <div class="left">
          
      </div>
      <div class="right">
          <h1>Login Anggota</h1>
          <form method="POST">
              <input type="text" name="nis" placeholder="Masukan NIS" />
              <input type="password" name="password" placeholder="Password"/>
              
              <input type="submit" name="login" value="login"/>
          </form>
      </div>
    </div>
    <?php
			if (isset($_POST['login'])) {
				$nis = $_POST["nis"];
				$password = $_POST["password"];
      		//lakukan cek query akun pelanggan di db
				$ambil = $koneksi->query("SELECT * FROM tbl_anggota
      			WHERE nis='$nis' AND password='$password'");

      		//ngitung akun yg terambil
				$akunyangcocok = $ambil->num_rows;

      		//jika akun cocok maka akan login
				if ($akunyangcocok == 1) {
      			//anda sudah login
      			//mendapatkan akun dengan array
					$akun = $ambil->fetch_assoc();
      			//simpan disession 
					$_SESSION["anggota"] = $akun;
					echo "<script>alert('login berhasil');</script>";
					echo "<script>location='../views/anggota/index.php';</script>";
				} else {
      			//anda gagal login
					echo "<script>alert('anda gagal login, periksa akun anda');</script>";
					echo "<script>location='anggota.php';</script>";
				}
			}
			?>
</body>
</html>