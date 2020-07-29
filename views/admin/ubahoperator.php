<?php 
include 'header.php';
?>
    <?php
            // ambil data admin berdasarkan id_admin
    $ambil = $koneksi->query("SELECT * FROM tbl_operator WHERE id_operator='$_GET[id]'");
            // memecahdata dari variable $ambil
    $pecah = $ambil->fetch_assoc();
    ?>
        <div class="container">
            <h3>Ubah Data Operator</h3>
            <form method="post" enctype="multipart/form-data">
                <label><span class="black-text">Nama Lengkap</span></label>
                <input type="text" name="nama" value="<?php echo $pecah['nama_operator']; ?>">

                <label><span class="black-text">Username</span></label>
                <input type="text" name="username" value="<?php echo $pecah['username']; ?>">

                <label><span class="black-text">Password</span></label>
                <input type="text" name="password" value="<?php echo $pecah['password']; ?>">

                <input type="submit" name="simpan" value="SIMPAN" class="btn blue">
            </form>
        </div>
            <?php
            if (isset($_POST['simpan'])) {
                //ambil data input
                $nama = $_POST['nama'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                // mengubah data berdasarkan id operator yang dipilih
                $koneksi->query("UPDATE tbl_operator SET nama_operator='$nama',username='$username',password='$password' WHERE id_operator='$_GET[id]'");

                echo "<script>alert('data operator telah dirubah');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='operator.php';</script>";
            }
            ?>
<?php 
include 'footer.php';
?>