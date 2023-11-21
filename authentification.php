<?php
include "header.php";
var_dump($_SESSION);
if (isset($_SESSION['user'])) {
    echo "test";
    header("location:index.php");
}

?>
<form action="connexion.php" method="post">
    <div>
      <label for="name">Email :</label>
      <input type="email"  id="email"  name="user_email">
    </div> 
    <div>
      <label for="name">Password :</label>
      <input type="password"  id="pwd"  name="user_pwd">
    </div>    
    <div  class="button">
      <button  type="submit">Send</button>
    </div>
</form>
<?php
include "footer.php";
?>
