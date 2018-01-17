<?php 
	if(session_id()==''){
		session_start();
	}
	require("../../includes/connect.php");
	if(    (isset($_REQUEST["cname"]) && !empty($_REQUEST["cname"]))   &&    (isset($_REQUEST["uri"]) && !empty($_REQUEST["uri"]))   &&    (isset($_REQUEST["year"]) && !empty($_REQUEST["year"]))){
		
		
		$sql="INSERT INTO `iehc`.`course` (`cname`, `duration`, `uri`, `dor`, `tor`) VALUES (?, ?, ?, curdate(), curtime())";
		
		
		$stmt=mysqli_prepare($con,$sql);
		mysqli_bind_param($stmt,"sis",$_REQUEST["cname"],$_REQUEST["year"],$_REQUEST["uri"]);
		if(mysqli_execute($stmt)){
			$_SESSION["notification"]=1;
			header("Location: ../course_form.php");	
		}else{
			$_SESSION["notification"]=0;
			header("Location: ../course_form.php");	
		}
		
		
	}else{
		$_SESSION["notification"]=2;
		header("Location: ../course_form.php");	
	}	
?>