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
  <title>BanPhoKanKaset</title>
  <link rel="stylesheet" href="styles.css">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    video {
    width: 130%;
    height: auto;
}
  table,td{
    border-collapse: collapse;
    border: 2px solid black;
    height: 60px;
    text-align: center;
    vertical-align: center;
    width: 180px;
    background-color:white;
  }
body { 
  background-image:url('img/green.jpg');
  background-repeat : repeat-x;
  background-position: 0px 255px;
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
  <a class ="menu1" href="menu1.php" >หมวดหมู่</a> 
  <a class ="menu2" href="menu2.php" >แจ้งชำระเงิน</a>
  <a class ="menu3" href="menu3.php" >ติดตามสถานะการสั่งซื้อ</a>
  <a class ="menu4s" href="menu4.php" >ทดลองสินค้า</a> 
  <a class ="menu5" href="menu5.php" >ติดต่อเรา</a>
</div>

<div class="container-fluid">
    <form action ="search.php" method ="POST" class ="d-flex" style="margin:auto;max-width:850px">
      <input type ="text" name = "sproduct" class="form-control me-2 px-3" placeholder="ค้นหาสินค้า..." >
      <input type="submit" value="Search" class="btn btn-success">
    </form>
</div>

<div class="video"> 
  <video width="400" controls>
  <source src="asd.mp4" type="video/mp4">
  <source src="asd.mp4" type="video/ogg">
  </video>
</div>   

<div class ="producttest">
  <table>
  <tr>
    <td>การทดลองสินค้า</td>
  </tr>
  </table>
</div>

<div class ="note">
  <h>**หมายเหตุ...</h>
</div>

<div class = "ordernum" >
  <div class="container-fluid">
    <form class="d-flex" style="margin:auto;max-width : 300px">
      <input class="form-control me-2" type="search" placeholder="หมายเลขคำสั่งซื้อ" aria-label="Search">
      <button class="btn btn-outline-success bg-white" type="submit">ยืนยัน</button>
    </form>
  </div>
</nav>
</div>

</body>  
</html>