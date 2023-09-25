<?php

// Matriks A
$A = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

// Matriks B
$B = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

// Inisialisasi matriks hasil
$hasil = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0)
);

// Looping untuk menjumlahkan matriks A dan B
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $hasil[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan hasil penjumlahan
echo "Hasil penjumlahan matriks A dan B adalah:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $hasil[$i][$j] . " ";
    }
    echo "\n";
}

?>
