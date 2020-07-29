<?php 
include 'header.php';
?>
    <div class="container">
            <?php
            $ambil = $koneksi->query("SELECT * FROM tbl_anggota WHERE nis='$_GET[nis]'");
            // memecahdata dari variable $ambil
            $pecah = $ambil->fetch_assoc();
            ?>
            <h3>Ubah Data</h3>
            <form method="post" enctype="multipart/form-data">

                <label><span class="black-text">NIS</span></label>
                <input type="text" name="nis" value="<?php echo $pecah['nis']; ?>">

                <label><span class="black-text">Nama Lengkap</span></label>
                <input type="text" name="nama"  value="<?php echo $pecah['nama_anggota']; ?>">

                <label><span class="black-text">Password</span></label>
                <input type="text" name="password"  value="<?php echo $pecah['password']; ?>">

                <label><span class="black-text">Tempat Lahir</span></label>
                <input type="text" name="tempat"  value="<?php echo $pecah['tempat_lahir']; ?>">

                <label><span class="black-text">Tanggal Lahir</span></label>
                <input type="text" name="tanggal" value="<?php echo $pecah['tgl_lahir']; ?>">

                 <div class="input-field">
                    <select name="kelamin" id="" class="input">
                        <option value="<?php echo $pecah['jk']; ?>" ><?= $pecah['jk'] ?></option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select> 
                    <label for=""><span class="black-text">Jenis Kelamin</span></label>
                </div>

                <div class="input-field">
                    <select name="jurusan" id="" class="input">
                        <option value="<?php echo $pecah['prodi']; ?>"><?= $pecah['prodi'] ?></option>
                        <option value="AP">Administrasi Perkantoran</option>
                        <option value="MM">Multimedia</option>
                        <option value="PM">Pemasaran</option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                    </select> 
                    <label for=""><span class="black-text">Program Studi/Jurusan</span></label>
                </div>

                <label><span class="black-text">Tahun Masuk</span></label>
                <input type="text" name="tahun" value="<?php echo $pecah['thn_masuk']; ?>">

                 <input type="submit" name="simpan" value="SIMPAN" class="btn blue">
                </div>
            </form>
        </div>
        <?php
        if (isset($_POST['simpan'])) {

            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $tempat = $_POST['tempat'];
            $tanggal = $_POST['tanggal'];
            $kelamin = $_POST['kelamin'];
            $jurusan = $_POST['jurusan'];
            $tahun = $_POST['tahun'];
            $pas = $_POST['password'];

            $koneksi->query("UPDATE tbl_anggota SET nis='$nis',nama_anggota='$nama',password='$pas',tempat_lahir='$tempat',tgl_lahir='$tanggal',jk='$kelamin',prodi='$jurusan' ,thn_masuk='$tahun'  WHERE nis='$_GET[nis]'");

            echo "<script>alert('data anggota disimpan');</script>";
            echo "<meta http-equiv='refresh'>";
            echo "<script>location='anggota.php';</script>";
        }
        ?>
<?php 
include 'footer.php';
?>