<?php
// koneksikan dengan function tambah()
require 'functions.php';
// cek tombol udah pernah dipencet atau belum
if (isset($_POST["submit"])) {
// cek apakah berhasil atau tidak;
   if(tambah($_POST) > 0) {
      echo "
         <script>
            alert('data berhasil di tambahkan');
            document.location.href = 'index.php';
         </script>
      ";
   } else {
      echo "
      <script>
         alert('data gagal di tambahkan');
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
   <title>Tambah data mahsiswa</title>
</head>

<body>
   <h1>Thambah data mahasiswa</h1>

   <form action="" method="post">
      <ul>
         <li>
            <label for="judul">judul :</label>
            <input type="text" name="judul" id="judul">
         </li>
         <li>
            <label for="pengarang">pengarang :</label>
            <input type="text" name="pengarang" id="pengarang">
         </li>
         <li>
            <label for="penerbit">penerbit :</label>
            <input type="text" name="penerbit" id="penerbit">
         </li>
         <li>
            <label for="tahun">tahun :</label>
            <input type="text" name="tahun" id="tahun">
         </li>
         <li>
            <label for="gambar">gambar :</label>
            <input type="text" name="gambar" id="gambar">
         </li>
         <li>
            <button type="submit" name="submit">Tambah data</button>
         </li>
      </ul>
   </form>
</body>

</html>