<?php
// coder l'idée d'une personne en PHP procédural
$name="melki";
$lastName="Yoel";
$age=36;
echo "je m'appelle ".$name." ".$lastName." et j'ai ".$age;

$name2="melki2";
$lastName2="Yoel2";
$age2=36;
echo "je m'appelle ".$name2." ".$lastName2." et j'ai ".$age2;

require "User.php";
// creation de l'objet a partie de la classe
$user=new User("Bob","Toto",23); 
var_dump($user);

$user2=new User("Axel","Tata",34); 
var_dump($user2);

$user->sePresenter();
echo "<hr>";
$user2->sePresenter();

require "Admin.php";
$admin=new admin("Papa","pepe",23,2);
var_dump($admin);

 
?>