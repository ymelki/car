<?php
include "header.php";
?>
<form action="saveuser.php" method="post">
    <div>
      <label for="name">Email :</label>
      <input type="email"  id="email"  name="user_email">
    </div> 
    <div>
      <label for="name">Password :</label>
      <input type="password"  id="pwd"  name="user_pwd">
    </div>  
    <div>
      <label for="name">Name :</label>
      <input type="text"  id="name"  name="user_name">
    </div> 
    <div>
      <label for="name">Last Name :</label>
      <input type="text"  id="lastName"  name="user_lastName">
    </div>   
    <div  class="button">
      <button  type="submit">Send</button>
    </div>
</form>
<?php
include "footer.php";
?>
