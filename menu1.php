<?php
 session_start();
 if(!$_SESSION['login']) {
   header("location: /Banphokankaset/login/login.php");
   exit;
 }

 require_once('dbcontroller.php');
 $db_handle = new DBController();

?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/addproduct.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <meta charset="utf-8">
  <title>BanPhoKanKaset</title>
  <link rel="stylesheet" href="styles.css">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
  table, td, th {
    border-collapse: collapse;
    border: 3px solid black;
    height: 70px;
    text-align: center;
    width: 250px;
    background-color: #D9D9D9;
  }
  .mower-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 79%;
    height: 112%;
    background-color: lightgrey;
}

.mower-box {
    background-color: white;
    width: 330px;
    height:330px;
    margin: 35px;
}
.img-box{
    width: 100%;
    height: 240px;
    margin-bottom: 10px;
    display: flex;
    justify-content: center;
}
.insert-basket{
    display: block;
    text-align: center;
    font-size: 16px;
    background-color: green;
    box-shadow: inset 0 0 0 0 #fff;
    border-radius: 20px;
    width: 140px;
    height: 35px;
    color: #fff;
    transition: all 0.3s ease-out;
    text-decoration: none;
}
.insert-basket:hover{
    box-shadow: inset 180px 0 0 red;
    border: 1px solid rgb(119, 119, 119);
    color: white;
}
</style>
</head>

<body> 

<div class = member><div class="d-inline-flex p-2 text-light bg-success">
   <?php echo "{$_SESSION['name']} ({$_SESSION['role']})";?></div></div>
 <div class = logout>
  <a class="btn btn-danger p-2" href ="/Banphokankaset/login/logout.php">Logout</a>
</div>
  
<a href = "index.php"><img class ="logo" src = "img/logo.jpg"  width= 230px></a>
<a href = "cart.php"><img class ="cart" src = "img/cart.jpg" width = 55px></a>
<a href = "#"><img class ="like" src = "img/like.png" width = 55px></a>
  
<div>
  <a class ="menu1s" href="menu1.php">หมวดหมู่</a> 
  <a class ="menu2" href="menu2.php" >แจ้งชำระเงิน</a>
  <a class ="menu3" href="menu3.php" >ติดตามสถานะการสั่งซื้อ</a>
  <a class ="menu4" href="menu4.php" >ทดลองสินค้า</a> 
  <a class ="menu5" href="menu5.php" >ติดต่อเรา</a>
</div>

<div class="container-fluid">
    <form action ="search.php" method ="POST" class ="d-flex" style="margin:auto;max-width:850px">
      <input type ="text" name = "sproduct" class="form-control me-2 px-3" placeholder="ค้นหาสินค้า..." >
      <input type="submit" value="Search" class="btn btn-success">
    </form>
</div>
  

 <div class ="product">
  <table>
  <tr>
    <td onclick="window.open('menu1.php','_self','');" style="cursor:pointer">เครื่องตัดหญ้า</td>
  </tr>
  <tr>
    <td onclick="window.open('#','_self','');" style="cursor:pointer">ระบบรดน้ำ</td>
  </tr>
  <tr>
    <td onclick="window.open('#','_self','');" style="cursor:pointer">ระบบน้ำเกษตร</td>
  </tr>
  <tr>
    <td onclick="window.open('#','_self','');" style="cursor:pointer">ระบบวาล์วและอุปกรณ์</td>
  </tr>
  <tr>
    <td onclick="window.open('#','_self','');" style="cursor:pointer">อุปกรณ์ทำสวน</td>
  </tr>
  <tr>
    <td onclick="window.open('#','_self','');" style="cursor:pointer">สายยาง</td>
  </tr>
</table>
</div>



<div class="mower-container">
<?php 
                $product_array = $db_handle->runQuery("SELECT * FROM mower ORDER BY mower_id ASC");

                if(!empty($product_array)){
                    foreach($product_array as $key => $value){                               
            ?>

  <div class="mower-box">
  <form method="post" action="cart.php?action=add&model=<?php echo $product_array[$key]['model'];?>">
    <div class="img-box">
      <img src="<?php echo $product_array[$key]['image_url'];?>" class ="img-responsive /">
    </div>

    <div class="sbrand"><?php echo $product_array[$key]['brand']; ?></div>
    <div class="smodel"><?php echo $product_array[$key]['model']; ?></div>
    <div class="sprice"><?php echo "$",  $product_array[$key]['price'];?> </div>    
            
                <input type="hidden" name="product_img" value="<?php echo $product_array[$key]['image_url']; ?>">
                <input type="hidden" name="product_brand" value="<?php echo $product_array[$key]['brand']; ?>">
                <input type="hidden" name="product_model" value="<?php echo $product_array[$key]['model']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $product_array[$key]['price']; ?>">
                <input type="text" class="product-quantity" name="quantity" value="1" size="2">
                <input type="submit" class="insert-basket" name="addCart" value="เพิ่มลงในตะกร้า">
                    </form>
                </div>               
            <?php
                    };
                };
            ?></div>
        </div>      
</body>  
</html>