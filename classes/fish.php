<?php
require_once __DIR__ . "/product.php";

class Fish extends Product
{

  // ATTRIBUTI/PROPRIETA'
  private $type_of_fish;

  // COSTRUTTORE
  public function __construct($barcode, $price, $type_of_fish)
  {
    parent::__construct($barcode, $price);
    $this->type_of_fish = $type_of_fish;
  }

  // METODI
  public function getTypeOfFish () {
    return $this->type_of_fish;
  }
}

//  $salmon = new Fish("sruehr34302", 12, "Salmon");
//   var_dump($salmon);