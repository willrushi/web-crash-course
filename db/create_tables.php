<?php
	include_once 'db_connect.php';

	$sql = "CREATE TABLE IF NOT EXISTS users(
				username VARCHAR(20) NOT NULL PRIMARY KEY,
				password VARCHAR(512) NOT NULL
			);
			INSERT INTO users VALUES('pete_eden','password');
			INSERT INTO users VALUES('andybellamy','one_direction_fan44');
			INSERT INTO users VALUES('mamoun','IoT_lover_1');
			INSERT INTO users VALUES('rdavies','\$2y\$12\$QcUWTyAZTcqca/NBLANX0.uLUqjWFsKWG3y3SsxdbrdK14IlF8G9G');
			";

	$result = $db_conn->multi_query($sql);

	if($result){
		echo "Tables added successfully.";
	}else{
		echo "Error: " . htmlentities($db_conn->error);
	}
?>