<html>
<head>
    <meta charset="UTF-8">
    <title>Mỹ  phẩm HAKA</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome CSS -->
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./style.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style>
        body {
          background-color: white;
        }
        .box-pagination{
	        display: flex;    
            width: 100%;
            margin: 0 auto;  
            align-items: center;
            justify-content: center;

        }
.box-pagination a{
	float: left;
  	padding: 8px 16px;
	font: black;
	border: 1px solid black;
	border-top-right-radius: 7px;
  	border-bottom-right-radius: 7px;
	border-top-left-radius: 7px;
  	border-bottom-left-radius: 7px;
	margin: 5px;
}   
        .container_book{
            display: flex;
            width: 80%;
            margin: 0 auto;  
            justify-content: center;
            flex-direction: column;
        }
        .book1{
            display: flex;
            width: 100%;
            margin: 0 auto;  
            justify-content: center;
        }
 
        
 
     

      </style>
</head>
<body>
    
    <div class="container_book">
      <div class="book1 container_book">
    <?php
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        require_once "config.php"; 

        $total_pages_sql = "SELECT COUNT(*) FROM product";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM product LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
         ?>
          
            <table>
                <?php
            $d=0;        
                while($row = mysqli_fetch_assoc($res_data)) {
                    if($d==0)
                    echo "<tr>";
               
            ?>
           
                    <td style ="vertical-align: text-top" height = "360px" width = "200px" align='center'>
                        <img src='./img/<?php echo $row["avatar"];?>.jpg' height = "210px" width="200px"/><br/>
                        <p style="color:Tomato;"><b><?php echo $row["price"].".000đ";?></b></p>
                        <a href='viewproduct-info.php?id=<?php echo $row["code"];?>'> <p style= "font-size: 12px;" ><b><?php echo $row["name"];?></b><br/></p></a>
                    </td>
                    <?php
                $d++;
                if($d==5)
                {
                    echo "</tr>";
                    $d = 0;
                }
            }
            mysqli_close($conn);
       
            ?>
                </table>    
        </div>
        </div>


    <ul class="pagination">
        <li><a href="?pageno=1">First </a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev </a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next </a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>
</html>