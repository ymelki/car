<?php
include "header.php";
?>
<?php
//1 get data from form
$name=$_POST['car_name'];
$price=$_POST['car_price']; 

//2 connect to database
$pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');

//3 query to insert data
// 3. save data in B.D (insert into)
$query = "INSERT INTO car (name,price)
    VALUES (:namecar, :pricecar)";
$statement = $pdo->prepare($query);
$statement->bindValue(':namecar', $name, \PDO::PARAM_STR);
$statement->bindValue(':pricecar', $price, \PDO::PARAM_STR);

$statement->execute();
// redirect to cars
header('location:index.php');

?>

<?php
include "footer.php";
?>
