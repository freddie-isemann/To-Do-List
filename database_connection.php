<?php
function openConnection() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "phpXJ0461!";
    $dbname = "accounts";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n". $conn -> error);
    return $conn; 
}
function closeConnection($conn) {
    $conn -> close();
}
?>
