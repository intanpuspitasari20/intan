<?php
class person {
    public $name;

    function set_name($new_name) {
        $this->name = $new_name;
    }

    function get_name() {
        return $this->name; // Tambahkan pernyataan return untuk mengembalikan nilai $name
    }
}
?>