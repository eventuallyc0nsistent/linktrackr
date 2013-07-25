<?
require_once('header.php'); 
require_once('mysql_connect.php');

if(isset($_GET['uid'])) {
  $id=$_GET['uid'];
  $query = "UPDATE users SET clicked_status=1 WHERE id=$id";
  $mysqli->query($query);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="/stylesheets/error.css" rel="stylesheet">
    <title>Missing a Plugin</title>
    <style type="text/css">
      body
        {
          margin:0;
          padding:0;
        }
      .container
        {
          position:relative;
          width:100%;
        }
      .centered {
          margin-left: 30%;
          margin-top: 5%;
        }
    </style>
</head>
<body>
  <div class="centered">
    <a href="#">
      <img src="img/missingplugin2.jpg" alt="Download Now">
    </a>
  </div>
</body>
</html>