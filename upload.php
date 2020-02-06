<?php

$directory = "uploads/";
$target_file = $directory.basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(file_exists($target_file)){
	echo "File already exists";
	$uploadOk = 0;
}

if($uploadOk === 1){
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded to /uploads/". basename( $_FILES["fileToUpload"]["name"]);
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}

?>