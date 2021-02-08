<?php
class Product
{

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

class Meat extends Product
{

  // ATTRIBUTI/PROPRIETA'
  public $type_of_meat;

  // COSTRUTTORE
  public function __construct($barcode, $price, $type_of_meat)
  {
    parent::__construct($barcode, $price);
    $this->type_of_meat = $type_of_meat;
  }

  // METODI
}

class Fish extends Product
{

  // ATTRIBUTI/PROPRIETA'
  public $type_of_fish;

  // COSTRUTTORE
  public function __construct($barcode, $price, $type_of_fish)
  {
    parent::__construct($barcode, $price);
    $this->type_of_fish = $type_of_fish;
  }

  // METODI
}

class Accessories extends Product
{

  // ATTRIBUTI/PROPRIETA'
  public $category;
  public $brand;

  // COSTRUTTORE
  public function __construct($barcode, $price, $category, $brand)
  {
    parent::__construct($barcode, $price);
    $this->$category = $category;
    $this->brand = $brand;
  }

  // METODI
}
?>

<h1>Salmone</h1>
<?php
  $salmon = new Fish("sruehr34302", 12, "Salmon");
  var_dump($salmon);
?>

<h1>Pollo</h1>
<?php 
  $chicken = new Meat("fh3uuwh39734", 2, "Chicken");
  var_dump($chicken); 
?>

