<?php
function db_connect() {
    $host = "localhost";
    $username = "username";
    $password = "";
    $dbname = "olshop";

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function db_close($conn) {
    $conn->close();
}
?>