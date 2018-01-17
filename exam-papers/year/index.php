<?php 
	require("../../includes/connect.php"); 
	$yr='b-tech';
	if(isset($_REQUEST["yr"])){
		$yr=$_REQUEST["yr"];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../css/base.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>studyMaterial/year</title>
</head>

<body>
	<center>
    	<div class="main-wrap">
      		<?php 
				require_once("../../includes/header.php");
			?>
            <div class="gap-type-9"></div>
            <div class="mid-cont">
            
            
            <?php 
		 	$sql="SELECT `duration` FROM `course` WHERE `uri`='".$yr."'";
			$rs=mysqli_query($con, $sql);
			$counter=1;
			$years=array("Unknown","1<sup>st</sup>","2<sup>st</sup>","3<sup>nd</sup>","4<sup>rd</sup>","5<sup>th</sup>","6<sup>th</sup>");
			$row=mysqli_fetch_object($rs);
			$c_duration=$row->duration;
			while($counter<=$c_duration){
			if(($counter%2)==0){
		?>
        <a href="http://localhost/ihpc/exam-papers/<?php echo $yr."/".$counter; ?>/">
        	<div class="bg-black year-grid float-left">
            	<?php 
					echo $years[$counter]." Year";
				?>
            </div>
        </a>
        <?php if($counter!=$c_duration){echo '<div class="gap-type-4 float-clear"></div>';} ?>
        <?php	
            }else{
        ?>
        <a href="http://localhost/ihpc/exam-papers/<?php echo $yr."/".$counter; ?>/">
        	<div class="bg-black year-grid float-left right-margin-20px">
            	<?php 
					echo $years[$counter]." Year";
				?>
            </div>
        </a>
        <?php		
			}
			$counter=$counter+1;
			}
		 ?>
         	<div class="float-clear"></div>
            </div>
            <div class="gap-type-9"></div>
            <?php 
				require_once("../../includes/footer.php");
			?>    	
        </div>
    </center>
</body>
</html>