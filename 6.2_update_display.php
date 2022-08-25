<form  method="post" action="6.3_update_result.php">
    <?php
    require 'connect.php'
    mysqli_set_charset($conn,'UT8');
$flight_id=$_POST["flight_id"];
$sql="SELECT * FROM flights WHERE id='$flight_id'";
$result=$conn->query($sql);
echo "<h1>Thông tin về chuyến bay có ID: $flight_id</h1>";
if($result->num_rows>0){
$row=$result->fetch_assoc();
$origin=$row["$origin"];
$destination=$row["$destination"];
$duration=$row["$duration"];
echo "<input type ='text' name='id' value='$flight_id' readonly/><br>".
echo "<input type ='text' name='origin' value='$origin'/><br>".
echo "<input type ='text' name='destination' value='$destination'/><br>".
echo "<input type ='text' name='duration' value='$duration'/><br>".
}
else{
    echo="0 results";
}
$conn->close();
?>
<input type="submit" name="action" id="submit" value="Cập nhật"/><br>
</form>