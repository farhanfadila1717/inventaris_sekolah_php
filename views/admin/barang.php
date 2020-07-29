<?php 
include 'header.php';
?>
    <div class="container">
        <h3>Data Barang</h3> 
        <form action="" method="post">
        <div class="row">
            <div class="col m10 s12">
                    <input type="text" name="namabarang" placeholder="masukan nama barang">
            </div>
            <div class="col m2 s12">
                    <input type="submit" name="cari" value="cari" class="btn orange">
            </div>
        </div>
        </form>
        <?php
        if (isset($_POST['cari'])) {
            $nama = $_POST['namabarang'];

            echo "<script>location='caribarang.php?nama=$nama';</script>";
        }
        ?>
        <table class="table">
            <thead>
                <tr>		
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Kategori</th>
                <th>Tahun Beli</th>
                <th>Kondisi</th>
                <th>Foto</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <!-- mengambil data dari tb_barang -->
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_barang ORDER BY nama_barang"); ?>
                <!-- memecah data tersebut -->
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_barang']; ?></td>
                <td><?php echo $pecah['jumlah_barang']; ?></td>
                <td><?php echo $pecah['kategori']; ?></td>
                <td><?php echo $pecah['tahun_beli']; ?></td>
                <td><?php echo $pecah['kondisi']; ?></td>
                <td>
                <img src="../../img/foto_barang/<?php echo $pecah['foto_barang']; ?>" width="50">
                </td>
                <th>
                <a onclick="return confirm('Anda yakin ingin menghapus Data ini..?')" href="hapusbarang.php?id=<?php echo $pecah['id_barang']; ?>" class="btn red light">Hapus</a>
                <a href="ubahbarang.php?id=<?php echo $pecah['id_barang']; ?>" class="btn green light">Ubah</a>
                </td>
                </tr>
            <?php $nomor++; ?>
            <?php 
        } ?>
            </tbody>
        </table><br>
				<a href="tambahbarang.php" class="btn blue light">Tambah Data</a>
        </div> 
<?php 
include 'footer.php';
?>