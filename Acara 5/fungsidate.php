<?php
$sekarang = getdate();
$tanggal = $sekarang['mday'];
$bulan = $sekarang['mon'];
$tahun = $sekarang['year'];

echo "Tanggal Hari Ini: $tanggal-$bulan-$tahun"."\n";

$tanggalSekarang = date('d-F-Y');
echo "Tanggal, Bulan, dan Tahun Sekarang: $tanggalSekarang";

?>