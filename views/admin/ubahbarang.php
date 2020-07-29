<?php 
include 'header.php';
?>  
<?php
            // ambil data barang berdasarkan id_barang
$ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='$_GET[id]'");
            // memecahdata dari variable $ambil
$pecah = $ambil->fetch_assoc();
?>
    <div class="container">
            <h3>Ubah Data Barang</h3>
            <form method="post" enctype="multipart/form-data">
                <label><span class="black-text">Nama Barang</span></label>
                <input type="text" name="nama" value="<?php echo $pecah['nama_barang']; ?>">

                <label><span class="black-text">Jumlah Barang</span></label>
                <input type="number" name="jumlah" value="<?php echo $pecah['jumlah_barang']; ?>">

                <div class="input-field">
                    <select name="kategori" id="" class="input">
                        <option value="<?php echo $pecah['kategori']; ?>" disable selected ><?php echo $pecah['kategori'] ?></option>
                        <option value="Alat Elektronik">Alat Elektronik</option>
                        <option value="Alat Sekolah">Alat Sekolah</option>
                        <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                        <option value="ATK">Alat Tulis Kantor</option>
                    </select> 
                    <label for=""><span class="black-text">Kategori Barang</span></label>
                </div>

                <label><span class="black-text">Spesifikasi Barang</span></label>
                <input type="text" name="spek" value="<?php echo $pecah['spek']; ?>">

                <label><span class="black-text">Tahun Beli</span></label>
                <input type="text" name="tahun" value="<?php echo $pecah['tahun_beli']; ?>">

                <div class="input-field">
                    <select name="kondisi" id="" class="input">
                        <option value="<?php echo $pecah['kondisi']; ?>"><?php echo $pecah['kondisi'] ?></option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak">Rusak</option>
                    </select> 
                    <label for=""><span class="black-text">Kondisi Barang</span></label>
                </div>

                <div class="file-field input-field">
                    <div class="btn orange">
                        <span>Foto barang</span>
                        <input type="file" name="foto" id="" multiple>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload foto barang">
                    </div>
                </div>
                <input type="submit" name="simpan" value="SIMPAN" class="btn blue">
            </form>
        </div>
            <?php
            if (isset($_POST['simpan'])) {
                //ambil data input
                $namafoto = $_FILES['foto']['name'];
                $lokasifoto = $_FILES['foto']['tmp_name'];

                $nama = $_POST['nama'];
                $jumlah = $_POST['jumlah'];
                $kategori = $_POST['kategori'];
                $spek = $_POST['spek'];
                $tahun = $_POST['tahun'];
                $kondisi = $_POST['kondisi'];

                // jk foto dirubah
                if (!empty($lokasifoto)) {
                    move_uploaded_file($lokasifoto, "../../img/foto_barang/$namafoto");

                    $koneksi->query("UPDATE tbl_barang SET nama_barang='$nama',
                        foto_barang='$namafoto',jumlah_barang='$jumlah',kategori='$kategori',spek='$spek',kondisi='$kondisi'
                        WHERE id_barang='$_GET[id]'");
                } else {
                    $koneksi->query("UPDATE tbl_barang SET nama_barang='$nama',
                    jumlah_barang='$jumlah',kategori='$kategori',spek='$spek',kondisi='$kondisi'
                    WHERE id_barang='$_GET[id]'");
                }
                echo "<script>alert('data barang telah dirubah');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='barang.php';</script>";
            }
            ?>
<?php 
include 'footer.php';
?>