<?php
include "header.php";
?>
<?php
// 1 get data from url
$id=$_GET['id'];
 
// 2 connect to database
$pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');
$query = "SELECT * FROM car where id=:myId";
// query prepare with PDO 
$statement = $pdo->prepare($query);
// definie ":myid"
$statement->bindValue(':myId', $id, \PDO::PARAM_INT);
// execute
$statement->execute();
$car = $statement->fetch(PDO::FETCH_ASSOC);
$name=$car['name'];
$price=$car['price'];
// 3 query : get one car where id=$id

?>

<form action="saveeditcar.php?id=<?=$id?>" method="post">
    <div>
      <label for="name">Name :</label>
      <input type="text" value=<?=$name ?>  id="name"  name="car_name">
    </div>  
    <div>
      <label for="name">Price :</label>
      <input type="text" value=<?=$price ?> id="price"  name="car_price">
    </div>  
    <div  class="button">
      <button  type="submit">Send</button>
    </div>
</form>
<?php
include "footer.php";
?>
