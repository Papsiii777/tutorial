<?php
class Fruit
{
  // Property 
  public $name;
  public $size;
  private $price;

  function __construct($name, $size, $price)
  {
    $this->name = $name;
    $this->size = $size;
    $this->price = $price;
  }
}

$durian = new Fruit("Durian", 23, 2343);
$kiwi = new Fruit("Kiwi", 18, 390);

echo $durian->name;
echo $kiwi->size;
