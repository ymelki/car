<?php
session_start();
//suprimer un élément du tableau
unset($_SESSION['user']);
header("location:index.php");