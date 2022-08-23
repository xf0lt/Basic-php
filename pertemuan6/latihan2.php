<?php 
// cek apakah tidak ada data di $_GET
if(!isset($_GET["judul"]) || 
   !isset($_GET["pengarang"]) ||
   !isset($_GET["penerbit"]) ||
   !isset($_GET["tahun"]) ||
   !isset($_GET["gambar"])) {
   header("Location: latihan1.php"); //redirect
   exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail buku</title>
</head>
<body>
   <ul>
      <li><img src="<?= $_GET["gambar"]; ?>"</li>
      <li><?= $_GET["judul"]; ?></li>
      <li><?= $_GET["pengarang"]; ?></li>
      <li><?= $_GET["penerbit"]; ?></li>
      <li><?= $_GET["tahun"]; ?></li>
   </ul>

   <a href="latihan1.php">kembali ke daftar buku  </a>
</body>
</html>