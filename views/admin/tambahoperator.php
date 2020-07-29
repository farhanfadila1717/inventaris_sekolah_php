<?php 
include 'header.php';
?>
    <div class="container">
            <h3>Tambah Data Operator</h3>
            <form method="post" enctype="multipart/form-data">
                <label><span class="black-text">Nama Operator</span></label>
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


            $ambil = $koneksi->query("SELECT * FROM tbl_operator WHERE username='$username'");
            $yangcocok = $ambil->num_rows;
                //memeriksa username sudah digunakan atau belum
            if ($yangcocok == 1) {
                echo "<script>alert('pendaftaran gagal, username sudah digunakan silahkan pakai username yang lain');</script>";
                echo "<script>location='tambahoperator.php'</script>";
            } else {
                    //query insert kedatabase
                $koneksi->query("INSERT INTO tbl_operator(username,password,nama_operator) VALUES ('$username','$password','$nama')");
                echo "<script>alert('selamat pendaftaran berhasil');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='operator.php'</script>";
            }
        }
        ?>
<?php 
include 'footer.php';
?>