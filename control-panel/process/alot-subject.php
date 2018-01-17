<?php 
	if(session_id()==''){
		session_start();
	}
	require("../../includes/connect.php");
	if(    (isset($_REQUEST["cid"]) && !empty($_REQUEST["cid"]))   &&    (isset($_REQUEST["bid"]))	&&   (isset($_REQUEST["sid"]) && !empty($_REQUEST["sid"]))   &&    (isset($_REQUEST["year"]) && !empty($_REQUEST["year"]))	&&    (isset($_REQUEST["units"]) && !empty($_REQUEST["units"]))){
		
		
		
		$sql="INSERT INTO `iehc`.`subject_allotment` (`cid`, `bid`, `year`, `sid`, `units`,`admin`, `dor`, `tor`) VALUES (?, ?, ?, ?, ?, '1', curdate(), curtime() )";
		
		
		$stmt=mysqli_prepare($con,$sql);
		mysqli_bind_param($stmt,"iiiii",$_REQUEST["cid"],$_REQUEST["bid"],$_REQUEST["year"],$_REQUEST["sid"],$_REQUEST["units"]);
		if(mysqli_execute($stmt)){
			$_SESSION["notification"]=1;
			header("Location: ../alot_subject.php");	
		}else{
			$_SESSION["notification"]=0;
			header("Location: ../alot_subject.php");	
		}
		
		
	}else{
		$_SESSION["notification"]=2;
		header("Location: ../alot_subject.php");	
	}	
?>