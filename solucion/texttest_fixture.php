<?php

require_once 'GildeRose.php';
require_once 'Item.php';


$items = array(
    new Item('+5 Dexterity Vest', 10, 20),
    new Item('Aged Brie', 2, 0),
    new Item('Elixir of the Mongoose', 5, 7),
    new Item('Sulfuras, Hand of Ragnaros', 0, 80),
    new Item('Sulfuras, Hand of Ragnaros', -1, 80),
    new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),
    new Item('Conjured Mana Cake', 3, 6)
);

$app = new GildeRose($items);

// $app->updateQuality();

$days = 7;


echo '<br>';
for ($i = 0; $i < $days; $i++) {
    echo("-------- day $i --------\n");
    echo("name, sellIn, quality\n");
    echo '<br>';
    foreach ($items as $item) {
        echo $item . PHP_EOL;
        echo '<br>';
    }
    echo PHP_EOL;
    $app->updateQuality();
}
