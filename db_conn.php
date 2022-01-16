<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db = "test";

$conn = mysqli_connect($sname, $uname, $password, $db);
if (!$conn) {
  die("Connection failed: ");
} else {
  echo "Connected successfully";
  echo '<br/>';
}
