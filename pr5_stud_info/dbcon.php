<?php
echo "Database Connection<br>";
$hostname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($hostname,$username,$password);
echo "Connection Successful";
?>