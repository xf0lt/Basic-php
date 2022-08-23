<?php 
// $_GET
$Buku = [
   [
      "judul" => "Akuntansi Pengantar 1",
      "pengarang" => "Supardi",
      "penerbit" => "Gava Media",
      "tahun" => "2009",
      "gambar" => "images.jpeg",
   ],
   [
      "judul" => "Aplikasi Klinis Induk Ovulasi & Stimulasi Ovariu",
      "pengarang" => "Samsulhadi",
      "penerbit" => "Sagung Seto	",
      "tahun" => "2013",
      "gambar" => "images.jpeg"
   ],
   [
      "judul" => "Aplikasi Praktis Asuhan Keperawatan Keluarga",
      "pengarang" => "Komang Ayu Heni	",
      "penerbit" => "Sagung Seto	",
      "tahun" => "2012",
      "gambar" => "images.jpeg"
   ],
   [
      "judul" => "	A-Z Psikologi : Berbagai kumpulan topik Psikologi",
      "pengarang" => "Zainul Anwar	",
      "penerbit" => "Andi Offset	",
      "tahun" => "2012",
      "gambar" => "images.jpeg"
   ],   
   [
      "judul" => "	Bangsa gagal ; Mencari identitas kebangsaan",
      "pengarang" => "Nasruddin Anshoriy	",
      "penerbit" => "LKiS",
      "tahun" => "2008",
      "gambar" => "images.jpeg"
   ],   
   [
      "judul" => "	Buku Ajar Tumbuh Kembang Remaja & Permasalahanya",
      "pengarang" => "Soetjiningsih",
      "penerbit" => "Sagung Seto	",
      "tahun" => "2004",
      "gambar" => "images.jpeg"
   ],   
   [
      "judul" => "Cedera Kepala	",
      "pengarang" => "M. Z. Arifin	",
      "penerbit" => "Sagung Seto	",
      "tahun" => "2013",
      "gambar" => "images.jpeg"
   ],   
   [
      "judul" => "Dasar Dasar Uroginekologi",
      "pengarang" => "Pribakti B	",
      "penerbit" => "Sagung Seto	",
      "tahun" => "2011",
      "gambar" => "images.jpeg"
   ],   
   [
      "judul" => "	Kuasa Wanita Jawa",
      "pengarang" => "Christina S Handayani	",
      "penerbit" => "LKiS",
      "tahun" => "2011",
      "gambar" => "images.jpeg"
   ],   
   [
      "judul" => "	Kumpulan Undang undang Sistem peradilan Pidana",
      "pengarang" => "Lincon Arsyad	",
      "penerbit" => "Andi Offset	",
      "tahun" => "2007",
      "gambar" => "images.jpeg"
   ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GET</title>
</head>
<body>
   <h1>DAFTAR BUKU</h1>

   <?php foreach($Buku as $b) : ?>
      <li>
         <a href="latihan2.php?judul=<?= $b["judul"]; ?>&
         pengarang=<?= $b["pengarang"]; ?>&
         penerbit=<?= $b["penerbit"]; ?>&
         tahun=<?= $b["tahun"]; ?>&
         gambar=<?= $b["gambar"]; ?>">
         <?= $b["judul"]; ?> </a>
      </li>
   <?php endforeach; ?>

</body>
</html>