<?php
$servername = "localhost";
$dbname = "az_hotel";
$username = "root";
$password = "";
    $connect = mysqli_connect($servername,$username,$password,$dbname);
    
    if(!$connect)
    {
        die('Connection Failed! Please check Your Connection'.mysqli_connect_error());    
    }
?>