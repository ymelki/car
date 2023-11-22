<?php
include "header.php";

// 1. get data from url
$id=$_GET['id'];
$number=$_POST['place'];

// 2. add to cart this id : 5 => 1.

// 2 cas
// 1 : le panier existe deja
if (isset($_SESSION['cart'])) {
    echo "cart exist!";
    
    // recupere le panier existant
    // array(1) { ["cart"]=> array(1) { [2]=> int(1) } } 
    $cart=$_SESSION['cart'];

    // on ajoute une quantité de 1 pour ce produit
    // pour le produit [2] => 1
    $cart[$id]=$number;
    // array(1) { ["cart"]=> array(2) 
    //    { [2]=> int(1) } } 
    //    { [3]=> int(1) } } 

    // on sauvegarde le panier dans la variable session
    $_SESSION['cart']=$cart;


}
// 1er fois le panier existe pas
else {
    // je cree un tableau
    // avec la clé correspond au produit
    // et la valeur c'est la quantité 1
    $cart[$id]=$number;
    // je sauvegarde le panier dans la variable
    // session
    $_SESSION['cart']=$cart;
    echo "creation du panier ";
}

var_dump($cart);

// 2 : le panier n'existe pas