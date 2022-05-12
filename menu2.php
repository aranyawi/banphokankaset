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
    body { 
  background-image:url('img/green.jpg');
  background-repeat : repeat-x;
  background-position: 0px 255px;
}
   table,td,tr{
    border: 3px solid;
    height: 65px;
    width: 200px;
    text-align: center;
    background-color:white;
    font-size: 22px
    
  }
  .button {
    background-color: black;
    border: none;
    color: lightgrey;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 2px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
  }
  .button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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
  <a class ="menu2s" href="menu2.php" >แจ้งชำระเงิน</a>
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
  

<div class ="sum">
  <table>
  <tr>
    <td>สรุปรายการสั่งซื้อ</td>
  </tr>
  </table>
</div>

<div class="form">
<form action="action_page.php">
  <fieldset>
    <legend style = "font-size : 26px">ที่อยู่จัดส่ง/ข้อมูลติดต่อ:</legend>
    ชื่อ-นามสกุล:<br>
    <input type="text" name="name"><br>
    ที่อยู่:<br>
    <input type="text" name="address"><br>
    ตำบล:<br>
    <input type="text" name="subdistrict"><br>
    อำเภอ:<br>
    <input type="text" name="district"><br>
    จังหวัด:<br>
    <input type="text" name="province"><br>
    รหัสไปรษณีย์:<br>
    <input type="text" name="zip"><br>
    เบอร์โทร:<br>
    <input type="text" name="tel"><br>
    E-mail:<br>
    <input type="text" name="mail"><br>
    หมายเหตุ : <br>
    <textarea name = "note"  rows="5" cols="35"></textarea></br>
  </fieldset>
  <input type="radio" name="gender" value="male" checked>ต้องการใบกำกับภาษี<br>
  <input type="radio" name="gender" value="male" checked>ไม่ต้องการใบกำกับภาษี<br>
</form>
</div>

<div class = "butsub">
  <button class="button button2">บันทึก</button>
</div>  

</body>  
</html>