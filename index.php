<?php
//require "User.php";
//$user1=new User();
// $user1->age=1;
//$user1->setAge(100);
//var_dump($user1);
//echo $user1->getAge();
//require_once "EmployeInterface.php";
// require_once "PrimableInterface.php";
require_once "Employee.php";
require_once "Primable.php";
require_once "Ingenieur.php";
require_once "Patron.php";
require_once "Commercial.php";
require_once "Trader.php";

// creer un ingenieur
$monIngenieur=new Ingenieur("Yoel", "Melki",35,2000);
var_dump($monIngenieur);
// creer un patron
$patron=new Patron("Big","Boss",40,"Mercedes");
$patron->augmenteSalaire($monIngenieur);
var_dump($monIngenieur);
// $patron->augmenteSalaire($ingenieur);

// nouveau commercial
$commercial1=new Commercial("Yoel","Melki",34,2300,500);

var_dump($commercial1);
$patron->augmenteSalaire($commercial1);
$patron->setPrime($commercial1, 5000);

var_dump($commercial1);

require_once "ouvrier.php";
$ouvrier1=new Ouvrier("Peter","Pan",34,2222);
$patron->augmenteSalaire($ouvrier1);


$trader1=new Trader("Olivier","Tom",52,7000,50000);
var_dump($trader1);
$patron->setPrime($trader1,10000);
var_dump($trader1);


$employee1=new Employee("test","te",12,233 );
var_dump($employee1);