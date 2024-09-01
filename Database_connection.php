<?php
 $hostname = "localhost";
 $user = "root";
 $pass = "";
 $database = "landlord";
 $db = new mysqli($hostname,$user,$pass,$database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>