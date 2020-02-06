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
		<div class="col-4">
		</div>
		<div class="col-4" style="margin-top: 30px;">
			<form action="pathtraversal.php" method="POST">
				<div class="form-group">
					<label for="picture_url">Choose a picture</label>
					<select name="picture_url" class="form-control" id="pictureSelect">
					<option>birthday_seal.png</option>
					<option>seal_tongue.png</option>
					<option>sleeping_seal.png</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Search</button>
			</form>	
		</div>
	</div>
	<div class="row" style="margin-top:50px;">
	<div class="col-4"></div>
	<div class="col-4">
		<?php
		if($file){
			echo "<img src='getimage.php?file=images/$file' width='600px'>";
		}
		?>
	</div>
	</div>
  </body>
</html>
