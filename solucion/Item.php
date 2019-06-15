<?php

class Item {

    public $name;
    public $sellIn;
    public $quality;

    function __construct($name, $sellin, $quality) {
        $this->name = $name;
        $this->sellIn = $sellin;
        $this->quality = $quality;
    }

    public function __toString() {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

}
