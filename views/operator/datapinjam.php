<?php
include 'header.php';
?>
<div class="container">
        <h3>Data Pinjam</h3>
        <hr>
        <table class="highlight">
            <thead>
                <th>No</th>
                <th>Id Pinjam</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Peminjaman</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $status = 'dipinjam' ?>
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_pinjam WHERE status_peminjaman='$status'"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <!-- menampilkan pembelian yang masih berstatus belum bayar-->
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah["id_pinjam"]; ?></td>
                    <td> <?php echo $pecah["nama_anggota"]; ?></td>
                    <td><?php echo $pecah["tanggal_peminjaman"]; ?></td>
                    <td>
                        <a href="terima.php?id=<?php echo $pecah["id_pinjam"]; ?>" class="btn green light">Diterima</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php 
            } ?>
            </tbody>
        </table>
        <br>
        <p>
            <Span class="red-text">Menekan Tombol diterima merubah status peminjaman menjadi sudah dikembalikan</Span>
        </p>
        </div>
<?php
include 'footer.php';
?>