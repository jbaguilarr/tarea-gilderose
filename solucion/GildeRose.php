<?php
require_once 'ItemStrategy.php';

require_once 'NormalItemStrategy.php';
require_once 'AgedBrieItemStrategy.php';
require_once 'SulfurasItemStrategy.php';
require_once 'BackstagePassItemStrategy.php';
require_once 'ConjuredItemStrategy.php';

class GildeRose {

    private $items;

    private $listItemStrategy;

    function __construct($items) {
        $this->items = $items;
        $this->listItemStrategy = array(
            array("name"=>"Aged Brie", "item"=> new AgedBrieItemStrategy()),
            array("name"=>"Sulfuras, Hand of Ragnaros", "item" => new SulfurasItemStrategy()),        
            array("name"=>"Backstage passes to a TAFKAL80ETC concert", "item" => new BackstagePassItemStrategy()),        
            array("name"=>"Conjured Mana Cake", "item" => new ConjuredItemStrategy())     
        );
    }

    public function updateQuality(){
        // echo '<pre>';
        // print_r($this->items[0]->name);
        foreach ($this->items as $item) {
            $itemStrategy = $this->verificarListaItemStrategy($item->name, new NormalItemStrategy()) ; 
            $item = $itemStrategy->updateItem($item);
        }

        //   echo '<pre>';
        //  print_r($this->listItemStrategy);
        // foreach ($this->listItemStrategy as $item) {
        //     print_r($item['name']);
        // }
    }

    private function verificarListaItemStrategy($name,$normalItemStrategy){
        
        $verificar = false;
        $itemresul;
        foreach ($this->listItemStrategy as $item) {
            if($item['name'] == $name){
                $verificar =  true;
                $itemresul = $item['item'];
            }
        }

        return $verificar ? $itemresul : $normalItemStrategy;

    }
}