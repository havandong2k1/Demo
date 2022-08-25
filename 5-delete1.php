<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Delete Tiket </h1>
     <form method ='get' action="">
         <h2>Id passengers</h2>
         <input type="number" name="id">
         <button type="submit ">Xóa</button> 
 
</body>


<?php
if (isset($_GET['id']))
{
 $id=$_GET['id'];

require 'connect.php';
mysqli_set_charset($conn, 'UTF8');
$sql="DELETE FROM passengers WHERE id='id' ";
if ($conn->query($sql) === TRUE)
{
echo "Ticket with id has been deleted";

}
else
{
    echo "Error: " . $sql . "<br>" .$conn->error;
}
$conn->close();
}
?>  
</html>