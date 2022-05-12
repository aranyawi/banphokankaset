<?php 
 session_start();
 if(!$_SESSION['login']) {
   header("location: /Banphokankaset/login/login.php");
   exit;
 }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>banphokankaset</title>
  <link rel="stylesheet" href="styles.css">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


  
<div >
  <a class ="menu1" href="menu1.php" >หมวดหมู่</a> 
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


  <img class ="advert1" src = "img/1.jpg"  width= 51%>  
  <img class ="advert2" src = "img/2.jpg"  width= 51%>  

</body>  
</html>