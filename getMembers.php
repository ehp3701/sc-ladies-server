<?php
echo "TRYING";

// Connecting, selecting database
$dbconn = pg_connect(
    "host=ec2-54-159-107-189.compute-1.amazonaws.com 
    dbname=d4vupmidnt9lio 
    user=igqywybsdluyqg 
    password=7249b272a62aa3dd8811627fb3d1be4dfe052d015bd6c162834bcb92fe844598")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM authors';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// // Printing results in HTML
// echo "<table>\n";
// while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
//     echo "\t<tr>\n";
//     foreach ($line as $col_value) {
//         echo "\t\t<td>$col_value</td>\n";
//     }
//     echo "\t</tr>\n";
// }
// echo "</table>\n";

// // Free resultset
// pg_free_result($result);

// Closing connection
pg_close($dbconn);

echo "SUCCESS SUCCESS SUCCESS ";
?>