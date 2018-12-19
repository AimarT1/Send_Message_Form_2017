<?php
$servername = "192.168.1.35";
$username = "root";
$password = "";
$dbname = "aimarDB";
$db = new mysqli($servername, $username, $password, $dbname);
if ($db->connect_error) {
die("Ei õnnestunud luua ühendust: " . $db->connect_error);
}
?>