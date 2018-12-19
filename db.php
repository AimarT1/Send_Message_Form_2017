<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aimarDB";
$db = new mysqli($servername, $username, $password, $dbname);
if ($db->connect_error) {
die("Ei õnnestunud luua ühendust: " . $db->connect_error);
}
?>