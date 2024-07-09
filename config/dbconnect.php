<?php
// Inserting constants content
require_once "constants.php";

// Create the database connection
$dbConn = new mysqli(HOSTNAME, HOSTUSER, HOSTPASS, DBNAME);

// Verify the connection
if($dbConn->connect_error){
    die("Connection Failed: " . $dbConn->connect_error);
}else{
    echo "The connection was successful!!!";
}
http://localhost/jersey_store/config/dbconnect.php
?>