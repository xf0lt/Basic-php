<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "webdb", "admin1234", "phpdasar");

function query($query) {
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}

// function tambah
function tambah($data) {
   global $conn; 
 // ambil data dari setaip element dalam form 
   $judul = htmlspecialchars($data["judul"]);
   $pengarang = htmlspecialchars($data["pengarang"]);
   $penerbit = htmlspecialchars($data["penerbit"]);
   $tahun = htmlspecialchars($data["tahun"]);
   $gambar = htmlspecialchars($data["gambar"]);


   // query insert data
   $query = "INSERT INTO buku VALUES ('0', '$judul', '$pengarang', '$penerbit', '$tahun', '$gambar')";
   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}


// functions hapus
function hapus($id) {
   global $conn;
   mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

   return mysqli_affected_rows($conn);
}


?>