<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
<?php
session_start();
    if (isset($_SESSION["status"])=='Success')
    {
        ?>
        <!--PHẦN 1 LÀ CÁI HEADER ĐẦU TIÊN-->
        <div>
                    <a href=""><img class="" src="./img/logo.jpg" alt=""></a>
                    <h2><b>HAKA.VN</b> </h2>
                    <p>Chất lượng - tự nhiên</p>
                </div>
            <div class="header__right">
              <!-- Button -->
        <div class="container">
                <p style = "position:relative; right:170px"><?php echo "Xin chào, <b>".$_SESSION['username'] ?></p>
                
              <button style = "position:relative; top:-55px" class="btn btn-info btn-round" onclick="signout()">Đăng xuất</button>                                                                                      
              <a href = ./packageorder.php ><i style  = "position:relative;top:-55px; right:-40px" class="fas fa-cart-plus fa-2x"></i></a>
              <a href='./Historyorder.php'> <p style= "position:relative;top:-85px; right:170px; " ><b><?php echo "Lịch sử mua hàng";?></b><br/></p></a>
              <script>
                    function signout(){
                        if (confirm("Bạn có chắc muốn thoát không?")==true)
                        {
                            alert("Đăng xuất thành công");
                            var myWindow = window.open("./destroysession.php", "", "width=0, height=0");
                            myWindow.blur();
                            location.assign("./Viewproducts.php");
                        }
                    }
                </script>
              </div>
            </div>
   
    <?php
    } else {
        
    ?>
    
    <!--PHẦN 1 LÀ CÁI HEADER ĐẦU TIÊN-->
    
        </head>
        <body>
            <div>
                    <a href=""><img class="" src="./img/logo.jpg" alt=""></a>
                    <h2><b>HAKA.VN</b> </h2>
                    <p>Chất lượng - tự nhiên</p>
                </div>
                <div class="header__right">
                
              <!-- Cái nút -->
        <div class="container">
              <button id="myBtn" class="btn btn-info btn-round">Đăng nhập</button> 
              <a href ="./signup.php"><button class="btn btn-info btn-round">Đăng ký</button> </a>                               
              </div>
          </div>  
          
          <!--Form Login-->
          <!-- The Modal -->
          <div id="myModal" class="modal">
                
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              
              <form action="./login.php" method="post">
              <div class="container">
              <label for="uname"><b>Email</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
              <label for="psw"><b>Mật khẩu</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>  
              </p>
		            <p><input type="checkbox" name="remember" /> Remember me
	            </p>
    
              <button type="submit">Đăng nhập</button>
            </div>      
          </div>
        </div>

      <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      
      </script>

          <!--PHẦN 2: Dãy menu-->

   <?php } 
     include './pagination.php' ;      
        ?>
</body>
</html>