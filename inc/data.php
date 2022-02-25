<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portcontact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO form (firstname, lastname, email, subject, message)
VALUES ('$fname', '$lname', '$email', '$subject', '$message')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>