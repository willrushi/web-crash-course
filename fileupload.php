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

	<title>Upload an image</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
  </head>

 
  <body>
	<?php 
		include "partials/nav.php";

	?>

	<div class="row" style="margin-top:50px;justify-content:center;">
		<h2>SafeImageHostSecure2020</h2>
	</div>
	<div class="row">
		<div class="col-4">
		</div>
		<div class="col-4" style="margin-top: 30px;">
			<form action="upload.php" id="imageForm" method="POST" enctype="multipart/form-data">
				<div class="form-group">
				Select image to upload:
				<input type="file" accept="image/*" class="form-control" name="fileToUpload" id="fileToUpload">
				</div>
				<button type="submit" class="btn btn-primary">Upload</button>
			</form>	
		</div>
	</div>

	<script type="text/javascript">
		let imageForm = document.getElementById("imageForm");

		imageForm.addEventListener('submit', (e)=>{
			e.preventDefault();
			var fuData = document.getElementById('fileToUpload');
			var FileUploadPath = fuData.value;
			var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
			//The file uploaded is an image
			if (Extension == "gif" || Extension == "png" || Extension == "bmp" || Extension == "jpeg" || Extension == "jpg") {
				imageForm.submit();
			}
			//The file upload is NOT an image
			else {
					alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
			}
		});
			
	</script>
  </body>
</html>
