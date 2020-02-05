<?php 
	session_start();
	include_once "db/db_connect.php";
	"
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	"
?>

<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

	<title>Dashboard Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
  </head>

  <body>
	<?php 
		include "partials/nav.php"; 	
		function login_check($username, $password, $conn){
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			if($row){
				return true;
			}else{
				return false;
			}
		}

		$login = login_check($_POST['username'], $_POST['password'], $db_conn);

		if($_POST){
			if($login){
				include "partials/sql1/adminpanel.php";
			}else{
				include "partials/sql1/loginfail.php";
			}
		}else{
			include "partials/sql1/login.php";
		}
	?>
  </body>
</html>
