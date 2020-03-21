<!DOCTYPE html>
<html lang="en">
<head>
<title>home||Crime detect</title>
<link rel="stylesheet" type="text/css" href="homestyle.css">
   <link rel="stylesheet" type="text/css" href="part.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>

<body>
<div id="main">
 <section>
    <video src="smoke.mp4" autoplay muted loop></video> 
  <div class="content">  <nav>
  <div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="upload.html">UPLOAD</a></li>
      <li><a href="about.html">ABOUT</a></li>
      <li></li>
    </ul>
  </div>
</nav>
<button id="button" onclick="openForm()">Admin Login</button>
</div>
    <h1>
      <span>C</span>
      <span>R</span>
      <span>I</span>
      <span>M</span>
      <span>E</span>
      <span>D</span>
      <span>E</span>
      <span>T</span>
      <span>E</span>
      <span>C</span>
      <span>T</span>
    </h1>
  </section>
  <div class="body">
  <div class="popup">
  <div class="popup-content">
    <img src="close.png" alt="close" class="close">
    <!--<img src="logicon.jpg" alt="user" class="avatar">-->
     <form  method="POST" action="adminauth.php" class="form-container">
    

    <input type="text" placeholder="Username" name="usrm" required>
    <input type="password" placeholder="Password" name="pswd" required>
    <input type="submit" value="Login">
  </form>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  function openForm() {
  
<?php
  session_start();
  
  if(!empty($_SESSION['username']))
  {
    header("location:radmin.php");
  }else{
  ?>
     document.querySelector("popup").style.display = "block";
  <?php
  }
  ?>
}

  document.querySelector("popup").addEventlistner("click",function(){
    document.querySelector("popup").style.display="none";
  })
</script>
 </body>
</html>
