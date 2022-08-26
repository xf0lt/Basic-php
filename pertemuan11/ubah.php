<?php
// koneksikan dengan function tambah()
require 'functions.php';

// ambil data dari url 
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$b = query("SELECT * FROM buku WHERE id = $id")[0];

// cek tombol udah pernah dipencet atau belum
if (isset($_POST["submit"])) {
   
   // cek apakah diubah atau tidak;
   if(ubah($_POST) > 0) {
      echo "
         <script>
            alert('data berhasil di ubah');
            document.location.href = 'index.php';
         </script>
      ";
   } else {
      echo "
      <script>
         alert('data gagal di ubah');
         document.location.href = 'index.php';
      </script>
   ";
   }
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ubah data mahsiswa</title>
</head>

<body>
   <h1>Ubah data mahasiswa</h1>

   <form action="" method="post">
      <input type="hidden" name="id" value="<?= $b["id"] ?>">
      <ul>
         <li>
            <label for="judul">judul :</label>
            <input type="text" name="judul" id="judul" required value="<?= $b["judul"]; ?>">
         </li>
         <li>
            <label for="pengarang">pengarang :</label>
            <input type="text" name="pengarang" id="pengarang" required value="<?= $b["pengarang"]; ?>">
         </li>
         <li>
            <label for="penerbit">penerbit :</label>
            <input type="text" name="penerbit" id="penerbit" required value="<?= $b["penerbit"]; ?>">
         </li>
         <li>
            <label for="tahun">tahun :</label>
            <input type="text" name="tahun" id="tahun" required value="<?= $b["tahun"]; ?>">
         </li>
         <li>
            <label for="gambar">gambar :</label>
            <input type="text" name="gambar" id="gambar" required value="<?= $b["gambar"]; ?>">
         </li>
         <li>
            <button type="submit" name="submit">Ubah data</button>
         </li>
      </ul>
   </form>
</body>

</html>