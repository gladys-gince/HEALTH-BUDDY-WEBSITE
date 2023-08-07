<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = new mysqli($server, $username, $password, $database);

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$phno = $_POST['phno'];
$addr = $_POST['addr'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO profiles (fname, sname, phno, addr) VALUES ('$fname', '$sname', '$phno', '$addr')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("location:sem4\dash.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
