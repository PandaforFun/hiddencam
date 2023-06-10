<?php
if(isset($_POST['submit']))
{
	$fn = $_POST['fname'];
	$ln = $_POST['lname'];
	$em = $_POST['email'];
	$mob = $_POST['mobile'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
	$branch = $_POST['branch'];
	$hobbies = $_POST['hobby'];
	$pass = $_POST['pass'];
 
	echo "Student Name : $fn $ln <br><br>";
	echo "Email : $em <br><br>";
	echo "Mobile : $mob <br><br>";
	echo "City : $city <br><br>";
	echo "Gender : $gender <br><br>";
	echo "Branch : $branch <br><br>";
	echo "<h3>Hobbies</h3>";
	$i=0;
	while($i<sizeof($hobbies))
	{
		echo $hobbies[$i]."<br>";
		$i++;
	}
}
?>