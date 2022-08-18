<?php 
// Date 
// untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");

// Time
// unix time stamp / EPOCH time
// detik yang sudah berslalu sejak 1 jamuari 1970
// echo time()
echo date("d-M-Y", time()-60+60*24*100);

// mktime
// membuat sendiri detik 
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,8,18,2022));

// strtotime
echo date("l", strtotime("18 aug 2022"));
?>