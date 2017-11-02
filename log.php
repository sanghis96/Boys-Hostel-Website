<?php
//session_start();
$link = mysqli_connect('localhost', 'root', '', 'hostel');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$username = $_POST['user'];
$password = $_POST['psw'];
 
$result = mysqli_query($link,"select * from students where uname='$username' and password='$password'")
or die("falied to connect".mysql_error());

$row = mysqli_fetch_array($result);

if($row['uname'] == $username && $row['password']== $password ){
	//  $_SESSION['login_user'] = $username;

	print " login successful! ";
	//echo $_SESSION["login_user"];
	//header("location: dashboard.php");
}
else{
	print " invalid username password! ";
}
?>