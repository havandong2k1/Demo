<h1>Chuyến bay hiện có  </h1>
<from method="post" action="6.2_update_display.php" >
<?php
require 'connect.php'
mysqli_set_charset($conn,'UT8');
$sql="SELECT * FROM flights";
$result=$conn->query($sql);
if($result->numrows >0){
    echo"<option value=".$row["id"].">".$row["origin"]."to".$row["destination"]."</option>"
}
echo"</select> <br>";
}
?>
<input type="submit" name="action" id="submit" value="Xem"/><br>
</from>
