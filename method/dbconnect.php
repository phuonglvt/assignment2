<?php
        $mysqli = pg_connect(
	host=ec2-54-167-152-185.compute-1.amazonaws.com
	dbname=dbcqmns0qplkj3
        user=kmrkvgmgcjpdfm
        password=858848643e0cd1fec1f34c4d79793fb8ff28b39c7a4d36d9dad7c25b214c6ca6
        );

// Check connection
if ($mysqli -> connect_errno) {
                                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                exit();
                            }
else{
    echo "connect successfuly";
}



?>
