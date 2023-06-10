<?php
 $con=mysqli_connect('localhost','root','','amazon');
?>
<html>
<head>
<title>Display From Database</title>
</head>
<table border="1">
 <tr>
  <th>ID</th><th>NAME</th><th>CATEGORY</th><th>PRICE</th><th>AVAILABILITY</th>
 </tr>
 <?php
 $sql="SELECT * FROM products";
 $query=mysqli_query($con,$sql);
 while($raw=mysqli_fetch_assoc($query))
 {
 ?>
 <tr>
  <td><?php echo $raw['id'] ?></td>
  <td><?php echo $raw['name'] ?></td>
  <td><?php echo $raw['category'] ?></td>
  <td><?php echo $raw['price'] ?></td>
  <td><?php echo $raw['avail'] ?></td>
 </tr>
 <?php
 }
 ?> 
</table>