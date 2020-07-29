<?php 
include 'header.php';
?>
    <div class="container">
            <h3>Tambah Data Admin</h3>
            <form method="post" enctype="multipart/form-data">
                <label><span class="black-text">Nama Admin</span></label>
                <input type="text" name="nama">

                <label><span class="black-text">Username</span></label>
                <input type="text" name="username">

                <label><span class="black-text">Password</span></label>
                <input type="text" name="password">

                <input type="submit" name="simpan" value="SIMPAN" class="btn blue">
            </form>
        </div>
        <?php
        if (isset($_POST['simpan'])) {


                //ambil data input
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];


            $ambil = $koneksi->query("SELECT * FROM tbl_admin WHERE username='$username'");
            $yangcocok = $ambil->num_rows;
                //memeriksa username sudah digunakan atau belum
            if ($yangcocok == 1) {
                echo "<script>alert('pendaftaran gagal, username sudah digunakan silahkan pakai username yang lain');</script>";
                echo "<script>location='tambahadmin.php'</script>";
            } else {
                    //query insert kedatabase
                $koneksi->query("INSERT INTO tbl_admin(username,password,nama_admin) VALUES ('$username','$password','$nama')");
                echo "<script>alert('selamat pendaftaran berhasil');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='admin.php'</script>";
            }
        }
        ?>
<?php 
include 'footer.php';
?>