<?php
$servername = "localhost";
$username = "root";
$password = "Willroot1!";
$db = "webcrashcourse";

$db_conn = mysqli_connect($servername, $username, $password, $db);

if (!$db_conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>