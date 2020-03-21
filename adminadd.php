<?php
            $user=$_POST["usrm"];
            $pass=$_POST["pswd"];
			$conn = mysqli_connect("localhost","root","","crimedetect");
            $sql="insert into log values('$user','$pass','0')";
			$m=mysqli_query($conn,$sql);
			if($m==1)
            {
				header("location:adminhome.php?addedsuccessfully");
				
			}else{
				?><script>alert("failed");</script><?php
			}

?>