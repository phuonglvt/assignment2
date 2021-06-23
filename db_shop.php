<?php
	include("local_config.php");
	$shop = $_GET["shop_name"];
?>
<html>
<head>
	<title>Data Shop <?php echo $shop; ?></title>
</head>
<body>
	<form method="post" action="">
		<button type="submit" name="log_out" value="Log Out">Log Out</button><br></br>
		<button type="submit" name="sell" value="sell">Insert Data For Sell</button><br></br>
		<button type="submit" name="import" value="import">Insert Data For Import</button><br></br>
	</form>
	<p> Data for <?php echo $shop; ?> </p>
	<?php
		if(isset($_POST['log_out'])
		{
			header("Location: login.php");
		}
	?>
	<?php
		include("db_display.php");
		$pg_heroku = pg_connect($conn_string);
		$table = "product";
		$result = pg_query($pg_heroku, "select * from ".$table." where shop_name = '$shop';");
		display_table($result);
		pg_close();
	?>
</body>
</html>