<?php  

$sname = "localhost";
$uname = "root";
$password = "HELLO@4321";

$db_name = "test1";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}