<?php 
	require("../includes/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exam Papers</title>
<link rel="stylesheet" type="text/css" href="../css/base.css"/>
<style rel="stylesheet" type="text/css">
</style>
</head>

<body>
<center>
    	<div class="main-wrap">
        	
			<?php 
				require_once("../includes/header.php");
			?>
         <div class="mid-cont">
         	 <?php 
		 	$sql="SELECT `cname`, `uri` FROM `course`";
			$rs=mysqli_query($con, $sql);
			$counter=1;
			while($row=mysqli_fetch_array($rs)){
			if(($counter%4)==0){
		?>
        <a href="http://localhost/ihpc/exam-papers/<?php echo $row["uri"]."/";?>">
         	<div class="course-design course-grid bg-black float-left">
         		<div class="course-font"><?php echo $row["cname"]?></div>
            </div>
        </a>
        <div class="gap-type-4 float-clear"></div>
        <?php	
            }else{
        ?>
        <a href="http://localhost/ihpc/exam-papers/<?php echo $row["uri"]."/";?>">
        	<div class="course-design course-grid bg-black right-margin-20px float-left">
    	    	<div class="course-font"><?php echo $row["cname"]?></div>
	        </div>
        </a>
        <?php		
			}
			$counter=$counter+1;
			}
		 ?>
            <div class="float-clear"></div>
      </div>
	  <?php 
				require_once("../includes/footer.php");
			?>
       </div>
    </center>
</body>
</html>