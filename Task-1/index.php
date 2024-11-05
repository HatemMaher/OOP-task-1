<?php 
require_once 'Product.php';


$product1 = new Product();

$product1->name = "BMW Car";
$product1->price = 100000000;
$product1->brand = "BMW";
$product1->image = "Bmw.jpg";
$product1->discription = "The BMW M3 has become a fundamental part of the performance car world since its introduction in 1988. Track days or a Nürburgring tourist lap wouldn’t be complete without at least one M3 of some generation slithering its way round the circuit.";
$product1->tax = "10";


$product2 = new Product();

$product2->name = "mercedes Car";
$product2->price = 100200000;
$product2->brand = "mercedes";
$product2->image = "Mercedes.jpg";
$product2->discription = "The height, measured from the ground to the top of the car, is 1406 mm across all variants. The width is 1770 mm across all variants. The length is 4590 mm across all variants.";
$product2->tax = "10";

$product3 = new Product();

$product3->name = "Audi Car";
$product3->price = 100300000;
$product3->brand = "Audi";
$product3->image = "Audi.jpg";
$product3->discription = "If you want a family hatchback that makes you smile every time you climb inside, then the Audi A3 Sportback needs to be on your list. It has a fantastic, upmarket cabin, the latest technology and is decently spacious inside too. You will pay more for one than a VW Golf, Skoda Octavia or Ford Focus, though.";
$product3->tax = "10";

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-image: url('car.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>

  </head>
  <body>





    <div class="container mt-5">
        <div class="row">

        <div class="col-md-4 card-spacing">   
        <div class="card" style="width: 18rem;">
        <img src="<?php echo $product1->image;?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product1->getName(); ?></h5>
            <p class="card-text"><?php echo $product1->discription;?></p>
            <p class="card-text">Price: $<?php echo number_format($product1->price, 2); ?></p>
            <p class="card-text">Price after Discount: $<?php echo number_format($product1->priceAfterDiscount(10), 2); ?></p>
            <p class="card-text">Final Price with Tax: $<?php echo number_format($product1->getFinalPrice(10), 2); ?></p>
        </div>
        </div>
        </div>



        <div class="col-md-4 card-spacing">
        <div class="card" style="width: 18rem;">
        <img src="<?php echo $product2->image;?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product2->getName(); ?></h5>
            <p class="card-text"><?php echo $product2->discription;?></p>
            <p class="card-text">Price: $<?php echo number_format($product2->price, 2); ?></p>
            <p class="card-text">Price after Discount: $<?php echo number_format($product2->priceAfterDiscount(10), 2); ?></p>
            <p class="card-text">Final Price with Tax: $<?php echo number_format($product2->getFinalPrice(10), 2); ?></p>
        </div>
        </div>
        </div>

        <div class="col-md-4 card-spacing">
        <div class="card" style="width: 18rem;">
        <img src="<?php echo $product3->image;?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product3->getName(); ?></h5>
            <p class="card-text"><?php echo $product3->discription;?></p>
            <p class="card-text">Price: $<?php echo number_format($product3->price, 2); ?></p>
            <p class="card-text">Price after Discount: $<?php echo number_format($product3->priceAfterDiscount(10), 2); ?></p>
            <p class="card-text">Final Price with Tax: $<?php echo number_format($product3->getFinalPrice(10), 2); ?></p>
        </div>
        </div>
        </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>







