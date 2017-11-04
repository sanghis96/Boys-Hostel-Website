<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = 'tiger';

$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password, 'hostel');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>