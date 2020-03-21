<?php
			echo '<!DOCTYPE html>
<html lang="en">
<head>
<title>home||Crime detect</title>
	<link rel="stylesheet" type="text/css" href="radmin.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="admhome.html">Home</a></li>
     </ul>
  </div>
</nav>';
			echo "<ol>";
			$conn = mysqli_connect("localhost","root","","crimedetect");
            $sql="select * from log where category='0'";
			$m=mysqli_query($conn,$sql);
			echo '<center><table><tr><th><h2><u>Username</u></h2></th></tr>';
			while($row= mysqli_fetch_array($m)){
			echo '<tr>
			<td><h3><font color="black">' .$row['usr'].'</h3></td>
			</tr>';
			}
			echo '</center></table>';
?>