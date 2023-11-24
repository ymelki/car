<?php

require_once "config.php";
require_once "Database.php";
require_once "CarRepository.php";
// instanciation
//$db = new Database();
// utilisation méthode getPdo()
//$pdo=$db->getPdo();

//sans instanciation on utilise la méthode static
// $pdo=Database::getPdo();


$carRepository=new CarRepository();
$cars=$carRepository->getRows();
var_dump($cars);

// --------
$car=$carRepository->getRow(2);
var_dump($car);
