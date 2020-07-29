<?php 
include 'header.php';
?>
    <div class="container">
        <h3>Data Admin</h3>
        <table class="table">
            <thead>
                <tr>		
                <th>No</th>
                <th>Nama Admin</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <!-- mengambil data dari tb_operator -->
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_admin"); ?>
                <!-- memecah data tersebut -->
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_admin']; ?></td>
                <td><?php echo $pecah['username']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <th>
                <a onclick="return confirm('Anda yakin ingin menghapus Data ini..?')" href="hapusadmin.php?id=<?php echo $pecah['id_admin']; ?>" class="btn red light">Hapus</a>&nbsp;
                <a href="ubahadmin.php?id=<?php echo $pecah['id_admin']; ?>" class="btn green light">Ubah</a>
                </td>
                </tr>
            <?php $nomor++; ?>
            <?php 
        } ?>
            </tbody>
        </table><br>
				<a href="tambahadmin.php" class="btn blue light">Tambah Data</a>
        </div> 
<?php 
include 'footer.php';
?>