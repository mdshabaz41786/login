<?php
$Servername = "localhost";
$username = "root";
$password = "";
$database = "loginpage";

$conn = mysqli_connect($Servername,$username,$password,$database);

if($conn) {
	//echo "connection is ok";
}
else {
	echo "not connect";
}
?>