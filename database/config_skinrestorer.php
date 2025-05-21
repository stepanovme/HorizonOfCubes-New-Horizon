<?php
$servername = "localhost";
$username = "root";
$password = "bN_vkSL4O1";
$dbname = "SkinRestorer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>