<?php 
include 'header.php';
?>
    <div class="container">

            <h3>Tambah Data Anggota</h3>
            <form method="post" enctype="multipart/form-data">

                <label><span class="black-text">NIS</span></label>
                <input type="text" name="nis">

                <label><span class="black-text">Nama Lengkap</span></label>
                <input type="text" name="nama">

                <label><span class="black-text">Password</span></label>
                <input type="text" name="password">

                <label><span class="black-text">Tempat Lahir</span></label>
                <input type="text" name="tempat">

                <label><span class="black-text">Tanggal Lahir</span></label>
                <input type="text" name="tanggal" placeholder="0000/00/00">

                 <div class="input-field">
                    <select name="kelamin" id="" class="input">
                        <option value="" disable selected >Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select> 
                    <label for=""><span class="black-text">Jenis Kelamin</span></label>
                </div>

                <div class="input-field">
                    <select name="jurusan" id="" class="input">
                        <option value="" disable selected >Program Studi</option>
                        <option value="AP">Administrasi Perkantoran</option>
                        <option value="MM">Multimedia</option>
                        <option value="PM">Pemasaran</option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                    </select> 
                    <label for=""><span class="black-text">Program Studi/Jurusan</span></label>
                </div>

                <label><span class="black-text">Tahun Masuk</span></label>
                <input type="text" name="tahun">

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

            $ambil = $koneksi->query("SELECT * FROM tbl_anggota WHERE nis='$nis'");
            $yangcocok = $ambil->num_rows;
            //jika ada nis yang cocok maka tambah data akan gagal 
            if ($yangcocok == 1) {
                echo "<script>alert('pendaftaran gagal, nis sudah terdaftar');</script>";
                echo "<script>location='tambahanggota.php'</script>";
            } else {
                //query insert kedatabase
                $koneksi->query("INSERT INTO tbl_anggota(nis,nama_anggota,password,tempat_lahir,tgl_lahir,jk,prodi,thn_masuk)VALUES('$nis','$nama','$pas','$tempat','$tanggal','$kelamin','$jurusan','$tahun')");
                echo "<script>alert('data anggota disimpan');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='anggota.php';</script>";
            }
        }
        ?>
<?php 
include 'footer.php';
?>