<?php 
include 'header.php';
?>
   <div class="container">
        <h3>Data Anggota</h3>
        <form action="" method="post">
        <div class="row">
            <div class="col m10 s12">
                    <input type="text" name="nama" placeholder="masukan nama anggota">
            </div>
            <div class="col m2 s12">
                    <input type="submit" name="cari" value="cari" class="btn orange">
            </div>
        </div>
        </form>
        <?php
        if (isset($_POST['cari'])) {
            $nama = $_POST['nama'];

            echo "<script>location='carianggota.php?nama=$nama';</script>";
        }
        ?>
        <table class="table">
            <thead>
                <tr>		
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Password</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- mengambil data dari tb_operator -->
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_anggota ORDER BY nama_anggota"); ?>
                <!-- memecah data tersebut -->
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $pecah['nis']; ?></td>
                <td><?php echo $pecah['nama_anggota']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <td><?php echo $pecah['tempat_lahir']; ?></td>
                <td><?php echo $pecah['tgl_lahir']; ?></td>
                <td><?php echo $pecah['jk']; ?></td>
                <td><?php echo $pecah['prodi']; ?></td>
                <td><?php echo $pecah['thn_masuk']; ?></td>
                <td>
                <a onclick="return confirm('Anda yakin ingin menghapus Data ini..?')" href="hapusanggota.php?nis=<?php echo $pecah['nis']; ?>" class="btn red light">Hapus</a>&nbsp;
                <a href="ubahanggota.php?nis=<?php echo $pecah['nis']; ?>" class="btn green light">Ubah</a>
                </td>
                </tr>
            <?php 
        } ?>
            </tbody>
        </table><br>
				<a href="tambahanggota.php" class="btn blue light">Tambah data</a>
							
        </div> 
<?php 
include 'footer.php';
?>