<?php		
			$m=$_POST['varname'];
			
			$myDirectory = opendir("imguploads/narcotics/");

			// get each entry
			while($entryName = readdir($myDirectory)) {
			$dirArray[] = $entryName;
			}

			// close directory
			closedir($myDirectory);
			$indexCount	= count($dirArray);
			$fname=$m;
			session_start();
			$u=$_SESSION['username'];
			$conn = mysqli_connect("localhost","root","","crimedetect");
            $sql="select * from log where usr='$u'";
			$m=mysqli_query($conn,$sql);
            $check = mysqli_num_rows($m);
			$r=mysqli_fetch_array($m);
			if($check == 1)
            {
					$sql = "DELETE FROM imgnarcotics WHERE filename='$fname'";
					if (mysqli_query($conn, $sql)) {
						for($index=0; $index < $indexCount; $index++) {
							if($dirArray[$index]==$fname){
								$path="imguploads/narcotics/".$fname;
								if(!unlink($path)){
									echo 'error';
								}else{
									echo "Record deleted successfully";
									header("location:narcoticsimgcheck.php?deletesuccess");
								}
							}else{
								echo 'file not found found';
							}
						}	
					} else {
						echo "Error deleting record: " . mysqli_error($conn);
					}
			}
?>