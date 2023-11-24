<?php

require_once "config.php";
require_once "Database.php";

// instanciation
//$db = new Database();
// utilisation méthode getPdo()
//$pdo=$db->getPdo();

//sans instanciation on utilise la méthode static
$pdo=Database::getPdo();
$pdo->query('select * from car');