<!DOCTYPE html>
<head>
	<title>Catalog</title>
</head>
<body style="background-color:#1723F2;">

<?php
session_start();

if(isset($_SESSION["login"])){
	echo "Login Success!<br/><br/>";
	$date = strtotime("+7 days",time());
	$uName=$_SESSION["ID"];
	setcookie("ID",$uName,$date);

}else{
	echo "Unable to login<br/>";
	echo "<a href='login page.php'>Back to login page</a>";
}


if(isset($_POST["Product"])){
	$_SESSION["Qty"] = $_POST["Qty"];
    $id = $_POST["Product"];
	$_SESSION["ID"] = $id;
	
	switch (strtoupper($id)) {
			case "1":
				$_SESSION["name"]="INDOMIE";
				$_SESSION["price"]="8";
				break;
			case "2":
				$_SESSION["Name"]="FACE MASK(x1)";
				$_SESSION["Price"]="4";
				break;
		}
		header("Location:addcart.php");
	}
?>

<h2>Product List~</h2>

<form action="catalog.php" method="POST">
Please Choose： <select name="Product">
			    	<option value="1">INDOMIE $8</option>
			 		<option value="2">FACE MASK $4</option>
		        </select> 

<input type="number" name="Qty"><br/><br/>
<input type="submit" value="Order">
</form><br/>

<a href="cart.php">Shopping Cart</a><br/><br/>
<a href='login.php'>Back to login page</a>

</body>
</html>