<?php

echo "Welcome to OpenShift Online Developer Preview";
echo "<br>To test the database, hit the dbtest.php URL";


echo "<br><br>This assumes that you have the correct env variables set";
echo "<BR><BR>The environment variables required are databaseuser, databasepassword, and databasenmae.";
$dbhost = getenv("127.8.0.1:3306");
$dbport = getenv("3306");
$dbuser = getenv("chandana");
$dbpwd = getenv("parents");
$dbname = getenv("MaRa-I-ChaGe-CountEntry-DB");

$mysqli = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname); 
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
