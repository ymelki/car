<?php
include "header.php";
?>
<?php
//1 get data from form
$email=$_POST['user_email'];
$pwd=$_POST['user_pwd'];
$name=$_POST['user_name'];
$lastName=$_POST['user_lastName'];

// hash pwd
$pwd=password_hash($pwd, PASSWORD_BCRYPT);


//2 connect to database
$pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');

//3 query to insert data
// 3. save data in B.D (insert into)
$query = "INSERT INTO user (email,password, name, last_name)
    VALUES (:emailuser, :passworduser,:nameuser,:last_nameuser)";
$statement = $pdo->prepare($query);
$statement->bindValue(':emailuser', $email, \PDO::PARAM_STR);
$statement->bindValue(':passworduser', $pwd, \PDO::PARAM_STR);
$statement->bindValue(':nameuser', $name, \PDO::PARAM_STR);
$statement->bindValue(':last_nameuser', $lastName, \PDO::PARAM_STR);

$statement->execute();
// redirect to cars
header('location:index.php');

?>

<?php
include "footer.php";
?>
