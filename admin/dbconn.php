<?php
$conn = mysqli_connect("localhost", "root", "", "20212_wp2_4120200016");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>