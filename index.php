<?php
require "User.php";
$user1=new User();
// $user1->age=1;
$user1->setAge(100);
var_dump($user1);
echo $user1->getAge();

require_once "Ingenieur.php";
require_once "Patron.php";

// creer un ingenieur
$monIngenieur=new Ingenieur("Yoel", "Melki",35,2000);
var_dump($monIngenieur);
// creer un patron
$patron=new Patron("Big","Boss",40,"Mercedes");
$patron->augmenteSalaire($monIngenieur);
var_dump($monIngenieur);
// $patron->augmenteSalaire($ingenieur);
