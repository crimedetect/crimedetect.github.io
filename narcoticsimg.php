<?php
	// open this directory 
	$myDirectory = opendir("imguploads/narcotics/");

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
			if(in_array($extension,$allowed)){
				echo '   <div class="media">
							<div class="layer">
							<p>'.$dirArray[$index].'</p>
							</div>';
				echo '<img src="imguploads/narcotics/' . $dirArray[$index] . '" alt="Image" /><span>' . $dirArray[$index] . '</span>';
				echo '</div>';
			}	
		}
	?>