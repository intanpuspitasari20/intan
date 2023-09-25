<?php

class Mamalia {
    protected $nama;
    protected $berat;

    public function __construct($nama, $berat) {
        $this->nama = $nama;
        $this->berat = $berat;
    }

    public function cekObesitas() {
        if ($this->berat > 50) {
            return "{$this->nama} adalah mamalia obesitas.";
        } elseif($this->berat>=30) {
            return "{$this->nama} adalah mamalia yang memiliki berat yang sehat.";
        }
        elseif($this-> berat<30){
            return "{$this->nama} adalah mamalia yang memiliki berat kurang.";

        }else{
            return "{$this->nama}data tidak valid";
        }
    }
}

class Kucing extends Mamalia {
    public function __construct($nama, $berat) {
        parent::__construct($nama, $berat);
    }
}

class Anjing extends Mamalia {
    public function __construct($nama, $berat) {
        parent::__construct($nama, $berat);
    }
}

class Sapi extends Mamalia {
    public function __construct($nama, $berat) {
        parent::__construct($nama, $berat);
    }
}

// Buat objek-objek mamalia
$mamalia = [
    new Kucing("Kucing", 5),
    new Anjing("Anjing", 30),
    new Sapi("Sapi", 60),
];

// Loop untuk mengecek obesitas
foreach ($mamalia as $hewan) {
    echo $hewan->berat . " - " . $hewan->cekObesitas() . "\n";
}
?>
