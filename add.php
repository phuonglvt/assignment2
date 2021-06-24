<title> ADD DATABASE</title>
<?php
	include("local_config.php");
	$result = pg_query($pg_conn, "select * from product");
	
	$num_rows = pg_num_rows($result)
	$result = pg_Exec($conn, "Select * from product WHERE shop_name, product_id, product_name, price, amount='$shop'");
	if(!$result) {echo "A query error occurred.\n"; exit;}
	$shop_name = pg_Result($result, $shop, "shop_name");
	$product_id = pg_Result($result, $shop, "product_id");
	$product_name = pg_Result($result, $shop, "product_name");
	$price = pg_Result($result, $shop, "price");
	$amount = pg_Result($result, $shop, "amount");
	pg_FreeResult($result);
	pg_Close($conn);
	if(!$pg_conn)
	{
		die('Error: Could not connect: '. pg_last_error());
	}
?>
<html>
<body>
	<b>Please add the following: </b><font>
	<p><font size="2" face="Arial, Helvetica, san-serif">
	<form action="edit.php?ID=<?php echo $shop_name ?>" method="POST" enablecab="Yes">
	product_id: <br>
	<input type="Text" name="product_id" align="LEFT" requires="Yes" size="59"
	value=" <?php echo $product_id ?>"> <br>
	product_name: <br>
	<input type="Text" name="product_name" align="LEFT" requires="Yes" size="59"
	value=" <?php echo $product_name ?>"> <br>
	price: <br>
	<input type="Text" name="price" align="LEFT" requires="Yes" size="59"
	value=" <?php echo $price ?>"> <br>
	amount: <br>
	<input type="Text" name="amount" align="LEFT" requires="Yes" size="59"
	value=" <?php echo $amount ?>"> <br>
	</form>
</body>
</html>