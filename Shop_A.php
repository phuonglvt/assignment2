<?php
	include("local_config.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<title> ATN Shop Page </title>
</head>
<h1> PAGE FOR SHOP A </h1>
<body>
	<form action="" method="post">
		<input type="submit" name="updateButton"
			value="Update Data"/><br></br>
		<input type="submit" name="deleteButton"
			value="Delete Data"/><br></br>
	</form>

	<?php
		$shop = $_SESSION["shop"];
		if(isset($_POST['updateButton']))
		{
			echo "Update DB!";
		}
	?>
	<?php
		session_start();
		function exceptions_error_hander('exceptions_error_hander')
		{
			throw new Exception($message, 0, $severity, $filename, $lineno);
		}
		set_error_handler('exceptions_error_handler');
		$input = "Shop_A";
		$table_name = "product";
		include("local_config.php");
		include("db_display.php");
		
		if(isset($_POST['submitButton']))
		{
			$input = $_POST['db_selection'];
		}
		try
		{
			echo "<p> DATABSE FROM ".$input."</p>";
			$pg_heroku = pg_connect($conn_string);
			if($input == "ALL")
			{
				$result = pg_query($pg_heroku, "select * from ".$table_name);
			}
			else
			{
				$result = pg_query($pg_heroku, "select * from".$table_name."where shop_name='$input'");
			}
			display_table($result);
			pg_close();
		}
		catch (Exception $e)
		{
			echo "Caught exception: <br/>", $e->getMessage(), "\n";
		}
	?>
		
</body>
</html>