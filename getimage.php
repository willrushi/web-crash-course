<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$file = $_GET['file'];
if(substr($file,-3) !== "log"){
	$finfo = finfo_open(FILEINFO_MIME_TYPE);
	$type = finfo_file($finfo, $file);
	finfo_close($finfo);
	header('Content-Type:'.$type);
	header('Content-Length: ' . filesize($file));
}
include $file;
?>