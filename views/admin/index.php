<?php 
include 'header.php';
?>
    <!-- Home -->
    <div class="container">
        <h4>Selamat datang <span class="red-text">
          <?php echo $_SESSION["admin"]["nama_admin"] ?></span><br>
          Anda login sebagai admin
        </h4><br>
        <a href="admin.php" class="btn grey light">Data Admin</a>
        <a href="operator.php" class="btn yellow darken-3">Data Operator</a>
        <a href="kritiksaran.php" class="btn green light">Kotak Kritik&Saran</a><br>
        <a href="grafikbarang.php" class="btn red light" style="margin-top:10px !important;">Grafik Barang</a>
        <a href="grafikanggota.php" class="btn blue light" style="margin-top:10px !important;">Grafik Anggota</a>
      </div>
<?php 
include 'footer.php';
?>