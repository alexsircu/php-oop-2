<?php
require_once __DIR__ . "/product.php";

class Accessories extends Product
{

  // ATTRIBUTI/PROPRIETA'
  private $category;
  private $brand;

  // COSTRUTTORE
  public function __construct($barcode, $price, $category, $brand)
  {
    parent::__construct($barcode, $price);
    $this->category = $category;
    $this->brand = $brand;
  }

  // METODI
  public function getCategory() {
    return $this->category;
  } 

  public function getBrand() {
    return $this->brand;
  } 
}

// $a1 = new Accessories("frf54tr4", 50, "coltelli", "random");
// var_dump($a1);