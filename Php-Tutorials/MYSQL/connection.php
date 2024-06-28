<?php

$dbhost = 'localhost';
$dbuser = 'guest';
$dbpass = '@@faw*2$-';
$dbname = 'publications';
$conn  = mysql_connect($dbhost, $dbuser, $dbpass);

if (! $conn) {
    die ("Could not connect: " .mysql_error());
}

echo 'Connected succefully';
mysql_close($conn);
?>