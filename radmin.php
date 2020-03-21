<?php
session_start();
if(!empty($_SESSION['username']))
{
	?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>home||Crime detect</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
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
      <li class="active"><a href="radmin.php">Home</a></li>
	  <li><a href="check.html">Evidence</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a id="logout">Log Out</a></li>
    </ul>
  </div>
</nav>
<marquee><h2>Hello <?php echo $_SESSION['username']; ?></h2></marquee>
<center>
 <div class="hero-text">
    <h1 style="font-size:50px">CRIME DETECT</h1>
    <h2 style="font-size:30px">Law enforcement web-app</h2>
     <button id="mButton">Let's Go</button>
  </div>
<script type="text/javascript">
	document.getElementById("logout").onclick = function () {
        location.href = "logout.php";
		
    };
    document.getElementById("mButton").onclick = function () {
        location.href = "check.html";
    };
</script>
</body>
</html>
<?php
}else{
	header("location:home.php?loginfirst");
}
?>