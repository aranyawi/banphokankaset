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
  <style>
   table,td,tr{
    border-collapse: collapse;
    border: 3px solid;
    height: 60px;
    width: 140px;
    text-align: center;
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
  <a class ="menu3s" href="menu3.php" >ติดตามสถานะการสั่งซื้อ</a>
  <a class ="menu4" href="menu4.php" >ทดลองสินค้า</a> 
  <a class ="menu5" href="menu5.php" >ติดต่อเรา</a>
</div>

<div class="container-fluid">
    <form action ="search.php" method ="POST" class ="d-flex" style="margin:auto;max-width:850px">
      <input type ="text" name = "sproduct" class="form-control me-2 px-3" placeholder="ค้นหาสินค้า..." >
      <input type="submit" value="Search" class="btn btn-success">
    </form>
</div>

<div class = " box" >
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
</svg> 
<h style="font-size: 26px;">ติดตามสถานะการสั่งซื้อ</h> 
</div>

<div class = "ordernump3" >
  <div class="container-fluid">
    <form class="d-flex" style="margin:auto;max-width : 400px">
      <input class="form-control me-2 mx-3" type="search" placeholder="หมายเลขคำสั่งซื้อ" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">ยืนยัน</button>
    </form>
  </div>
</nav>
</div>

<div class ="order1">
  <table>
  <tr>
    <td>รับออเดอร์</td>
  </tr>
  </table>
</div>

<div class ="order2">
  <table>
  <tr>
    <td>ชำระเงิน</td>
  </tr>
  </table>
</div>

<div class ="order3">
  <table>
  <tr>
    <td>เตรียมพัสดุ</td>
  </tr>
  </table>
</div>

<div class ="order4">
  <table>
  <tr>
    <td>ส่งออกพัสดุ</td>
  </tr>
  </table>
</div>

<img class = "picorder1" src = img/order1.png width="220px">

<img class = "picorder2" src = img/order2.png width="220px">

<img class = "picorder3" src = img/order3.png width="220px">

<img class = "picorder4" src = img/order4.png width="220px">

</body>  
</html>