<?php 
	if(session_id()==''){
		session_start();
	}
	require("../../includes/connect.php");
	if(    (isset($_REQUEST["dname"]) && !empty($_REQUEST["dname"]))   &&    (isset($_REQUEST["rname"]) && !empty($_REQUEST["rname"]))   &&    (isset($_REQUEST["email"]) && !empty($_REQUEST["email"]))	&&    isset($_REQUEST["cno"]) 		&&    (isset($_REQUEST["spcl_in"]) && !empty($_REQUEST["spcl_in"]))){
		
		
		$sql="INSERT INTO `iehc`.`signup` (`rname`, `dname`, `email`, `cno`, `spcl_in`,`dor`, `tor`) VALUES (?, ?, ?, ?, ?, curdate(), curtime())";
		
		
		$stmt=mysqli_prepare($con,$sql);
		mysqli_bind_param($stmt,"sssis",$_REQUEST["rname"],$_REQUEST["dname"],$_REQUEST["email"],$_REQUEST["cno"],$_REQUEST["spcl_in"]);
		if(mysqli_execute($stmt)){
			$_SESSION["notification"]=1;
			header("Location: ../sign-up.php");	
		}else{
			$_SESSION["notification"]=0;
			header("Location: ../sign-up.php");	
		}
		
	}else{
		$_SESSION["notification"]=2;
		header("Location: ../sign-up.php");	
	}	
?>