<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ATN SHOP PAGE </title>
</head>
<h1> PAGE FOR YOU </h1>

<body>
	<form action="" method="post">
		<input type="submit" name="sellButton"
			value="Input sell data"/> <br></br>
		<input type="submit" name="takeButton"
			value="Input intake data"/> <br></br>
	</form>
	<?php
		session_start();
		$shop = $_SESSION["shop"];
		if(isset($_POST['sellButton']))
			{
				echo "Update DB!";
			}
		/*if(isset($_POST['takeButton']))
			{
				header("Location: takein.php?shop-$shop");
			} */ 
	?>
	<p> Data for <?php echo $shop;?>	</p>
	<?php
		include("local_config.php");
		include("db_display.php");
		$pg_heroku = pg_connect($conn_string);
		$table = "product";
		$result = pg_query($pg_heroku,"select * from " .$table." where shop_name='$shop';");
		display_table($result);
		pg_close();
	?>
</body>
</html>