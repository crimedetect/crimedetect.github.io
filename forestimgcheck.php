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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="radmin.php">Home</a></li>
	  	  <li class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="check.html">Evidence Check<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="active"><a href="policeimgcheck.php">IMAGE</a></li>
          <li><a href="policevidcheck.php">VIDEO</a></li>
        </ul>
      </li>
     </ul>
  </div>
</nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)"
  class="closebtn"
  onclick="closeNav()">&times;</a>
  
  <a href="policeimgcheck.php">Police</a>
  <a href="incometaximgcheck.php">Income Tax</a>
  <a href="narcoticsimgcheck.php">Narcotics</a>
  <a href="forestimgcheck.php">Forest</a>

</div>


<span style="font-size:30px;cursor:
pointer"onclick="openNav()">&#9776; CATEGORY
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
<?php include("forestimgcheck1.php")?>
</div>
</body>
</html>