<!DOCTYPE html>
<html lang="en">
<head>
<title>home||Crime detect</title>
	<link rel="stylesheet" type="text/css" href="radmin.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" type="text/css" href="loadstyle.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>

<body onload="myfunction()">
<div id='preloader'>
<div class="loader">
	<div class="loader-inner">
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
	</div>
</div>
</div>
    <script>
    
        var preloader1=document.getElementById('preloader');
        
        function myfunction(){
            preloader1.style.display='none';
        }
    </script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="regionaladmin.php">Home</a></li>
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

<center><h1>NARCOTICS</h1></center>
<div class="wrapper">
<?php include("narcoticsimgcheck1.php")?>
</div>
</body>
</html>