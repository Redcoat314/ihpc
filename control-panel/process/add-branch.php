<?php 
	if(session_id()==''){
		session_start();
	}
	require("../../includes/connect.php");
	if(    (isset($_REQUEST["cid"]) && !empty($_REQUEST["cid"]))   &&    (isset($_REQUEST["bname"]) && !empty($_REQUEST["bname"]))   &&    (isset($_REQUEST["uri"]) && !empty($_REQUEST["uri"]))){
		
		
		$sql="INSERT INTO `iehc`.`branch` (`cid`, `bname`, `uri`, `dor`, `tor`) VALUES (?, ?, ?, curdate(), curtime())";
		
		
		$stmt=mysqli_prepare($con,$sql);
		mysqli_bind_param($stmt,"iss",$_REQUEST["cid"],$_REQUEST["bname"],$_REQUEST["uri"]);
		if(mysqli_execute($stmt)){
			$_SESSION["notification"]=1;
			header("Location: ../branch_form.php");	
		}else{
			$_SESSION["notification"]=0;
			header("Location: ../branch_form.php");	
		}
		
		
	}else{
		$_SESSION["notification"]=2;
		header("Location: ../branch_form.php");	
	}	
?>