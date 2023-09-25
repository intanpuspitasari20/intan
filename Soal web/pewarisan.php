<?php
class jti {
    public $name;
    public $alamat;
    public $status;

    function __construct($name, $alamat, $status) {
        $this->name = $name;
        $this->alamat = $alamat;
        $this->status = $status;
    }

    public function nama() {
        return $this->name;
    }

    public function alamat() {
        return $this->alamat;
    }

    public function status() {
        return $this->status;
    }
}

class mahasiswa extends jti {
    private $nim;

    function __construct($nim, $name, $alamat, $status) {
        parent::__construct($name, $alamat, $status); // Panggil konstruktor kelas induk
        $this->nim = $nim;
    }

    public function nim() {
        return $this->nim;
    }
}

class dosen extends jti {
    private $nip;

    function __construct($nip, $name, $alamat, $status) {
        parent::__construct($name, $alamat, $status); // Panggil konstruktor kelas induk
        $this->nip = $nip;
    }

    public function nip() {
        return $this->nip;
    }
}

class teknisi extends jti {
    private $nik;

    function __construct($nik, $name, $alamat, $status) {
        parent::__construct($name, $alamat, $status); // Panggil konstruktor kelas induk
        $this->nik = $nik;
    }

    public function nik() {
        return $this->nik;
    }
}

// Instansiasi class mahasiswa
$mahasiswa = new mahasiswa("e41222077", "intan", "jember", "mahasiswa");
$dosen = new dosen("1222333", "eko", "bali", "dosen");
$teknisi = new teknisi("12345678", "lina", "jakarta", "teknisi");

echo "MAHASISWA" . "\n" . "NIM: " . $mahasiswa->nim() . ", Nama: " . $mahasiswa->nama() . ", Alamat: " . $mahasiswa->alamat() . ", Status: " . $mahasiswa->status() . "\n";
echo "DOSEN" . "\n" . "NIP: " . $dosen->nip() . ", Nama: " . $dosen->nama() . ", Alamat: " . $dosen->alamat() . ", Status: " . $dosen->status() . "\n";
echo "TEKNISI" . "\n" . "NIK: " . $teknisi->nik() . ", Nama: " . $teknisi->nama() . ", Alamat: " . $teknisi->alamat() . ", Status: " . $teknisi->status() . "\n";
