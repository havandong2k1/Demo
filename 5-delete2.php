<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            font-size: 20px;
        }
        h3 {
            text-align: center;
            color: #FF2442;
        }
        table {
            background-color: #FFDEFA;
            width: 50%;
            border: 1px solid #000;
            border-collapse: collapse;
        }
        th {
            background-color: #FF5151;
            color: #fff;
            padding: 5px;
        }
        td, th {
            padding: 5px;
            text-align: left;
        }
        tr:hover {
            background: #FF9292;
            color: #8E0505;
        }
    </style>
</head>
<body>
    <?php
        echo '<form method="post" action="">';
        require 'connect.php';
        mysqli_set_charset($conn, 'UTF8');
        $sql = "SELECT * FROM passengers";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) // ktra có kq trả về
        { // nếu còn dl trong bảng
            echo 
                "<table align='center'>
                <h3> SOLD TICKET </h3>
                <tr>
                    <th> Select </th>
                    <th> Passenger Name </th>
                    <th> Flight ID </th>
                </tr>"; 
            while($row = $result->fetch_assoc()) // cú pháp đọc từng row kq trả về
            { // đọc dl từng dòng
                echo "<tr><td> <input type=checkbox name='checkbox[]' value='".$row['id']."' >" . "</td>".
                    "<td>" .$row["name"]. "</td>".
                    "<td>" .$row["flight_id"]. "</td></tr>";
            }
        }
            echo '<input type="submit" name="delete" value="CANCLE TICKET" />
            </form>';
    ?>
    <?php 
        // hàm xóa dl
        if (isset($_POST['delete']))
        {
            if(isset($_POST['checkbox']))
            {
                $chkarr= $_POST['checkbox'];
                foreach ($chkarr as $id) // vòng lặp for xét từng ptu trong mảng
                {
                    $sql = "DELETE FROM passengers WHERE id='$id'";
                    $result = $conn->query($sql); // chạy query
                    header("location: 5-delete2.php"); 
                    echo "Đã hủy các vé được chọn";
                }
            }
        }        
        // đóng kết nối
        $conn->close();
    ?>
</body>
</html>