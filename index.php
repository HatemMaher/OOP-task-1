<?php 


require_once 'person.php';

$client = new Person();

$client ->first_name = "Mostafa";
$client ->last_name = "mohaned";
$client ->gender = "male";
$client ->is_employed = true;
$client ->country = "Egypt";


echo $client->fullName();

echo "<br>";

$client2 = new Person();


$client2->first_name = "Fatma";
$client2->last_name = "Ali";
$client2->gender = "Female";
$client2->is_employed = true;
$client2->country = "Egypt";


echo $client2->fullName();

// echo $client->first_name . " " . $client->last_name;
// echo "<br>";
// echo "Gender is : " . $client->gender;
// echo "<br>";
// echo "Is Employed : " . ($clinet->is_employed ? "Yes" : "No");

// echo "<br>";
// echo $client->sayHello();

// echo "<br>";
// echo $client->checkFromGender("asa");






// echo $client->first_name->last_name;




// var_dump($client);



// require_once 'student.php';
// require_once 'product.php';


// $mostafa = new Student();
// $hineida = new Student();
// $ramadan = new Student();

// $product1 = new product();
// $product2 = new product();

// // var_dump(get_declared_classes());


// // var_dump($mostafa,$hineida,$ramadan);


// var_dump(class_exists('product'));