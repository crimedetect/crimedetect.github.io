<?php
	set_time_limit(500);
	session_start();
	$u=$_SESSION['username'];
	echo '<link rel="stylesheet" type="text/css" href="check.css">
	<div class="table-users">
   <div class="header">Users</div>
   
   <table border="5">
      <tr>
         <th>Picture</th>
         <th>file Name</th>
         <th>Discription</th>
         <th>district</th>
         <th>check</th>
		 <th>Compare</th>
		 <th>Delete</th>
		 <th>send Email</th>
      </tr>';
	// open this directory 
	$myDirectory = opendir("imguploads/incometax/$u");

	// get each entry
	while($entryName = readdir($myDirectory)) {
		$dirArray[] = $entryName;
	}

	// close directory
	closedir($myDirectory);

	//	count elements in array
	$indexCount	= count($dirArray);
		// loop through the array of files and print them all in a list
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			$allowed=array('jpg','jpeg','png');
			$conn = mysqli_connect("localhost","root","","crimedetect");
			$sql="select * from imgincometax where filename='$dirArray[$index]' and district='$u'";
			$r=mysqli_query($conn,$sql);
			$row= mysqli_fetch_array($r);
			if(in_array($extension,$allowed)){
				if($row){
					echo '<tr>';
				echo '<td><a href="imguploads/incometax/'.$u.'/' . $dirArray[$index] . '"><img height="100px" width="100px" src="imguploads/incometax/'.$u.'/' . $dirArray[$index] . '" alt="Image" /></a></td>';
				echo '<td>'.$row["filename"].'</td>
						<td>'.$row["discription"].'</td>
						<td>'.$row["district"].'</td>
						<td> <form action="" method="post"><input type="submit" value="check" name='.$index.'></form> </td>';
				echo '<td> <form action="compare.php" method="POST">
							<input type="hidden" name="first" value="imguploads/incometax/'.$u.'/' . $dirArray[$index] . '">
							<input type="hidden" name="second" value="imguploads/incometax/'.$u.'/generated/'.$dirArray[$index].'">
							<input type="hidden" name="third" value="imguploads/copymove/">
							<input type="hidden" name="filename" value=' . $dirArray[$index] . '>
							<input type="submit" value="Compare" name="Compare"></form> </td>
							<td> <form action="imgdeleteincometax.php" method="post">
							<input type="hidden" name="varname" value='.$dirArray[$index].'>
							<input type="hidden" name="second" value="imguploads/incometax/'.$u.'/generated/'.$dirArray[$index].'">
							<input type="hidden" name="third" value="imguploads/copymove/">
							<input type="submit" value="delete" name="delete"></form> </td>
						<td><form enctype="multipart/form-data" method="POST" action="mailtoincometax.php"> 
					<input type="hidden" name="subject" value="Evidence for crime"/> 
					<input type="hidden" name="message" value='.$row["discription"].'>
					<input type="hidden" name="filename" value="imguploads/incometax/'.$u.'/'.$dirArray[$index].'"/>
					<input type="hidden" name="second" value="imguploads/incometax/'.$u.'/generated/'.$dirArray[$index].'">
							<input type="hidden" name="third" value="imguploads/copymove/">
							<input type="hidden" name="fname" value=' . $dirArray[$index] . '>
							<input type="submit" name="button" value="Email" /> 
					</form></td>';
				echo '</tr></div>';
			}else{
				echo '<script>alert("No images found in the categery income tax")</script>';
			}
			}	
		}
   echo '  </table>
</div>';
for($index=0; $index < $indexCount; $index++) {
	if(isset($_POST[$index]))
	{
		$n="imguploads/incometax/$u";
		$m="imguploads/incometax/$u/$dirArray[$index]";
		shell_exec("python ela.py --dir $n");
		shell_exec("python main.py --image $m");
		
		#echo"success";
		#echo $m;
		$loc="c:/xampp/htdocs/s8project/imguploads/copymove/copyout.jpg";
		if(file_exists($loc)){
			rename ("c:/xampp/htdocs/s8project/imguploads/copymove/copyout.jpg","c:/xampp/htdocs/s8project/imguploads/copymove/copy$dirArray[$index]");
		}
	}
}
?>