<?php
	include_once 'db_connect.php';

	$sql = "DROP TABLE users; DROP TABLE credit_cards; DROP TABLE chatroom;";

	echo $sql."<br><br>";

	$result = $db_conn->multi_query($sql);

	if($result){
		echo "Tables added successfully.";
	}else{
		echo "Error: " . htmlentities($db_conn->error);
	}
?>