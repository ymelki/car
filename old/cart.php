<?php
include "header.php";
function getRows($key){
    $pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');
    $query = "SELECT * FROM car where id=$key";
    // query prepare with PDO 
    $statement = $pdo->query($query);
    // definie ":myid"
     // execute
     // get data 
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}
if (isset($_SESSION['cart'])){
var_dump($_SESSION['cart']);


$cart=$_SESSION['cart'];

/*
[
    id => 1
    name => le petit poucet
] 

[
    1 => 1
    3 => 1
]
 */
$total=0;
$id=0;
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
<tbody>
      
<?php
foreach ($cart as $id_car=>$quantity){
    $id=$id+1;  
    $car=getRows($id_car);
    // prix :price * number_place 
    $totalPrice=$car['price']*$quantity;
    $total=$total+$totalPrice;
    ?>
    <tr>
      <td><?=$id?></td>
      <td><?=$car['name']?></td>
      <td><?=$car['price']?></td>
      <td>
        <a href="removequantitycart.php?id=<?=$car['id']?>&quantity=<?=$quantity?>"> - </a>
        <?=$quantity?>
        <a href="addquantitycart.php?id=<?=$car['id']?>&quantity=<?=$quantity?>"> + </a></td>
      <td><?=$totalPrice?></td>
    </tr> 
    <?php
    
    // 3 query car where id = $_GET (prepare)


 
}
?>

</tbody>
</table> 
Total price : <?=$total?>
<hr>
<a href="clearcart.php">clear</a>
<a href="confirm.php">Valid !</a>
<?php }
else {
    echo "cart is empty";
}
?>
