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
		
		$allowed=array('mp4','mpeg','avi','wmv');
		if($type=="police"){
			if(in_array($fileActualExt,$allowed)){
				if($fileError===0){
					if($fileSize<50000000){
						$fileDestination='viduploads/police/'.$fileName;
						move_uploaded_file($fileTmpName,$fileDestination);
						$conn = mysqli_connect("localhost","root","","crimedetect");
						$sql="insert into vidpolice values('$filename','$fileDestination','$disc','$district','$state','$country','$fileActualExt')";
						$m=mysqli_query($conn,$sql);
						header("location:home.html?uploadsuccess");
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
					if($fileSize<50000000){
						$fileDestination='viduploads/forest/'.$fileName;
						move_uploaded_file($fileTmpName,$fileDestination);
						$conn = mysqli_connect("localhost","root","","crimedetect");
						$sql="insert into vidforest values('$filename','$fileDestination','$disc','$district','$state','$country','$fileActualExt')";
						$m=mysqli_query($conn,$sql);
						header("location:home.html?uploadsuccess");
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
					if($fileSize<50000000){
						$fileDestination='viduploads/incometax/'.$fileName;
						move_uploaded_file($fileTmpName,$fileDestination);
						$conn = mysqli_connect("localhost","root","","crimedetect");
						$sql="insert into vidincometax values('$filename','$fileDestination','$disc','$district','$state','$country','$fileActualExt')";
						$m=mysqli_query($conn,$sql);
						header("location:home.html?uploadsuccess");
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
					if($fileSize<50000000){
						$fileDestination='viduploads/narcotics/'.$fileName;
						move_uploaded_file($fileTmpName,$fileDestination);
						$conn = mysqli_connect("localhost","root","","crimedetect");
						$sql="insert into vidnarcotics values('$filename','$fileDestination','$disc','$district','$state','$country','$fileActualExt')";
						$m=mysqli_query($conn,$sql);
						header("location:home.html?uploadsuccess");
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