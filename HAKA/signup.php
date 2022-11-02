<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Đăng ký tài khoản</title>
</head>
<body>
    <?php

        session_start();

        require_once "config.php";?>
        <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
              <div class="container">
              <label for="email"><b>Email</b> (ex: Haka@gmail.com, vanA@outlook.com, Abc@edu.vn,...)</label></br>
              <input type="email" placeholder="Enter your email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required></br>
              <label for="username"><b>Họ Tên</b></label>
              <input type="text" placeholder="Enter your name" name="username" required>
              <label for="birthdate"><b>Ngày sinh </b> (ex: 30/12/2000)</label></br>
              <input type="date" placeholder="30/12/2000" name="birthdate" required></br>
              <label for="phone"><b>Số điện thoại</b></label>
              <input type="text" placeholder="Enter your phonenumber" name="phone" pattern="[0]+[1-9]+[0-9]{8}"  required>
              <label for="psw"><b>Mật khẩu</b> (Độ dài trên 6 ký tự, chỉ bao gồm số và chữ)</label>
              <input type="password" placeholder="Enter password" name="psw" pattern="[0-9a-zA-Z]{6,}" required> 
              <label for="repsw"><b>Xác nhận mật khẩu</b></label>
              <input type="password" placeholder="Confirm password" name="repsw" required>     
              <button type="submit">Đăng ký</button>
        </form>
    <?php
 
    
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $emailTxt = $_POST["email"];
            $usernameTxt = $_POST["username"];
            $bd = $_POST["birthdate"];
            $phone = $_POST["phone"];
            $passwordTxt = ($_POST["psw"]); 
            $repasswordTxt = ($_POST["repsw"]); 
  
            $sql = "SELECT * FROM account WHERE `email` ='".$emailTxt."'";
            echo $sql;
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)  {
                ?>
                <script>
                    alert("Email đã được đăng ký. Vui lòng sử dụng email khác");
                    location.assign("./Viewproducts.php");
                </script>
                <?php
            }  
            else 
            {
                if ($passwordTxt==$repasswordTxt) 
                {
                    $sql1 = "INSERT INTO `account`(`email`, `username`, `pass`, `phonenumber`, `birthdate`)
                     VALUES ('$emailTxt','$usernameTxt','$passwordTxt','$phone','$bd')";
                     $result1 = mysqli_query($conn,$sql1);
                    if($result1)
                     {
                        ?>
                    <script>
                        alert("Tài khoản đã được tạo thành công!");
                        location.assign("./Viewproducts.php");
                    </script>
                    <?php
                    }
                    else 
                    {
                            ?>
                        <script>
                            alert("Tạo tài khoản không thành công!");
                            location.assign("./Viewproducts.php");
                        </script>
                        <?php
                    }
                }
            else 
            {
                ?>
                <script>
                    alert("Mật khẩu không khớp");
                    location.assign("./signup.php");
                </script>
                <?php
            }
            }
            mysqli_close($conn);
        }

      ?>