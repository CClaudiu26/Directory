<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "companydirectory";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

?>
