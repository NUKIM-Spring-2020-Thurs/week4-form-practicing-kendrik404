<?php
ob_start();
session_start();

$uid="html";
$upwd="12345678";

$id=$_POST["id"];
$pwd=$_POST["password"];

if($id==$uid && $pwd==$upwd){
	$_SESSION["login"]="S";
	$_SESSION["ID"]=$id;
	header('Location:catalog.php');

}else{
	$_SESSION["login"]="F";
	echo "<meta http-equiv='refresh' content='3;url=login.php'/>";
	header('Location:login.php');
}

?>