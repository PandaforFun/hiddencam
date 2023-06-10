<?php
 $con=mysqli_connect('localhost','root','')or die("dd");
 if($con)
 {
  echo "<b>MYSQL server connected</b><br><br>";
 }
 $sql="CREATE DATABASE COMPANY";
 if($query=mysqli_query($con,$sql))
 {
  echo "<b>Database created </b><br><br>";
 }
 if(mysqli_select_db($con,'COMPANY'))
 {
  echo "<b>Database Connected </b><br><br>";
 }

 $TBL = 'CREATE TABLE `EMPLOYEE` (`NAME` VARCHAR(20) NOT NULL, `AGE` INT(5) NOT NULL)';
 if($query1=mysqli_query($con,$TBL))
 {
  echo "<b>Table 'EMPLOYEE' created </b><br><br>";
 }
 $INSERT="INSERT INTO EMPLOYEE(NAME,AGE) VALUES('Rishav',20),('Tanishk',20),('Aditya',19),('Shreesh',12)";
 if(mysqli_query($con,$INSERT))
 {
  echo "<b>Data inserted into table 'EMPLOYEE'</b><br><br>";
 }
 $select="SELECT * FROM EMPLOYEE";
 $get=mysqli_query($con,$select);
 while($raw=mysqli_fetch_array($get))
 {
  echo "<b>Data Retrieved From Table 'EMPLOYEE'</b><br><br>";
  echo "name = ".$raw['NAME']."<br>";
  echo "age = ".$raw['AGE']."<br><br>";
 }
 $drop='DROP DATABASE `COMPANY`'; 
 if(mysqli_query($con,$drop))
 {
  echo "<b>Database Dropped</b><br><br>";
 }
 $close=mysqli_close($con);
 if($close)
 {
  echo "<b>Connection Closed to MYSQL server";
 }
?>
