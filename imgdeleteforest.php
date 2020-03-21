<?php		
			$m=$_POST['varname'];
			session_start();
			$u=$_SESSION['username'];
			$myDirectory = opendir("imguploads/forest/$u");

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
			$second=$_POST['second'];
			$s=mb_substr($second, 0, -4);
			$l=$_POST['third'];
			$conn = mysqli_connect("localhost","root","","crimedetect");
            $sql="select * from log where usr='$u'";
			$m=mysqli_query($conn,$sql);
            $check = mysqli_num_rows($m);
			$r=mysqli_fetch_array($m);
			if($check == 1)
            {
					$sql = "DELETE FROM imgforest WHERE filename='$fname' and district='$u'";
					if (mysqli_query($conn, $sql)) {
						for($index=0; $index < $indexCount; $index++) {
							if($dirArray[$index]==$fname){
								$path="imguploads/forest/".$u."/".$fname;
								if(!unlink($path)){
									echo 'error';
								}else{
									$elapath=$s.".ela.jpg";
									$copypath=$l."/copy".$fname;
									unlink($elapath);
									unlink($copypath);
									echo "Record deleted successfully";
									header("location:forestimgcheck.php?deletesuccess");
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