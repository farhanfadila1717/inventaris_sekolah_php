<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pilihan Tingkatan</title>
    <link rel="stylesheet" href="css/level.css">
</head>
<body>
<!-- fungsi -->
<?php
function admin()
{
  echo "<script>alert('anda memilih admin');</script>";
  echo "<script>location='login/admin.php';</script>";
}
function operator()
{
  echo "<script>alert('anda memilih operator');</script>";
  echo "<script>location='login/operator.php';</script>";
}
function anggota()
{
  echo "<script>alert('anda memilih anggota');</script>";
  echo "<script>location='login/anggota.php';</script>";
}
?>
<div id="pilih">
      <div class="left">
          
      </div>
      <div class="right">
      <h1>Pilih Tingkatan Login</h1>
        <form action="" method="post">
          <input type="submit" name="admin" value="admin">
          <input type="submit" name="operator" value="operator">
          <input type="submit" name="anggota" value="anggota">
        </form>
      </div>
    </div>
    <?php
    if (isset($_POST['admin'])) {
      admin();
    } elseif (isset($_POST['operator'])) {
      operator();
    } elseif (isset($_POST['anggota'])) {
      anggota();
    }
    ?>
</body>
</html>