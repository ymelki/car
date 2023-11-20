<?php
include "header.php";
?>  
<?php
// 1 get data form URL
$id=$_GET['id'];

// 2 connect to B.D
$pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');

// 3 quert to delete a car

// query
$query = "DELETE FROM car where id=:myId";
// query prepare with PDO 
$statement = $pdo->prepare($query);
// definie ":myid"
$statement->bindValue(':myId', $id, \PDO::PARAM_INT);
// execute
$statement->execute();

// 4 retirect to index.php
header('location:index.php?message=success');
?>

<?php
include "footer.php";
?>






