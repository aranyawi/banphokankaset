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
  <!-- <style>
    body { 
  background-image:url('green.jpg');
  background-repeat : repeat-x;
  background-position: 0px 255px;
  }
 </style> -->

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
  <a class ="menu4" href="menu4.php" >ทดลองสินค้า</a> 
  <a class ="menu5s" href="menu5.php" >ติดต่อเรา</a>
</div>

<div class="container-fluid">
    <form action ="search.php" method ="POST" class ="d-flex" style="margin:auto;max-width:850px">
      <input type ="text" name = "sproduct" class="form-control me-2 px-3" placeholder="ค้นหาสินค้า..." >
      <input type="submit" value="Search" class="btn btn-success">
    </form>
</div>

<div class ="contact"><h1 style="font-size: 40px;">เปิดบริการทุกวัน 08.00 - 19.00 น.</h1> </div>
<div class ="contact2"><h2 style="font-size: 30px;">บ้านพ่อการเกษตร 2xx/7x หมู่ x ตำบล xx อำเภอ xx จังหวัด xx</h2></div>

<div class = " box2"  >
<a href="menu3.php"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16" style="color :black;">
  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
</svg> </div> </a>

  <a class = "underline" href="menu3.php">ติดตามสถานะการสั่งซื้อ</a> 

<div class = "phone">
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg></div>

<div class = "tel">0 7 x x x x x x x</div>

<a href="https://line.me/ti/p/wXO6BUEN5D"><img class ="line" src = "https://gmcstyle.com/wp-content/uploads/2019/08/line-icon.png" width= 110px></a>

<div class = "id">B a n P h o K a n K a s e t</div>

</body>  
</html>