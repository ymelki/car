<?php
include "header.php";
function getRows($key){
    $pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');
    $query = "SELECT * FROM car where id=$key";
    // query prepare with PDO 
    $statement = $pdo->query($query);
    // definie ":myid"
     // execute
     // get data 
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}
var_dump($_SESSION['cart']);
$cart=$_SESSION['cart'];

/*
[
    id => 1
    name => le petit poucet
] 

[
    1 => 1
    3 => 1
]
 */
foreach ($cart as $key=>$value){
    
    // 3 query car where id = $_GET (prepare)

    $car=getRows($key);
    echo "<hr>Name :".$car['name']." Price ". $car['price']." - Quantité :".$value;

 
}
?>