<?php

include "header.php";

if (!isset($_SESSION['user'])){
    header("location:authentification.php");
}

// connect to database
$pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');

// get id_user from database
$email_user=$_SESSION['user'];
var_dump($email_user);
//2 query : 
$query = "SELECT * FROM user where email = '$email_user'";
$statement = $pdo->query($query);
$user = $statement->fetch(PDO::FETCH_ASSOC);

// get cart from session
$cart=$_SESSION['cart'];

var_dump($user);
echo '<hr>';
var_dump($cart);

foreach ($cart as $id_car=>$quantity){
    $query = "INSERT INTO booking (user_id,car_id,quantity,start_date,date_end)
    VALUES (:iduser, :idcar, :quantity, '2023-01-01', '2023-15-01') ";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':iduser', $user['id'], \PDO::PARAM_INT);
    $statement->bindValue(':idcar', $id_car, \PDO::PARAM_INT);
    $statement->bindValue(':quantity', $quantity, \PDO::PARAM_INT);

    $statement->execute();

}
 