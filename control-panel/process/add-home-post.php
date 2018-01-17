<?php 
	if(session_id()==''){
		session_start();
	}
	require("../../includes/connect.php");
	if((isset($_REQUEST["title"]) && !empty($_REQUEST["title"]))   &&    (isset($_REQUEST["desc"]) && !empty($_REQUEST["desc"]))){
		$attach="NA";
		if(isset($_FILES["p-attatch"])){
			$attach=$_FILES["p-attatch"]["name"];
		}
		$sql="INSERT INTO `home-post` (`title`, `desc`, `attatchment`, `type`, `dor`, `tor`, `admin`) VALUES (?, ?, ?, ?, CURDATE(), CURTIME(), '1');";
		
		
		$stmt=mysqli_prepare($con,$sql);
		mysqli_bind_param($stmt,"sssi",$_REQUEST["title"],$_REQUEST["desc"], $attach, $_REQUEST["tp"]);
		if(mysqli_execute($stmt)){
			$_SESSION["notification"]=1;
			
			if($attach!='NA'){
				move_uploaded_file($_FILES["p-attatch"]["tmp_name"],"../../uploads/home-post/".$attach);	
			}
			header("Location: ../add-home-post.php");	
		}else{
			$_SESSION["notification"]=0;
			header("Location: ../add-home-post.php");	
		}
		
		
	}else{
		$_SESSION["notification"]=2;
		header("Location: ../add-home-post.php");	
	}	
?>