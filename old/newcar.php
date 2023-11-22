<?php
include "header.php";
?>
<form action="savecar.php" method="post">
    <div>
      <label for="name">Name :</label>
      <input type="text"  id="name"  name="car_name">
    </div>  
    <div>
      <label for="name">Price :</label>
      <input type="text"  id="price"  name="car_price">
    </div>  
    <div  class="button">
      <button  type="submit">Send</button>
    </div>
</form>
<?php
include "footer.php";
?>
