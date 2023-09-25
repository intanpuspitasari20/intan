<?php
// Include file Kalkulator.php
include 'Kalkulator.php';

// Membuat objek Kalkulator dengan angka 10 dan 5
$angka1 = 10;
$angka2 = 5;

$kalkulator = new Kalkulator($angka1, $angka2);

echo "Penjumlahan: " . $kalkulator->tambah() . "<br>";
echo "Pengurangan: " . $kalkulator->kurang() . "<br>";
?>