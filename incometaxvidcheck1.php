<?php
	echo '<link rel="stylesheet" type="text/css" href="check.css">
	<div class="table-users">
   <div class="header">Users</div>
   
   <table cellspacing="0">
      <tr>
         <th>Picture</th>
         <th>file Name</th>
         <th>Discription</th>
         <th>district</th>
         <th width="230">check</th>
      </tr>';
	// open this directory 
	$myDirectory = opendir("viduploads/incometax/");

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
			$allowed=array('mp4','wmv');
			if(in_array($extension,$allowed)){
				echo '<tr>';
				echo '<td><video width="250" height="250" controls="controls" src="viduploads/incometax/' . $dirArray[$index] . '"</video>';
				echo '<td>Jane Doe</td>
						<td>crime</td>
						<td>palakkad</td>
						<td> <form action="" method="post"><input type="submit" value="check" name="GO"></form> </td>';
				echo '</tr></div>';
			}	
		}
   echo '  </table>
</div>';
?>