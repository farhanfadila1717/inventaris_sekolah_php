<?php
include 'header.php';
?>
      <!-- tampil menu -->
      <div class="container">
      <h3 class="center grey-text text-darken-2">List Barang</h3><br>
        
      <div class="row">

          <?php $ambil = $koneksi->query("SELECT * FROM tbl_barang"); ?>
					<?php while ($tampil = $ambil->fetch_assoc()) { ?>

          <div class="col m3 s12">
          <div class="card">

              <div class="card-image">
              <img src="../../img/foto_barang/<?php echo $tampil['foto_barang']; ?>" alt="">
              </div>

              <div class="card-content">
              <span class="card-title"> <?php echo $tampil['nama_barang']; ?><br><br>
              </span>
              <a href="pinjam.php?id=<?php echo $tampil['id_barang']; ?>" class="tombol btn blue darken-2" style="margin-bottom:5%;">Pinjam</a>
              <a href="info.php?id=<?php echo $tampil['id_barang']; ?>" class="tombol btn grey darken-2" style="margin-top:-5%;">info</a>
              <br>
              </div>

          </div>
          </div>  
          <?php 
        } ?>
        </div>
      </div>
<?php
include 'footer.php';
?>