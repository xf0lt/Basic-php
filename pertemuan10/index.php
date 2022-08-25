<?php
require "functions.php";
$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin</title>
</head>
<body>
   <h1>Daftar Buku</h1>

   <a href="tambah.php">Tambah data mahasiswa</a>
   <br><br>

   <table border="1" cellpadding="10" cellspacing="0">
      <tr>
         <th>No.1</th>
         <th>Aksi</th>
         <th>Gambar</th>
         <th>Judul</th>
         <th>Pengarang</th>
         <th>Penerbit</th>
         <th>Tahun</th>
      </tr>

      <?php $i=1; ?>
      <?php foreach($buku as $b): ?>
      <tr>
         <td><?= $i; ?></td>
         <td>
            <a href="ubah.php?id=<?= $b["id"]; ?>">Ubah</a> | 
            <a href="hapus.php?id=<?= $b["id"];?>" onclick="return confirm('yakin?');">Hapus</a>
         </td>
         <td><img src="images/<?= $b["gambar"]; ?>" width="70"></td>
         <td><?= $b["judul"]; ?></td>
         <td><?= $b["pengarang"]; ?></td>
         <td><?= $b["penerbit"]; ?></td>
         <td><?= $b["tahun"]; ?></td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
   </table>
</body>
</html>