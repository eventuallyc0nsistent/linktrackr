<?php
require_once('mysql_connect.php');

$query = "SELECT * FROM users";
$results = $mysqli->query($query);
	

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>
			Results
		</title>
		<link href="include/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="include/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<table class="table">
				<tr>
					<th>User Email</th>
					<th>Has clicked email link ? </th>
					<th>Has clicked install plugin </th>
				</tr>
				<?php while ($row=$results->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $row['email'] ?></td>
					<td class="align-center"><?php echo $row['clicked_status'] ?  "YES" :  "NO" ; ?></td>
					<td class="text-center"><?php echo $row['plugin_click'] ?  "YES" :  "NO" ; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</body>
</html>