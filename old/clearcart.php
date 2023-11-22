<?php
session_start();
//suprimer un élément du tableau
unset($_SESSION['cart']);
header("location:index.php");