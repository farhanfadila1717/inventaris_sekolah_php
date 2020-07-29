<?php
include 'header.php';
?>
<div class="container">
          <h3 class="light center grey-text text-darken-3">My Profile</h3><br>
          <div class="row">
          <div class="col m6 s12">
            <img src="../../img/baner/bg2.jpg" alt="" width="90%;">
          </div>
            <div class="col m6 s12">
              <ul class="collection">
                  <li class="collection-item"> <strong> NIS :</strong>  &nbsp;&nbsp;<?= $_SESSION["anggota"]["nis"]; ?></li>
                  <li class="collection-item"> <strong> Nama Lengkap :  &nbsp;&nbsp;</strong> <?= $_SESSION["anggota"]["nama_anggota"]; ?></li>
                  <li class="collection-item"> <strong> Password : </strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["password"]; ?> </li>
                  <li class="collection-item"> <strong> Tempat Lahir: </strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["tempat_lahir"]; ?></li>
                  <li class="collection-item"> <strong> Tanggal Lahir:</strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["tgl_lahir"]; ?></li>
                  <li class="collection-item"> <strong> Jenis Kelamin :</strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["jk"]; ?></li>
                  <li class="collection-item"> <strong> Jurusan :</strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["prodi"]; ?></li>
                  <li class="collection-item"> <strong> Tahun Masuk :</strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["thn_masuk"]; ?></li>
             </ul>
            </div>
        </div>
<?php
include 'footer.php';
?>