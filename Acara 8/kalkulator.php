<?php
// Definisikan kelas Kalkulator
class Kalkulator {
    private $angka1;
    private $angka2;

    // Konstruktor untuk menginisialisasi angka1 dan angka2
    public function __construct($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    // Fungsi untuk menambahkan dua angka
    public function tambah() {
        return $this->angka1 + $this->angka2;
    }

    // Fungsi untuk mengurangkan dua angka
    public function kurang() {
        return $this->angka1 - $this->angka2;
    }
}
?>
