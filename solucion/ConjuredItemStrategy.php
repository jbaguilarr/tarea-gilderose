<?php
require_once 'ItemStrategy.php';
require_once 'Item.php';

class ConjuredItemStrategy implements ItemStrategy {

    public function updateItem($item){

        $newQuality = 0;
        if($this->sellInIsNotPassed($item)){
            $newQuality = $item->quality - 2 ;
        }else{
            $newQuality = $item->quality - 4;
        }

        if($this->isQualityNegative($newQuality)){
            $newQuality = 0;
        }

        $obitem = new Item($item->name,$item->sellIn - 1,$newQuality);

        return $obitem;
    }
    private function isQualityNegative($quality) {
        return $quality < 0;
    }

    private function sellInIsNotPassed($item) {
        return $item->sellIn > -1;
    }
}