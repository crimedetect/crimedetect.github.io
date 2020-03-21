<!DOCTYPE html>
<html lang="en">
<head>
<title>home||Crime detect</title>
	<link rel="stylesheet" type="text/css" href="radmin.css">
	<link rel="stylesheet" type="text/css" href="check.css">
	
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
      <li><a href="radmin.php">Home</a></li>
	  <li class="active"><a href="display.php">Evidence</a></li>
     </ul>
  </div>
</nav>
<marquee>Help line : 000-111-222 </marquee>
<div class="table-users">
   <div class="header">Users</div>
   
   <table cellspacing="0">
      <tr>
         <th>Picture</th>
         <th>file Name</th>
         <th>Discription</th>
         <th>district</th>
         <th width="230">check</th>
      </tr>

      <tr>
         <td><img src="https://i.picsum.photos/id/1005/100/100.jpg" alt="" /></td>
         <td>Jane Doe</td>
         <td>crime</td>
         <td>palakkad</td>
         <td> <form action="" method="post"><input type="submit" value="check" name="GO"></form> </td>
      </tr>
   </table>
</div>
</body>
</html>