<?php
require_once __DIR__ . "/product.php";

class Meat extends Product {

  // ATTRIBUTI/PROPRIETA'
  private $type_of_meat;

  // COSTRUTTORE
  public function __construct($barcode, $price, $type_of_meat)
  {
    parent::__construct($barcode, $price);
    $this->type_of_meat = $type_of_meat;
  }

  // METODI
  public function getTypeOfMeat() {
    return $this->type_of_meat;
  }
}

// $chicken = new Meat("fh3uuwh39734", 2, "Chicken");
// var_dump($chicken); 