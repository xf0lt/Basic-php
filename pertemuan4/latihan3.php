<?php 
$mahasiswa = [
   ["Mahasiswa 1", "12121232", "Teknik Informatika", "email@gmail.com"],
   ["Mahasiswa 2", "99884783", "Manajemen", "email@gmail.com"],
   ["Mahasiswa 3", "99883333", "Sejarah Islam", "email@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar mahasiwa</title>
</head>
<body>
   <h1>Daftar mahasiwa</h1>
      <?php foreach($mahasiswa as $m) : ?>
         <ul>
            <li>Nama : <?= $m[0]; ?></li>
            <li>NRP : <?= $m[1]; ?></li>
            <li>Jurusan : <?= $m[2]; ?></li>
            <li>Email : <?= $m[3]; ?></li>
         </ul>
      <?php endforeach; ?>
</body>
</html>
