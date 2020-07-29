<?php 
include 'header.php';
?>
    <div class="container">
        <h3>Data Operator</h3>
        <table class="table">
            <thead>
                <tr>		
                <th>No</th>
                <th>Nama Operator</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <!-- mengambil data dari tb_operator -->
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_operator"); ?>
                <!-- memecah data tersebut -->
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_operator']; ?></td>
                <td><?php echo $pecah['username']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <th>
                <a onclick="return confirm('Anda yakin ingin menghapus Data ini..?')" href="hapusoperator.php?id=<?php echo $pecah['id_operator']; ?>" class="btn red light">Hapus</a>&nbsp;
                <a href="ubahoperator.php?id=<?php echo $pecah['id_operator']; ?>" class="btn green light">Ubah</a>
                </td>
                </tr>
            <?php $nomor++; ?>
            <?php 
        } ?>
            </tbody>
        </table><br>
				<a href="tambahoperator.php" class="btn blue light">Tambah Data</a>
        </div> 
<?php 
include 'footer.php';
?>