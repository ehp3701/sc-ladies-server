<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$dbconn = pg_connect(
    "host=ec2-18-208-49-190.compute-1.amazonaws.com
    dbname=d6fv2q17lqpnqe
    user=hlqlwhlsanjvke
    password=0b87775eab64e77490e65d6c639b9ddf782e62e3acccb0017d301dab571c0eb7"
)
    or die('Could not connect: ' . pg_last_error());



 echo "<h1>putting game on server</h1>";
    
$sql = "INSERT INTO gamedesc (desc, treatment)
VALUES ('A test game', 'N')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>