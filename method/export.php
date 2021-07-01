<?php
require("../db/dbconnect.php");
if (isset($_POST["export"]))
{
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen( "php://output", "w");
    fputcsv($output, array('id', 'name','email','pwd'));
    $query = "SELECT * from register ORDER BY id DESC";
    $result = mysqli_query($mysqli,$query);
    while($row = mysqli_fetch_assoc($result)){
        fputcsv($output,$row);
    }
    fclose($output);
}
?>