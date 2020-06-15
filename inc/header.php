<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath. '/../config/config.php');
	include_once ($filepath. '/../lib/Database.php');
	include_once ($filepath. '/../classes/Student.php');
?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Online Attendance System</title>

		<!-- Bootstrap core CSS and JS-->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="js/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="well text-center">
				<h2>Student Attendance System
					<a class="btn btn-default pull-left" href="index.php">Home</a>
				</h2>
			</div>
