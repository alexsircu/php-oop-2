<?php
class Product {

  // ATTRIBUTI/PROPRIETA'
  public $barcode;
  public $price;

  // COSTRUTTORE
  public function __construct($barcode, $price)
  {
    $this->barcode = $barcode;
    $this->price = $price;
    
  }

  // METODI
}