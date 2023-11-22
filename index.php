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
$compteur=1;
//3 retrieve
foreach ($cars as $car){
    // get id from column id in cars table
    $id=$car['id'];
    $nameCar=$car['name'];
    ?>
    <?=$compteur?>
    <a href="car.php?id=<?=$id?>"><?=$nameCar?></a> - 
    <a href="removecar.php?id=<?=$id?>">Remove</a> - 
    <a href="editcar.php?id=<?=$id?>">Edit</a> 
    <form method="POST" action="addcart.php?id=<?=$id?>" >
        <select name="place">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option> 
        </select>
        <input type="submit" value="add to cart">
    </form>


    
    <br>

    <?php
$compteur=$compteur+1;
}

?>



<?php
include "footer.php";
?>






