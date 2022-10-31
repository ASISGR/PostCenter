<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "postcenter";
$conn = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_errno()){
    echo "Failed to connect!";
    exit();
  }else {
  }

?>