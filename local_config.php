<?php
	$host_db = "ec2-54-167-152-185.compute-1.amazonaws.com";
	$db_name = "dbcqmns0qplkj3";
	$db_user = "kmrkvgmgcjpdfm";
	$db_pass = "858848643e0cd1fec1f34c4d79793fb8ff28b39c7a4d36d9dad7c25b214c6ca6";
	
	$conn_string = "host = $host_db port = 5432 dbname = $db_name user = $db_user password = $db_pass";
	$pg_conn = pg_connect($conn_string);
?>