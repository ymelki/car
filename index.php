<?php
include "header.php";
?>
<?php
// list cars
//1 connect to database
$pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');

//2 query : all cars
$query = "SELECT * FROM car";
$statement = $pdo->query($query);
$cars = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($cars);

//3 retrieve
foreach ($cars as $car){
    // get id from column id in cars table
    $id=$car['id'];
    $nameCar=$car['name'];
    ?>
    <a href="car.php?id=<?=$id?>"><?=$nameCar?></a><br>

    <?php

}

?>



<?php
include "footer.php";
?>






