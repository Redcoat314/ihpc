<?php 
	if(session_id()==''){
		session_start();
	}
	require("../../includes/connect.php");
	if(  (isset($_REQUEST["sid"]) && !empty($_REQUEST["sid"]))	&&    (isset($_REQUEST["units"]) && !empty($_REQUEST["units"]))){
		$attach="NA";
		if(isset($_FILES["u-attach"])){
			$attach=$_FILES["u-attach"]["name"];
		}
		
		
		$sql="INSERT INTO `iehc`.`unit_allotment` (`sid`, `units`, `ulink`, `admin`, `dor`, `tor`) VALUES (?, ?, ?,'1', curdate(), curtime())";
		
		
		$stmt=mysqli_prepare($con,$sql);
		mysqli_bind_param($stmt,"iis",$_REQUEST["sid"],$_REQUEST["units"],$attach);
		if(mysqli_execute($stmt)){
			$_SESSION["notification"]=1;
			
			if($attach!='NA'){
				move_uploaded_file($_FILES["u-attach"]["tmp_name"],"../../uploads/study-material/".$attach);	
			}
			header("Location: ../alot_unit.php");	
		}else{
			$_SESSION["notification"]=0;
			header("Location: ../alot_unit.php");	
		}
		
		
	}else{
		$_SESSION["notification"]=2;
		header("Location: ../alot_unit.php");	
	}	
?>