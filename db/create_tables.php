<?php
	include_once 'db_connect.php';

	$sql = "CREATE TABLE IF NOT EXISTS users(
				id INT AUTO_INCREMENT PRIMARY KEY,
				username VARCHAR(20) NOT NULL UNIQUE,
				password VARCHAR(512) NOT NULL,
				name VARCHAR(40) NOT NULL,
				department VARCHAR(40) NOT NULL
			);
			INSERT INTO users (username, password, name, department) VALUES('pete_eden','password','Peter Eden','Cyber');
			INSERT INTO users (username, password, name, department) VALUES('andybellamy','one_direction_fan44','Andy Bellamy','Cyber');
			INSERT INTO users (username, password, name, department) VALUES('mamoun','IoT_lover_1','Mamoun Qasem','Computing');
			INSERT INTO users (username, password, name, department) VALUES('jwyburn','1timepad','John Wyburn','Mathematics');
			INSERT INTO users (username, password, name, department) VALUES('rdavies','\$2y\$12\$QcUWTyAZTcqca/NBLANX0.uLUqjWFsKWG3y3SsxdbrdK14IlF8G9G','Ross Davies','Cyber');
			CREATE TABLE IF NOT EXISTS credit_cards(
				name VARCHAR(20) PRIMARY KEY,
				card_number VARCHAR(20)
			);
			INSERT INTO credit_cards(name, card_number) VALUES ('Andy Bellamy', '3612-7935-5572-8124');
			INSERT INTO credit_cards(name, card_number) VALUES ('Peter Eden', '4715-7532-8524-2921');
			INSERT INTO credit_cards(name, card_number) VALUES ('Mamoun Qasem', '1337-1337-6969-4200');
			INSERT INTO credit_cards(name, card_number) VALUES ('John Wyburn', '5218-2142-0121-2911');
			INSERT INTO credit_cards(name, card_number) VALUES ('Ross Davies', '1502-5219-2212-9292');
			CREATE TABLE IF NOT EXISTS chatroom(
				name VARCHAR(20),
				message VARCHAR(500),
				time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
			);";

	echo $sql."<br><br>";

	$result = $db_conn->multi_query($sql);

	if($result){
		echo "Tables added successfully.";
	}else{
		echo "Error: " . htmlentities($db_conn->error);
	}
?>