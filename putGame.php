<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

echo "putGame.php";

$json = file_get_contents('php://input');
$data = json_decode($json);

$key = $data->key;
$gamedesc = $data->gamedesc;
$teamevent = $data->teamevent;

$sql = "UPDATE gamedesc  SET gamedesc = '$gamedesc', teamevent = '$teamevent' WHERE key = $key";
echo $sql;

// $key = $data->key;
// $gamedesc = $data->gamedesc;
// $teamevent = $data->teamevent;

// $dbconn = pg_connect(
//     "host=ec2-18-208-49-190.compute-1.amazonaws.com
//     dbname=d6fv2q17lqpnqe
//     user=hlqlwhlsanjvke
//     password=0b87775eab64e77490e65d6c639b9ddf782e62e3acccb0017d301dab571c0eb7"
// )
//     or die('Could not connect: ' . pg_last_error());

// $sql = "UPDATE gamedesc  SET gamedesc = $gamedesc, teamevent = $teamevent WHERE key = $key";

// if ($result = pg_query($sql)) {
//     echo "Data Updated Successfully.";
// } else {
//     echo "Error.";
// }

echo $sql;

pg_close($dbconn);
