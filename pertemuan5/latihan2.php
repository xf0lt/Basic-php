<?php
   // $mahasiswa = [
      // ["Mahasiswa 1", "8787322", "mahasiwa1@gmail.com", "Teknik Informatika"],
      // ["Mahasiswa 2", "8787321", "mahasiwa2@gmail.com", "Komputer Akutansi"],
      // ["Mahasiswa 3", "8787344", "mahasiwa3@gmail.com", "Manajemen"],
   // ];

   // Array assosiatve
   // definisi nya sama seperti array numeri, kecuali
   // key nya adalah string yang kita buat sendiri 
   $mahasiswa = [
      ["gambar" => "mahasiswa1.jpeg", "nama" => "Mahasiswa 1", "nrp" => "1112196", "email" => "mahasiwa1@gmail.com", "jurusan" => "office maanjemen", "tugas" => [21, 22, 23]],
      ["gambar" => "mahasiswa2.png", "nama" => "Mahasiswa 2", "nrp" => "1112197", "email" => "mahasiwa2@gmail.com", "jurusan" => "Sekretaris", "tugas" => [31, 32, 33]],
      ["gambar" => "mahasiswa3.jpeg", "nama" => "Mahasiswa 3", "nrp" => "1112198", "email" => "mahasiwa3@gmail.com", "jurusan" => "Teknik Informatika", "tugas" => [41, 42, 43]],
      ["gambar" => "mahasiswa1.jpeg", "nama" => "Mahasiswa 4", "nrp" => "1112199", "email" => "mahasiwa4@gmail.com", "jurusan" => "Akutansi", "tugas" => [51, 52, 53]],
   ];
   // echo $mahasiswa[1]["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daftar Mahasiswa</title>
   <style>
      h1 {
         text-align:  center;
         background-color: teal;
      }
   </style>
</head>
<body>
   <h1>Daftar Mahasiswa</h1>

   <?php foreach($mahasiswa as $mhs) : ?>
   <ul>
      <li>
         <img src="img/<?= $mhs["gambar"]; ?>">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Tugas : <?= $mhs["tugas"][1]; ?></li>
   </ul>
   <?php endforeach; ?>
</body>
</html>