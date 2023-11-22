<?php
session_start();

// on stocke dans la variable $_SESSION dans la clé
// user la valeur Yoel.
$_SESSION['user']="Yoel";

//pour gérer le panier
// une clé au produit
// une valeur correspond a la quantité
// Le produit 3 => 5
// le produit 1 => 2
$cart[3]=5;
$cart[1]=2;
$_SESSION['myCart']=$cart;  