<?php
session_start();

if ( isset($_SESSION["ID"]) ) {
   $id = $_SESSION["ID"];
   $name = $_SESSION["Name"];
   $price = $_SESSION["Price"];
   $quantity = $_SESSION["Qty"];  

   setcookie($id."[ID]", $id, time()+3600);
   setcookie($id."[Name]", $name, time()+3600);
   setcookie($id."[Price]", $price, time()+3600);
   setcookie($id."[Qty]", $quantity, time()+3600);
}

header("Location:catalog.php");

?>