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

	<title>Dashboard Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
  </head>

  <body>
	<?php 
		include "partials/nav.php";

		function get_department_data($name,$conn){
			$out_array = array();
			$sql = "SELECT id, name, department FROM users WHERE name = '$name'";
			$result = $conn->query($sql);
			if($result){
				while($row = $result->fetch_assoc()){
					$out_array[] = $row;
				}
			}
			return $out_array;
		}

		function print_row($id, $name, $department){
			return "<tr>
					<td>$id</td>
					<td>$name</td>
					<td>$department</td>
				 </tr>";
		}

		$name = $_POST['name'];

		$department_data = get_department_data($name, $db_conn);
		
		echo '
				<div class="row" style="margin-top:50px;justify-content:center;">
					<h2>Staff department lookup</h2>
				</div>
				<div class="row">
					<div class="col-4">
					</div>
					<div class="col-4" style="margin-top: 30px;">
						<form action="sql2.php" method="POST">
							<div class="form-group">
								<label for="name">Staff member</label>
								<input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
							</div>
							<button type="submit" class="btn btn-primary">Search</button>
						</form>	
					</div>
				</div>
				<div class="row" style="margin-top:50px;">
				<div class="col-3"></div>
				<div class="col-6">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Name</th>
								<th scope="col">Department</th>
							</tr>
						</thead>
						<tbody>';
						foreach($department_data as &$row){
							echo print_row($row['id'], $row['name'], $row['department']);
						}
						echo '</tbody>
					</table>
				</div>
				</div>
				';
	?>
  </body>
</html>
