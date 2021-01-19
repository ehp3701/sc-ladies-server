<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$servername = "us-cdbr-east-02.cleardb.com";
$username = "bba24055c8d688";
$password = "3f77c22e";
$dbname = "heroku_53af93e86477739";

/* $servername = "localhost";
$username = "ehp";
$password = "ehp";
$dbname = "steelclubladies"; */

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM members order by lastname;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $emparray = array();
  while($row =mysqli_fetch_assoc($result))
  {
    array_push($emparray,$row);
  }
  echo json_encode($emparray);
} else {
  echo "0 results";
}


mysqli_close($conn);
?>