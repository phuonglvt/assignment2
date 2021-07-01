<?php
require_once("../db/dbconnect.php");
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
else{
echo "connect successfuly";
}
$query = "UPDATE register SET email = '".$_POST['email']."', name = '".$_POST['name']."',  pwd = '".$_POST['pwd']."' WHERE  id ='".$_POST['id']."' ";
$result = mysqli_query($mysqli,$query);
$mysqli ->close();
header("location: ../admin/admin.php");
?>