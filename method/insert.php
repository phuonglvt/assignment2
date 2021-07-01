<?php
require_once("../db/dbconnect.php");

$query = "INSERT INTO `register` (`id`, `email`, `name`, `pwd`) VALUES (NULL, '".$_POST['email']."', '".$_POST['name']."', '".$_POST['pwd']."');";
$result = mysqli_query($mysqli,$query);
$mysqli ->close();
header("location: ../admin/admin.php");
?>