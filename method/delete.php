<?php
require("../db/dbconnect.php");

$query = "DELETE FROM register where id ='".$_POST['id']."' ";
$result = mysqli_query($mysqli,$query);
$mysqli ->close();
header("location: ../admin/admin.php");
?>