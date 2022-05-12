<?php require $_SERVER['DOCUMENT_ROOT']."/Banphokankaset/login/autoload.php";?>
<?php
use Model\User;

$user_obj = new User;
$result = $user_obj->createUser($_POST);
if($result){
    header("location: /Banphokankaset/index.php");
} else {
    header("location: register.php?msg=error");
}
?>