<?php
 session_start();
 if(!$_SESSION['login']) {
   header("location: /Banphokankaset/login/login.php");
   exit;
 }

 require_once('dbcontroller.php');
 $db_handle = new DBController();
 if(!empty($_GET["action"])){
   switch($_GET["action"]) {
     case "add":
        if(!empty($_POST["quantity"])){
          $productByCode = $db_handle->runQuery("SELECT * FROM mower WHERE model='" . $_GET["model"] . "'");
          $itemArray = array($productByCode[0]["model"]=>(array('brand'=>$productByCode[0]['brand'],
                                                                  'model'=>$productByCode[0]['model'],   
                                                                  'mower_id'=>$productByCode[0]["mower_id"],
                                                                  'quantity'=>$_POST["quantity"],
                                                                  'price'=>$productByCode[0]["price"],
                                                                  'image_url'=>$productByCode[0]["image_url"])));
        }

        if(!empty($_SESSION["cart_item"])){
          if(in_array($productByCode[0]["mower_id"],array_keys($_SESSION["cart_item"]))){
            foreach($_SESSION["cart_item"] as $k => $v){
              if($productByCode[0]["model"] == $k){
                if(empty($_SERVER["cart_item"][$k]["quantity"])){
                  $_SESSION["cart_item"][$k]["quantity"]=0;
                }
                $_SESSION["cart"][$k]["quantity"] += $_POST["quantity"];
              }
            }
          }else{
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
          }
        } else{
          $_SESSION["cart_item"] = $itemArray;
        }
        break;

        case "remove" :
          if(!empty($_SESSION["cart_item"])){
            foreach($_SESSION["cart_item"] as $k => $v){
              if($_GET["model"] == $k){
                unset($_SESSION["cart_item"][$k]);
              }

              if(empty($_SESSION["cart_item"])){
                unset($_SESSION["cart_item"]);
              }
            }
        }
      break;
      case "empty":
        unset($_SESSION["cart_item"]);
        break;

   }
 }
 $total_price = "0";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/addproduct.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="styles.css">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<a href = "index.php"><img class ="logo" src = "img/logo.jpg"  width= 230px></a>

<div class = member><div class="d-inline-flex p-2 text-light bg-success">
   <?php echo "{$_SESSION['name']} ({$_SESSION['role']})";?></div></div>
 <div class = logout>
  <a class="btn btn-danger p-2" href ="/Banphokankaset/login/logout.php">Logout</a>
</div>
  
 
  <div id="shopping-cart">
    <div class ="txt-heading"><td>สรุปรายการสั่งซื้อ</td>
</div>
    <div class = "empty"><a href ="cart.php?action=empty" id= "btnEmpty">Empty Cart</a></div>

    <?php
    if(isset($_SESSION["cart_item"])){
        $total_quantity = 0;
        $total_price = 0 ;
    
    ?>
    <table class="banpho-cart" cellpadding="7" cellspacing="1">
      <tbody>
        <tr style="background-color: #549560;">
          <th style="text-align:left;">Brand</th>
          <th style="text-align:left;">Model</th>
          <th style="text-align:right;" width="5%">Quantity</th>
          <th style="text-align:right;" width="10%">Unit Price</th>
          <th style="text-align:right;" width="10%">Price</th>
          <th style="text-align:center;"width="5%">Remove</th>
        </tr>

        <?php
          foreach($_SESSION["cart_item"] as $item){
            $item_price = $item["quantity"] * $item["price"];
        ?>
        <tr>

        <?php 
?>
        <td>
          <img src ="<?php echo $item["image_url"];?>" width="90px" class="cart-item-image" alt"">
          <?php echo $item["brand"];?>
        </td>
          <td><?php echo $item["model"];?></td>
          <td style="text-align: right;"><?php echo $item["quantity"];?></td>
          <td style="text-align: right;">฿ <?php echo $item["price"];?></td>
          <td style="text-align: right;">฿ <?php echo number_format($item_price,2);?></td>
          <td style="text-align: center"><a href="cart.php?action=remove&model=<?php echo $item["model"];?>
          "class="btnRemoveAction"><img src="img/delete.png" width="30px" alt="Remove Item"></a></td>
          
        </tr>
        
<?php
        $total_quantity += $item["quantity"];
        $total_price += ($item["price"] * $item["quantity"]);
      };  
?>
        <tr>
          <td colspan="2" align="right"> Total :</td>
          <td align="right"><?php echo $total_quantity; ?></td>
          <td align="right" colspan="2"><?php echo "฿ " .number_format($total_price, 2);?></td>
          <td align="right"><input type="button" type="submit" value="สั่งซื้อ" class="btn btn-success" onclick="window.location='confirm.php';" /></td>
        </tr>
      </tbody>
    </table>
    <?php 
    } else {
    ?>
        <div class="no-records">Your Cart Is Empty</div>
    <?php
    }
    ?>
  </div>


</body>
</html>