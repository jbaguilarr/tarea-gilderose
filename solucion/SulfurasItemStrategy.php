<?php
require_once 'ItemStrategy.php';
require_once 'Item.php';

class SulfurasItemStrategy implements ItemStrategy {

    public function updateItem($item){
        return $item;
    }
}

