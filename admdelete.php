<?php
            $user=$_POST["dusrm"];
			$conn = mysqli_connect("localhost","root","","crimedetect");
            $sql="select * from log where usr='$user'";
			$m=mysqli_query($conn,$sql);
            $check = mysqli_num_rows($m);
			$r=mysqli_fetch_array($m);
			if($check == 1)
            {
				if($r['category']!=1){
					$sql = "DELETE FROM log WHERE usr='$user'";
					if (mysqli_query($conn, $sql)) {
						echo "Record deleted successfully";
						header("location:adminhome.php?deletesuccess");
					} else {
						echo "Error deleting record: " . mysqli_error($conn);
					}
				}else{
					echo "Can't delete regional admin login details: " . mysqli_error($conn);
				}
			}
?>