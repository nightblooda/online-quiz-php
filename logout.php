<?php 
session_start();
if(isset($_SESSION['email'])){
session_destroy();
setcookie("email", "", -1, "/");
}
$ref= @$_GET['q'];
header("location:$ref");
?>
