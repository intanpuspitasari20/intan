<?php
class Person {
    private $name;

    function set_name($new_name) {
        $this->name = $new_name;
    }

    function get_name() {
        return $this->name;
    }
}

$person1 = new Person();
// Menggunakan metode set_name() untuk mengatur nama
$person1->set_name('Lukman Hakim');
// Mengakses properti name
echo "Hai " . $person1->get_name();
?>
