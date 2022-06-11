<?php

// THIS IS USE EVERYTIME YOU CONNECT
// Production
$servername = "remotemysql.com"; 
$username = "mZ7cxdaVi5"; 
$password = "1dxcYWpySn"; 
$dbname = "mZ7cxdaVi5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>