<?php 
	session_start();
	include_once "db/db_connect.php";
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
?>

<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

	<title>Chatroom</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
  </head>

 
  <body>
	<?php 
		include "partials/nav.php";

	?>

	<div class="row" style="margin-top:50px;justify-content:center;">
		<h2>SecureChat v9000</h2>
	</div>
	<div class="row">
		<div class="col-3">
		</div>
		<div class="col-6" style="margin-top: 30px;">
			<form action="xss.php" class="row" method="POST">
				<div class="form-group" style="width:80%;margin-bottom:0px;margin-right:-10px">
					<input type="text" name="name" style="width:30%;height:100%" placeholder="Name"></input><!--
				--><input type="text" name="message" style="width:69%;height:100%;" placeholder="Enter message"></input><!--
				--></div><!--
			--><button type="submit" class="btn btn-primary" style="width:20%;height:38px;">Send</button>
			</form>	
		</div>
	</div>
	
  </body>
</html>
