<?php 
	session_start();
	include_once "db/db_connect.php";
	
?>

<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

	<title>IP Lookup</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
  </head>

 
  <body>
	<?php 
		include "partials/nav.php";

		$command = "nslookup ".$_POST["command"];

		$result = shell_exec($command);
	?>

	<div class="row" style="margin-top:50px;justify-content:center;">
		<h2>Domain to IP address lookup</h2>
	</div>
	<div class="row">
		<div class="col-4">
		</div>
		<div class="col-4" style="margin-top: 30px;">
			<form action="commandinjection.php" method="POST">
				<div class="form-group">
					<label for="name">Domain to query</label>
					<input name="command" type="text" class="form-control" id="name" placeholder="Enter domain">
				</div>
				<button type="submit" class="btn btn-primary">Search</button>
			</form>	
		</div>
	</div>
	<div class="row" style="margin-top:50px;">
	<div class="col-4"></div>
	<div class="col-4">
		<?php echo "<h4>.$result.</h4>"; ?>
	</div>
	</div>
  </body>
</html>
