<?php
require_once("method/login.php");
?>
<!-------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>NewWeb</title>
</head>
<!-------------------------->
<body>
    <div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="" method="POST">
        <div class="form-group">
        <label for="uname">Email:</label>
        <input type="uname" class="form-control" id="email" placeholder="Enter email or username" name="uname">
        </div>
        
        <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        
        <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        
        <button type="submit" class="btn btn-default">Login</button>
    </form>

    
</body>
<!-------------------------->
</html>