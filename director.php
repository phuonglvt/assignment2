<?php
	$page = $_SERVER['PHP_SELF'];
	$sec = "10";
?>
<html>
<head>
	<meta http-equiv="refresh" content="<?php echo $sec?>; URL='<?php echo $page?>'">
</head>
<h1> PAGE FOR DIRECTOR BOARD </h1>
<body>
	<p> Select a shop's database </p>
	<form action="" method="post">
		<select name = "db_selection">
			<option value = "Shop_A" >Shop_A</option>
			<option value = "Shop_B" >Shop_B</option>
			<option value = "ALL" >All shops</option>
		</select><br/>
		<input type="submit" name="submitButton" value="Submit"/>
	</form>
	
	<?php 
		session_start();
		function exceptions_error_handler($severity, $message, $filename, $lineno)
		{
			throw new ErrorException($message, 0, $severity, $filename, $lineno);
		}
		
		set_error_handler('exceptions_error_handler');
		$input = "ALL";
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
	</br>
</body>
</html>