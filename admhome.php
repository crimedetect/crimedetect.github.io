<!DOCTYPE html>
<html lang="en">
<head>
<title>home||Crime detect</title>
   <link rel="stylesheet" type="text/css" href="part.css">
    <link rel="stylesheet" type="text/css" href="homestyle.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div id="particles-js">
  <script type="text/javascript" src="particles.js"></script>
  <script type="text/javascript" src="app.js"></script>
<div class="content">  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="admhome.php">Home</a></li>
      <li><a href="admmain.html">Option</a></li>      
  </ul>
  <ul class="nav navbar-nav navbar-right">
      <li><a id="lout">Log Out</a></li>
    </ul>
  </div>
</nav>
<div class="body">
<h1 style="font-size:50px">CRIME DETECT</h1>
<h2 style="font-size:30px">Law enforcement web-app</h2>
<button id="mButton">Let's Go</button>
</div>
  
</div>
</div>
<script type="text/javascript">
	document.getElementById("lout").onclick = function () {
        location.href = "logout.php";
    };
    document.getElementById("mButton").onclick = function () {
        location.href = "admmain.html";
    };
</script>
</body>
</html>