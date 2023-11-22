<?php

require "User.php";
require "Admin.php";

// instancier la classe User
$user1=new User("Yoel","Melki",34);
var_dump($user1);
$admin1=new Admin("Axel","Toto",23);