<?php
session_start();
 if(!isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en"> 
<head>

<title>crime detect</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.min.js"></script>
<link  href="master.css" type="text/css">
    
 <link rel="stylesheet" type="text/css" href="style1.css">
 <!--<link rel="stylesheet" type="text/css" href="anim.css">-->
<link rel="stylesheet" type="text/css" href="logpop.css">

<link href="font.css" rel="stylesheet">
 
<style>
 body{
            padding: 0;
            margin: 0;
        }
     html {
  font-family: 'Roboto Condensed', sans-serif;
}
#mainnav {
  position: absolute;
  font-family: 'Roboto Condensed', sans-serif;
  z-index: 1;
    
}
#mainnav li {
  margin: 55px 0;
  left: -550px;
  position: relative;
  display: none;
    
}
#mainnav a {
  color: white;   
  text-decoration: none;
  font-size: 1.4em;

      

} 
        ul li{
            list-style: none;
            margin-top: -50px;
            
        }
.hamb {
  position: absolute;
  top: 20px;
  left: 20px;
  font-size: 2.5em;
  z-index: 1;
}
.hamb a {
  color: #fff;
  text-decoration: none;
}
#bubble {
  width: 100%;
  height: 100%;
  opacity: 0.9;
  position: fixed;
  display: none;
  z-index: 1;
  background: rgba(0, 0, 0, .5);
}
     
        
        .gap{
             
            color: white;
            margin-top: 100px;
            width: 200px;
            
             
             
        }
        
</style>
</head>

<body>
     <nav role='navigation' id="mainnav">
    <br><br><br>
  <ul class="gap">
    <li><a class="active" href="home.php">Home</a></li>
    <li><a href="upload.html">Upload the Evidence</a></li>
    <li><a href="about.html">About</a></li>
    <li><button onclick="document.getElementById('id01').style.display='block'">Admin Login</button> </li>
 
  </ul>
</nav> 
<div class="hamb">
  <a href="#"><i class="fa fa-bars">&#9776;</i></a>
</div>

<canvas id="bubble"></canvas>

    <script src="jquery-3.3.1.js"></script>
    <script src="jquery-ui.js"></script>
<script>
  
var w = window.innerWidth,
    h = window.innerHeight,
    canvas = document.getElementById('bubble'),
    ctx = canvas.getContext('2d'),
    rate = 60,
    arc = 100,
    time,
    count,
    size = 7,
    speed = 20,
    lights = new Array,
    colors = ['#d59254','#ffffff','#1f2839','#cf7693'];

canvas.setAttribute('width',w);
canvas.setAttribute('height',h);

function init() {
  time = 0;
  count = 0;

  for(var i = 0; i < arc; i++) {
    lights[i] = {
      x: Math.ceil(Math.random() * w),
      y: Math.ceil(Math.random() * h),
      toX: Math.random() * 5 + 1,
      toY: Math.random() * 5 + 1,
      c: colors[Math.floor(Math.random()*colors.length)],
      size: Math.random() * size
    }
  }
}

function bubble() {
  ctx.clearRect(0,0,w,h);

  for(var i = 0; i < arc; i++) {
    var li = lights[i];
    
    ctx.beginPath();
    ctx.arc(li.x,li.y,li.size,0,Math.PI*2,false);
    ctx.fillStyle = li.c;
    ctx.fill();
    
    li.x = li.x + li.toX * (time * 0.05);
    li.y = li.y + li.toY * (time * 0.05);
    
    if(li.x > w) { li.x = 0; }
    if(li.y > h) { li.y = 0; }
    if(li.x < 0) { li.x = w; }
    if(li.y < 0) { li.y = h; }
  }
  if(time < speed) {
    time++;
  }
  timerID = setTimeout(bubble,1000/rate);
}
init();
bubble(); 

//navigation (this is my code)
var animation = 'easeOutCubic';
    delay     = 60;

$(document)
  .on('click', '.fa-bars', function(){
    var i = 0;
    $('nav').before($('#bubble'));
    $('#bubble').fadeIn();
    $('#mainnav').find('li').each(function(){
      var that = $(this);
      i++;
      (function(i, that){
          setTimeout(function(){
            that
              .animate(
                { 'left'   : '20px' }, 
                { duration : 350, 
                  easing   : animation })
              .fadeIn({queue: false});
          }, delay * i)
      }(i, that))
    }); 
    $('.fa-bars').fadeOut(100,function(){
      $(this)
        .removeClass('fa-bars')
        .addClass('fa-times')
        .html('&#10060;')
        .fadeIn(); 
    });
  })
  .on('click', '#bubble, .fa-times', function(){ 
    $('#bubble').fadeOut();
    $('#mainnav').find('li')
      .animate(
        { 'left'   : '-550px' }, 
        { duration : 250 })
      .fadeOut({queue: false});
    
    $('.hamb').fadeOut(100, function(){
      $(this)
        .find($('i'))
        .removeClass('fa-times')
        .addClass('fa-bars')
        .html('&#9776;')
        .end()
        .fadeIn();
    });
  }) 
    
</script>
    <div id="id01" class="modal"> <!--<img src="logicon.jpg" alt="user" class="avatar">-->
 <form  class="modal-content animate" method="POST" action="adminauth.php">
    
    <div class="imgcontainer"> 
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
            </div> 

            <div class="container"> 
    <input type="text" placeholder="Username" name="usrm" required>
    <input type="password" placeholder="Password" name="pswd" required>
    <input type="submit" value="Login">
</div>
  </form>
<script> 
        var modal = document.getElementById('id01'); 
        window.onclick = function(event) { 
            if (event.target == modal) { 
                modal.style.display = "none"; 
            } 
        } 
    </script> 
</div>
<div class="wrapper">
 
    <section class="main">
	<div class="main-content">
        <video src="smoke2.mp4" autoplay muted loop></video> 
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
	</div>
    </section>
</div>

    </body>
</html>
<?php
}else{
    header("location:rhome.php");

}
?>