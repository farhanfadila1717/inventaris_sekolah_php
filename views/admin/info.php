<?php
include 'header.php';
$id_barang = $_GET["id"];

	//query ambil data
$ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
$tampil = $ambil->fetch_assoc();

?>
    <div class="container">
          <h3 class="light center grey-text text-darken-3">Info Barang</h3><br>
          <div class="row">
            <div class="col m5 s12">
                 <img src="../../img/foto_barang/<?php echo $tampil['foto_barang']; ?>" alt="">
            </div>

            <div class="col m7 s12">
            <form action="" method="post">
                <ul class="collection with-header">
                    <li class="collection-header"><h5><?= $tampil['nama_barang']; ?></h5></li>
                    <li class="collection-item">Kategori: <?= $tampil['kategori']; ?></li>
                    <li class="collection-item">Spesifikasi : <?= $tampil['spek']; ?></li>
                    <li class="collection-item"><input type="number" min="1" name="jumlah" placeholder="masukan jumlah barang yang ingin dipinjam" max="<?php echo $tampil['jumlah_barang']; ?>"></li>
                    <li class="collection-item"><input type="submit" name="pinjam" value="PINJAM" class="btn blue"></li>
                </ul>
            </form>
            </div>
          </div>
        </div>
        <?php
				//jika ada tombol pinjam ditekan
        if (isset($_POST["pinjam"])) {
					//mendapatkan jumlah produk
            $jumlah = $_POST["jumlah"];
            $_SESSION["keranjang"][$id_barang] = $jumlah;
            echo "<script>alert('barang telah masuk kekeranjang pinjaman');</script>";
            echo "<script>location='keranjang.php';</script>";
        }

        ?>
<?php
include 'footer.php';
?>