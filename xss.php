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

	<title>SecureChat v9000</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
  </head>

 
  <body>
	<?php 
		include "partials/nav.php";

		if($_POST['name'] && $_POST['message']){
			$sql = "INSERT INTO chatroom(name,message) VALUES (?,?)";
			
			$statement = $db_conn->prepare($sql);

			if($statement !== false){
				$statement->bind_param('ss', $_POST['name'], $_POST['message']);
				if($statement->execute()){
					
				}else{
					echo "Could not add message to db";
				}
			}
		}

		function get_comments($conn){
			$return = array();

			$sql = "SELECT name,message FROM chatroom ORDER BY time DESC";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$return[] = $row;
				}
			}
			return $return;
		}
	?>

	<div class="row" style="margin-top:50px;justify-content:center;">
		<h2>SecureChat v9000</h2>
	</div>
	<div class="row" style="justify-content:center;">
		<?php 
				if($_SESSION['admin'] === true){
					echo "<h3 style='color:rgb(236, 164, 56)'>✧・ﾟ:* Logged in as admin *:・ﾟ✧ -</h3>";
				}
		?>
	</div>
	<div class="row">
		<div class="col-3">
		</div>
		<div class="col-6" style="margin-top: 30px;">
			<form action="xss.php" class="row" method="POST">
				<div class="form-group" style="width:80%;margin-bottom:0px">
					<input type="text" name="name" style="width:31%;height:100%" placeholder="Name"></input><!--
				--><input type="text" name="message" style="width:69%;height:100%;" placeholder="Enter message"></input><!--
				--></div><!--
			--><button type="submit" class="btn btn-primary" style="width:20%;height:38px;">Send</button>
			</form>	
		</div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<table class="table table-striped table-dark">
				<?php
				echo $_SESSION['admin'] ? "<tbody class='admin'>" : "<tbody>";					
					foreach(get_comments($db_conn) as $row){
						$name = $row['name'];
						$message = $row['message'];
						echo "
						<tr>
							<th scope='row'>$name</th>
							<td>$message</td>
						";
						echo $_SESSION['admin'] ? "<td><a href='#'>Delete</a><td>" : "";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
  </body>
</html>
