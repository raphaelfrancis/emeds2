<?php
$servername = "localhost";
$username = "emeds";
$password = "Emeds123";
$dbname = "emeds";

// Create connection
$conn = mysql_connect($servername, $username, $password);
// Check connection
mysql_select_db($dbname);

?>