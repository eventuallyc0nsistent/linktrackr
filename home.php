<?php 
require_once('mysql_connect.php');

if(isset($_GET['uid'])) {
  $id=$_GET['uid'];
  $query = "UPDATE users SET plugin_click=1 WHERE id=$id";
  $mysqli->query($query);
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>
			Phished!!!
		</title>
		<link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="include/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="well">
					<h2>
						What just Happened???
					</h2>
					<p>
						Don't Worry. This is an authorized Phishing Simulation conducted by AUS University
					</p>
					<p>
						This Simulation helps us understand, how Vulnerable we are to Phishing and helps us to prevent it in future.
					</p>
				</div>
		</div>
	</body>
</html>