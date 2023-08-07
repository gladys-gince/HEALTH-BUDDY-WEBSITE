<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$docname = $_POST['docname'];
$whentovisit = $_POST['whentovisit'];
$visittime = $_POST['visittime'];

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO docvisit (docname, whentovisit, visittime) VALUES ('$docname', '$whentovisit', '$visittime')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header("location: location:sem4\dash.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
