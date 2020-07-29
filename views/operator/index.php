<?php
include 'header.php';
?>
<!-- Home -->
<div class="container">
        <h4>Selamat datang <span class="red-text">
          <?php echo $_SESSION["operator"]["nama_operator"] ?></span><br>
          Anda login sebagai operator
        </h4><br>
        <a href="datapinjam.php" class="btn green light">Data Pinjam</a>
      </div>
<?php
include 'footer.php';
?>