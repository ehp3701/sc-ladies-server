<?php

$key = $_GET("key");

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$dbconn = pg_connect(
    "host=ec2-18-208-49-190.compute-1.amazonaws.com
    dbname=d6fv2q17lqpnqe
    user=hlqlwhlsanjvke
    password=0b87775eab64e77490e65d6c639b9ddf782e62e3acccb0017d301dab571c0eb7"
)
    or die('Could not connect: ' . pg_last_error());

$query = "DELETE FROM gamedesc WHERE key=$key";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

if (pg_num_rows($result) > 0) {
    $emparray = array();
    while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        array_push($emparray, $row);
    }
    echo json_encode($emparray);
} else {
    echo "0 results";
}

pg_free_result($result);

pg_close($dbconn);
