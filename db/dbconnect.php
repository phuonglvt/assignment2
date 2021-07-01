<?php
        $host ="localhost";
        $user ="root";
        $password ="";
        $db ="login";
        $mysqli = new mysqli($host,$user ,$password,$db);

// Check connection
if ($mysqli -> connect_errno) {
                                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                exit();
                            }
else{
    echo "connect successfuly";
}
?>