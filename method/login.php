<?php
require_once("dbconnect.php");
error_reporting(E_ERROR | E_PARSE);
login();
checkLogin();
function login(){
    
    if(!empty($_POST)){
        $uname=$_POST['username'];
        $pwd=$_POST['password'];
		$shop=$_POST['shop_name'];
        echo $uname."-".$pwd."-".$shop;
    }
}
function checkLogin(){
    global $mysqli;
    $query1  = "SELECT * FROM user_table where username = 'admin'";
    $result = mysqli_query($mysqli,$query1);
    if(mysqli_num_rows($result) > 0 ){
        header("location: ../admin/admin.php");
    }else {
        $query2  = "SELECT * FROM user_table where username = '".$_POST['username']."'and pwd = '".$_POST['password']."'and shop_name != 'boss'";
        $result = mysqli_query($mysqli,$query2);
        if(mysqli_num_rows($result)>0){
            header("location: ../shop/shopinterface.php");
        }

    }
}

?>
