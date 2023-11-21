<?php
include "header.php";
?>
<?php
//1 get data from form
$email=$_POST['user_email'];
$pwd=$_POST['user_pwd'];
var_dump($_POST);
echo "<br>";
// 2 connect to database
$pdo = new \PDO('mysql:host=localhost;dbname=donkeycar', 'root', '');

// 3 query to get user = $_POST['user_email']

$query = "SELECT * FROM user where email=:myEmail";
// query prepare with PDO 
$statement = $pdo->prepare($query);
// definie ":myid"
$statement->bindValue(':myEmail', $email, \PDO::PARAM_STR);
// execute
$statement->execute();
// get data 
$user = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($user);

if ($user===false) {
    header("location:authentification.php");
}
else {
    // if password in form is equal password in database
    // if ($user['password']===$pwd){
    if (password_verify($pwd,$user['password'])) {
        //'Password is valid!';
        // save email in session variable
        $_SESSION['user']=$user['email'];
        // redirect to index.php
        header("location:index.php");
    }
    else {
        // if password is not valid
        header("location:authentification.php");
    }
}
 






include "footer.php";
?>