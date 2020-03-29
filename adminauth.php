<?php
			session_start();
            $user=$_POST["usrm"];
            $pass=$_POST["pswd"];
			$conn = mysqli_connect("localhost","root","","crimedetect");
            $sql="select * from log where usr='$user'and psw='$pass'";
			$m=mysqli_query($conn,$sql);
            $check = mysqli_num_rows($m);
			$r=mysqli_fetch_array($m);
			session_start();
			if($check == 1)
            {	
				if($r["category"]==1){
					header("location:adminhome.html");
				}else{
					$_SESSION['username']=$user;
					header("location:regionaladmin.php");
				}
				
			}else{
				header("location:home.html?loginfailed");
			}

?>