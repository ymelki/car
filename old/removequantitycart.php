<?php
include "header.php"; 
 
// recuperer les données en GET
$id_produit=$_GET['id'];
$quantity=$_GET['quantity'];
$quantity=$quantity-1;
// 1. recupere le panier
$cart=$_SESSION['cart'];



// 2. Modifier le panier suivant le produit sur lequel
// on a cliqué ($_GET)


// 3. je vais modifier la value de cette clé suivant
// la donnée en passé en GET
$cart[$id_produit]=$quantity;

$_SESSION['cart']=$cart;
var_dump($cart);
header("location:cart.php");

?>