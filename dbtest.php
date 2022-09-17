<?php
$dbhost = getenv("172.18.0.1");
$dbport = getenv("3306");
$dbuser = getenv("chandana");
$dbpwd = getenv("parents");
$dbname = getenv("MaRa-I-ChaGe-CountEntry-DB");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
