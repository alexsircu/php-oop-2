<?php 

require_once __DIR__ . "/classes/meat.php";

require_once __DIR__ . "/classes/fish.php";

require_once __DIR__ . "/classes/accessories.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $chicken = new Meat("fh3uuwh39734", 2, "Chicken");
    $salmon = new Fish("sruehr34302", 12, "Salmon");
    $a1 = new Accessories("frf54tr4", 50, "coltelli", "random");
  ?>

  <section>
    <h1>MEAT</h1>
    <p>Queste sono le info della carne: <?php echo $chicken->getTypeOfMeat(); ?></p>
  </section>

  <section>
    <h1>FISH</h1>
    <p>Queste sono le info del pesce: <?php echo $salmon->getTypeOfFish(); ?></p>
  </section>

  <section>
    <h1>ACCESSORIES</h1>
    <p>Queste sono le info dell'utensile: <?php echo $a1->getCategory() . " " . $a1->getBrand(); ?></p>
  </section>
  
</body>
</html>