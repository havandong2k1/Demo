<?php
require 'connect.php';
    $flight_id = $_POST['id'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $duration = $_POST['duration'];
    $sql = "UPDATE flights SET origin='$origin', destination='$destination', duration='$duration' WHERE id=$flight_id";
    if($conn->query($sql) === TRUE) {
        echo "Cập nhật chuyến bay thành công!";
    }
    else {
        echo "Lỗi: " . $conn->error;
    }
    $conn->close();
?>
