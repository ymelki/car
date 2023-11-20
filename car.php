<?php
include "header.php";
?> 
<?php
// 1 get data $_GET
$id=$_GET['id'];
// echo $id;
// 2 connect to database
$pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');

// 3 query car where id = $_GET (prepare)
$query = "SELECT * FROM car where id=:myId";
// query prepare with PDO 
$statement = $pdo->prepare($query);
// definie ":myid"
$statement->bindValue(':myId', $id, \PDO::PARAM_INT);
// execute
$statement->execute();
// get data 
$car = $statement->fetch(PDO::FETCH_ASSOC);
// var_dump($car);

?>
Id: <?=$car['id'] ?><br>
Car : <?=$car['name'] ?><br>
Price : <?=$car['price'] ?> €<br>



<?php
include "footer.php";
?>






