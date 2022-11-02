<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Đăng nhập hệ thống</title>
</head>
<body>
    <?php
        session_start();
        $emailTxt = $_POST["uname"];
        $passwordTxt = ($_POST["psw"]); 

        require_once "config.php";
        $sql = "SELECT * FROM account WHERE `email` = ? AND `pass` = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $emailTxt, $passwordTxt);
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);
       
            if (mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_assoc($result);
                $_SESSION["status"] = 'Success';
                $_SESSION["email"] =  $emailTxt;
                $_SESSION["password"] =  $passwordTxt;
                $_SESSION["username"] =  $row['username'];
                ?>
                <script>
                    alert("Đăng nhập thành công");
                    location.assign("./Viewproducts.php");
                </script>
                <?php
                
            }
            else
            {
                ?>
                <script>
                    alert("Sai tài khoản hoặc mật khẩu. Vui lòng nhập lại");
                    location.assign("./Viewproducts.php");
                </script>
                <?php
            }
        
      
        mysqli_close($conn);
        ?>
</body>
</html>