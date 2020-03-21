<!DOCTYPE html>
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
<img src="logo.png"  width="25%" height="100px">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="radmin.html">Home</a></li>
	  <li class="active"><a href="display.php">Evidence</a></li>
     </ul>
  </div>
</nav>
<marquee>Help line : 000-111-222 </marquee>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)"
  class="closebtn"
  onclick="closeNav()">&times;</a>

  <a href="display.php">Police</a>
  <a href="incometax.php">Income Tax</a>
  <a href="narcotics.php">Narcotics</a>
  <a href="forest.php">Forest</a>

</div>


<span style="font-size:30px;cursor:
pointer"onclick="openNav()">&#9776; CATEGERY
</span>

<script> 

function openNav() {
 document.getElementById("mySidenav")
 .style.width="250px";
}

function closeNav() {
 document.getElementById("mySidenav")
 .style.width = "0";
}
</script>

<center><h1>FOREST</h1></center>
<div class="wrapper">
<?php include("forestimg.php")?>
</div>
</body>
</html>