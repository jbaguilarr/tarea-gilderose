<?php
require_once 'ItemStrategy.php';
require_once 'Item.php';

class AgedBrieItemStrategy implements ItemStrategy {

    public function updateItem($item){
        $newQuality =  0;
        if($this->sellInIsPassed($item)){
            $newQuality = $item->quality + 2 ;
        }else{
            $newQuality = $item->quality + 1;
        }

        if($this->isQualityGreaterThanFifty($newQuality)){
            $newQuality = 50;
        }

        $obitem = new Item($item->name,$item->sellIn - 1,$newQuality);

        return $obitem;
    }

    private function sellInIsPassed($item){
        return $item->sellIn < 1;
    }

    private function isQualityGreaterThanFifty($quality){
         return $quality > 50;
    }

}
