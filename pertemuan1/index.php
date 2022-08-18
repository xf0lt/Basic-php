<?php 
// Pertemuan 2 - PHP dasar
// sintaks php

// standart output
// echo, print
// print_r
// var_dump

// penulisan sintaks php
// 1. php dalam html
// 2. html dalam php

// variabel dan type data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandunng angka
// $nama = "dedek iswan";
// echo "Hallo, nama saya $nama"

// OPERATOR 
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y; 

// penggabung string / concatenation / concat
// .
// $nama_depan = "dedek";
// $nama_belakang = "iswan";
// echo $nama_depan . " " . $nama_belakang

// Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "dedek";
// $nama .= " ";
// $nama .= "iswan";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !===
// var_dump(1 ==="1")

// LOGIKA
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>
