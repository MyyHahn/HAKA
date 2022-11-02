<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
</head>
<body>
<?php
session_start();
$code = $_GET["id"];
require_once "config.php";
        $sql = "select * from product
        where code = '$code'";
        $result = mysqli_query($conn, $sql);
        ?>
<table>
<?php
$row = mysqli_fetch_assoc($result);
echo "<tr>";
 
?>
 <td rowspan = "10"  align='center'>
<img src='img/<?php echo $row["avatar"];?>.jpg' height = "240px" width="250px"/><br/>
</td>
<td>
    <?php
    echo " <b> Tên sản phẩm: "."</b>". $row["name"] ;
    ?>
</td>
</tr>
<tr>
<td>
    <?php
    echo "<b> Thương hiệu: "."</b>". $row["brand"];
    ?>
</td>
</tr>

<tr>
<td>
    <?php
    echo "<b>Xuất xứ: "."</b>".$row["country"];
    ?>
</td>
</tr>
<tr>
<td>
    <?php
    echo "<b>Loại da: "."</b>". $row["skintype"];
    ?>
</td>
</tr>
<tr>
<td>
    <?php
    echo "<b>Giới tính: "."</b>". $row["sex"];
    ?>
</td>
</tr>
<tr>
<td>
    <?php
    echo"<b>Vấn đề về da: "."</b>". $row["problem"];
    ?>
</td>
</tr>
<tr>
<td>
    <?php
    echo"<b>Số lượng có sẵn: "."</b>". $row["quantity"];
    ?>
</td>
</tr>
<tr>
<td>
<p style="color:Tomato;"><b><?php echo "<b>Giá: ". $row["price"].".000đ";?></b></p>

</td>
</tr>
 
</table>

    <button style = "margin-left :10px;" onclick="exit()" class="btn1">Thoát</button>
    <script>
        function exit() {
            history.back();
        }
    </script>
    <button style = "margin-left :10px;" class="btn btn-info btn-round">Mua ngay</button>
</body>
</html>
 
