<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert employee data into the database
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];

  // Sanitize input data to prevent SQL injection attacks
  $name = mysqli_real_escape_string($conn, $name);
  $email = mysqli_real_escape_string($conn, $email);
  $phone = mysqli_real_escape_string($conn, $phone);
  $address = mysqli_real_escape_string($conn, $address);

  $sql = "INSERT INTO employees (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
  if ($conn->query($sql) === TRUE) {
    echo "Employee data inserted successfully";
  } else {
    echo "Error inserting employee data: " . $conn->error;
  }
}

// Redirect to display page when display button is clicked
if (isset($_POST["display"])) {
  header("Location: display.php");
  exit();
}

$conn->close();
?>

<!-- HTML form for entering employee data -->
<form method="post">
  <label>Name:</label><input type="text" name="name"><br>
  <label>Email:</label><input type="email" name="email"><br>
  <label>Phone:</label><input type="tel" name="phone"><br>
  <label>Address:</label><textarea name="address"></textarea><br>
  <input type="submit" name="submit" value="Submit">
  <input type="submit" name="display" value="Display">
</form>
