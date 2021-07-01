<?php
require_once("../db/dbconnect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop interface</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="container">
        <a href="../index.php"><button type="button" class="btn btn-secondary" >Logout</button></a>
        <br>    
        <br>
        <h2>Dabase table</h2>
        <p>Show data</p>            
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>email</th>
                <th>password</th>
                <th>name</th>
            </tr>
            </thead>
            <tbody>
                <?php
                        $select ="SELECT id, email, name, pwd from register";
                        $result = mysqli_query($mysqli, $select);
                        if ($result -> num_rows >0){
                            while($row = $result ->fetch_assoc()){
                                echo "<tr><td>".$row["id"]."</td>";
                                
                                echo "<td>".$row["email"]."</td>";
                                
                                echo "<td>".$row["name"]."</td>";
                                
                                echo "<td>".$row["pwd"]."</td></tr>";
                                
                            }
                        }
                        $mysqli ->close();
                   ?>
            </tbody>
        </table>
        </div>
        <div class="container" >
                                <!---insert -->
                <form action="../method/insert.php" method="POST" style="width: 40%; float:left;">    
                    <div class="form-group">
                    ADD USER: 
                    <br><label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>

                    <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>

                    <div class="form-group">
                    <label for="Name">Name:</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>

                    <button type="submit" class="btn btn-default">ADD USER</button>
                </form>

                                <!---update -->

                <form action="../method/update.php" method="POST" style="width: 40%; float:right"> 
                UPDATE:  
                    <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="id" class="form-control" id="ID" placeholder="Enter id" name="id">
                    </div>
                
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>

                    <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>

                    <div class="form-group">
                    <label for="Name">Name:</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>

                    <button type="submit" class="btn btn-default">UPDATE</button>
                </form>

                                <!---delete -->
                     
                <form action="../method/delete.php" method="POST" style="width: 40%; float:left; "> 
                <br> <br> <br> 
                DELETE:
                    <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="id" class="form-control" id="ID" placeholder="Enter id" name="id">
                    </div> 
                    <button type="submit" class="btn btn-default">DELETE</button>
                </form>
        </div>    
</html>