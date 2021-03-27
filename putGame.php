<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

echo "putGame.php";

$json = file_get_contents('php://input');
$data = json_decode($json);

$id = $data->id;
$gamedesc = $data->gamedesc;
$teamevent = $data->teamevent;

$sql = "UPDATE games  SET gamedesc = '$gamedesc', teamevent = '$teamevent' WHERE id = $id";

$dbconn = pg_connect(
    "host=ec2-18-208-49-190.compute-1.amazonaws.com
    dbname=d6fv2q17lqpnqe
    user=hlqlwhlsanjvke
    password=0b87775eab64e77490e65d6c639b9ddf782e62e3acccb0017d301dab571c0eb7"
)
    or die('Could not connect: ' . pg_last_error());

if ($result = pg_query($sql)) {
    echo "Data Updated Successfully.";
} else {
    echo "Error.";
}


pg_close($dbconn);
