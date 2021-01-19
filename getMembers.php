<?php
// Connecting, selecting database
$dbconn = pg_connect(
    "host=ec2-54-159-107-189.compute-1.amazonaws.com
    dbname=d4vupmidnt9lio
    user=igqywybsdluyqg
    password=7249b272a62aa3dd8811627fb3d1be4dfe052d015bd6c162834bcb92fe844598"
)
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM members';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

if (mysqli_num_rows($result) > 0) {
    $emparray = array();
    while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        array_push($emparray, $row);
    }
    echo json_encode($emparray);
} else {
    echo "0 results";
}

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
