<?php
require_once "View/header.php";
require_once "Model/config.php";
require_once "Model/Database.php";
// require_once "Car.php";
require_once "Model/CarRepository.php";
// instanciation
//$db = new Database();
// utilisation méthode getPdo()
//$pdo=$db->getPdo();

//sans instanciation on utilise la méthode static
// $pdo=Database::getPdo();
// ROUTEUR
var_dump($_SERVER['PATH_INFO']);
// $_SERVER['PATH_INFO'] contient ce qui ecrit
// dans la barre d'adresse /home
$url=$_SERVER['PATH_INFO'];
 // / => HomeController => welcome
if ($url==="/home"){
    require_once "Controller/HomeController.php";
}
 // /cars => CarsController => all cars
if ($url==="/cars"){
    require_once "Controller/CarController.php";
    $carController=new CarController();
    $carController->getRows();
}
 // /car => CarController =>  car
 if ($url==="/car"){
    require_once "Controller/CarController.php";
    $carController=new CarController();
    $carController->getRow(2);
}