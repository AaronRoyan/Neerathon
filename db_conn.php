<?php
// $sname = "localhost";
// $uname = "root";
// $password = "";
// $db = "test";
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
$mysqli->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
$mysqli->close();
$sname = "a2ogxx1mhuvt.ap-south-2.psdb.cloud";
$uname = "doyagxmd6i8i";
$password = "pscale_pw_sYKQ787cimuY4PugL1F6h0oSwFkCIFAfuNWR552IHyg  ";
$db = "neerathon";

$conn = mysqli_connect($sname, $uname, $password, $db);
if (!$conn) {
  die("Connection failed: ");
} else {
  echo "Connected successfully";
  echo '<br/>';
}
