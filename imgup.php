<?php
		$file=$_FILES["file"];
		//print_r($file);
		$filename=$_FILES['file']['name'];
		$fileTmpName=$_FILES['file']['tmp_name'];
		$fileSize=$_FILES['file']['size'];
		$fileError=$_FILES['file']['error'];
		$fileType=$_FILES['file']['type'];
		$disc=$_POST['discrip'];
		$district=$_POST['district'];
		$state=$_POST['countrya'];
		$country=$_POST['state'];
		$type=$_POST['typ'];
		
		$fileExt=explode('.',$filename);
		$fileActualExt=strtolower(end($fileExt));
		
		$allowed=array('jpg','jpeg','png');
		if($type=="police"){
			if(in_array($fileActualExt,$allowed)){
				if($fileError===0){
					if($fileSize<5000000){
						$fileDestination='imguploads/police/'.$district.'/'.$filename;
						move_uploaded_file($fileTmpName,$fileDestination);
						$conn = mysqli_connect("localhost","root","","crimedetect");
						$sql="insert into imgpolice values('$filename','$fileDestination','$disc','$district','$state','$country','$fileActualExt')";
						$m=mysqli_query($conn,$sql);
						header("location:home.php?uploadsuccess");
					}else{
						echo "Your file is too big ";
					}
				}else{
					echo "There was an error uploading your file";
				}
			}else{
				echo "You cannot upload the file";
			}
		}elseif($type=="forest"){
			if(in_array($fileActualExt,$allowed)){
				if($fileError===0){
					if($fileSize<5000000){
						$fileDestination='imguploads/forest/'.$district.'/'.$filename;
						move_uploaded_file($fileTmpName,$fileDestination);
						$conn = mysqli_connect("localhost","root","","crimedetect");
						$sql="insert into imgforest values('$filename','$fileDestination','$disc','$district','$state','$country','$fileActualExt')";
						$m=mysqli_query($conn,$sql);
						header("location:home.php?uploadsuccess");
					}else{
						echo "Your file is too big ";
					}
				}else{
					echo "There was an error uploading your file";
				}
			}else{
				echo "You cannot upload the file";
			}
		}elseif($type=="incometax"){
			if(in_array($fileActualExt,$allowed)){
				if($fileError===0){
					if($fileSize<5000000){
						$fileDestination='imguploads/incometax/'.$district.'/'.$filename;
						move_uploaded_file($fileTmpName,$fileDestination);
						$conn = mysqli_connect("localhost","root","","crimedetect");
						$sql="insert into imgincometax values('$filename','$fileDestination','$disc','$district','$state','$country','$fileActualExt')";
						$m=mysqli_query($conn,$sql);
						header("location:home.php?uploadsuccess");
					}else{
						echo "Your file is too big ";
					}
				}else{
					echo "There was an error uploading your file";
				}
			}else{
				echo "You cannot upload the file";
			}
		}else{
			if(in_array($fileActualExt,$allowed)){
				if($fileError===0){
					if($fileSize<5000000){
						$fileDestination='imguploads/narcotics/'.$district.'/'.$filename;
						move_uploaded_file($fileTmpName,$fileDestination);
						$conn = mysqli_connect("localhost","root","","crimedetect");
						$sql="insert into imgnarcotics values('$filename','$fileDestination','$disc','$district','$state','$country','$fileActualExt')";
						$m=mysqli_query($conn,$sql);
						header("location:home.php?uploadsuccess");
					}else{
						echo "Your file is too big ";
					}
				}else{
					echo "There was an error uploading your file";
				}
			}else{
				echo "You cannot upload the file";
			}
		}
?>