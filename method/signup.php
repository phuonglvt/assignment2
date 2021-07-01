<?php
require('dbconnect.php');
error_reporting(E_ERROR | E_PARSE);
?>

<?php

if (!empty($_POST)){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
}
$conn = new mysqli($host,$user ,$password,$db);
//query insert to database
    $query = "INSERT INTO `register` (`id`, `email`, `name`, `pwd`) VALUES (NULL, '".$email."', '".$name."', '".$pwd."');";
    $runcheck = mysqli_query($conn,$query);
    $conn->close();
?>