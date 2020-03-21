<?php 
echo '<html>
<head>
	<title>
	</title>
	<style>
	.boxes{
	width:33%;
	float:left;
	}
	#mainDiv{
		width:100%;
		margin:auto;
	}
	img{
		max-width:100%;
	}
</style>
</head>
<body>';
$first=$_POST['first'];
$second=$_POST['second'];
$s=mb_substr($second, 0, -4);
$l=$_POST['third'];
$fname=$_POST['filename'];
echo '
<div id="mainDiv">
    <div id="divOne" class="boxes">
	<img src="'.$first.'" width="900px" height="600px">
    </div>
    <div id="divTwo" class="boxes">';
	echo '<img src="'.$s.'.ela.jpg" width="900px" height="600px" alt="Perform algorithm first to get the result">
    </div>
    <div id="divThree" class="boxes">
	
	<img src="'.$l.'/copy'.$fname.'" width="900px" height="600px" alt="Perform algorithm first to get the result">
    </div>
</div>
</body>
<html>';