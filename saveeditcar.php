<?php
include "header.php";
?>
<?php
// 1 get data from URL (GET)
$id=$_GET['id'];
// 2 get data from form  (POST)
$name=$_POST['car_name'];
$price=$_POST['car_price'];

// 3 connect to database
$pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');

// 4 query to update data
//UPDATE table SET colonne_1 = 'valeur 1', colonne_2 = 'valeur 2', colonne_3 = 'valeur 3'
// WHERE condition
$query = "UPDATE car set name=:namecar , price=:pricecar  where id=:myId";
// query prepare with PDO 
$statement = $pdo->prepare($query);
// definie ":myid"
$statement->bindValue(':myId', $id, \PDO::PARAM_INT);
$statement->bindValue(':namecar', $name, \PDO::PARAM_STR);
$statement->bindValue(':pricecar', $price, \PDO::PARAM_STR);

// execute
$statement->execute();
// 5 redirect to index.php
header('location:index.php');
?>