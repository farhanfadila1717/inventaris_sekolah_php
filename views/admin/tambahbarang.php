<?php 
include 'header.php';
?>
    <div class="container">

            <h3>Tambah Data Barang</h3>
            <form method="post" enctype="multipart/form-data">

                <label><span class="black-text">Nama Barang</span></label>
                <input type="text" name="nama">

                <label><span class="black-text">Jumlah Barang</span></label>
                <input type="number" name="jumlah">

                <div class="input-field">
                    <select name="kategori" id="" class="input">
                        <option value="" disable selected >Kategori Barang</option>
                        <option value="Alat Elektronik">Alat Elektronik</option>
                        <option value="Alat Sekolah">Alat Sekolah</option>
                        <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                        <option value="ATK">Alat Tulis Kantor</option>
                    </select> 
                    <label for=""><span class="black-text">Kategori Barang</span></label>
                </div>

                <label><span class="black-text">Spesifikasi Barang</span></label>
                <input type="text" name="spek">

                <label><span class="black-text">Tahun Beli</span></label>
                <input type="text" name="tahun">

                <div class="input-field">
                    <select name="kondisi" id="" class="input">
                        <option value="" disable selected >Kondisi Barang</option>
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

            $nama = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];

            $namabarang = $_POST['nama'];
            $jumlah = $_POST['jumlah'];
            $kategori = $_POST['kategori'];
            $spek = $_POST['spek'];
            $tahun = $_POST['tahun'];
            $kondisi = $_POST['kondisi'];

            move_uploaded_file($_FILES['foto']['tmp_name'], "../../img/foto_barang/" . $_FILES['foto']['name']);

            $sql = $koneksi->query("INSERT INTO tbl_barang(nama_barang,foto_barang,jumlah_barang,kategori,spek,tahun_beli,kondisi)VALUES('$namabarang','$nama','$jumlah','$kategori','$spek','$tahun','$kondisi')");

            echo "<script>alert('data barang disimpan');</script>";
            echo "<meta http-equiv='refresh'>";
            echo "<script>location='barang.php';</script>";
        }
        ?>
<?php 
include 'footer.php';
?>