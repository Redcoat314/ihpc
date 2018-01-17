<?php 
	if(session_id()==''){
		session_start();
	}
	require("../../includes/connect.php");
	if((isset($_REQUEST["sname"]) && !empty($_REQUEST["sname"]))	&&    (isset($_REQUEST["uri"]) && !empty($_REQUEST["uri"]))){
		
		
		$sql="INSERT INTO `iehc`.`subject` (`sname`, `uri`,`dor`, `tor`) VALUES (?, ?, curdate(), curtime())";
		
		
		$stmt=mysqli_prepare($con,$sql);
		mysqli_bind_param($stmt,"ss",$_REQUEST["sname"],$_REQUEST["uri"]);
		if(mysqli_execute($stmt)){
			$_SESSION["notification"]=1;
			header("Location: ../subject_form.php");	
		}else{
			$_SESSION["notification"]=0;
			header("Location: ../subject_form.php");	
		}
		
		
	}else{
		$_SESSION["notification"]=2;
		header("Location: ../subject_form.php");	
	}	
?>