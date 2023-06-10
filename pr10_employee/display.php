<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for database connection errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query the database for all employee data
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

// Check for query errors and display all employee data in a table
if ($result !== false && $result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Address</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "No employee data found";
}

$conn->close();
?>
