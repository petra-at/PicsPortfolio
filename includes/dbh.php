<?php

$servername = "eu-cdbr-west-02.cleardb.net"; 
$dbUsername="b37a6f5803ad20";
$dbPassword="4eOjaddh7XcR0dqi";
$dbName="heroku_bab555caa6e8527";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
