<?php

echo "Welcome to OpenShift Online Developer Preview";
echo "<br>To test the database, hit the dbtest.php URL";


echo "<br><br>This assumes that you have the correct env variables set";
echo "<BR><BR>The environment variables required are databaseuser, databasepassword, and databasenmae.";

$dbhost = getenv("172.18.0.1");
$dbport = getenv("3306");
$dbuser = getenv("chandana");
$dbpwd = getenv("parents");
$dbname = getenv("MaRa-I-ChaGe-CountEntry-DB");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error, $dbhost, $dbuser, $dbpwd, $dbname);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
