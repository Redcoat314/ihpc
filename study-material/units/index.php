<?php 
	require("../../includes/connect.php"); 
	$sr="";
	if(isset($_REQUEST["sr"])){
		$sr=$_REQUEST["sr"];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Units</title>
<link rel="stylesheet" type="text/css" href="../css/base.css"/>
</head>

<body>
	<div class="main-wrap">
		<?php
			require_once("../../includes/header.php");
        ?>
        <div class="gap-type-4"></div>
        <center>
        		<div class="mid-cont">
        			<div class="contain-both">
        				<div class="unit-wrap float-left">
                        	<?php 
								$a="select `sname` from `subject` where `uri`='".$sr."'";
								$as=mysqli_query($con,$a);
								$r=mysqli_fetch_object($as);
							?>
            				<div class="subject-name"><?php echo $r->sname; ?></div>
                            <ul class="unit-list">
                				<?php 
									$sql="SELECT * FROM `unit_allotment` WHERE `sid`=(select `sid` from `subject` where `uri`='".$sr."') order by `units`";
									$res=mysqli_query($con,$sql);
									$c=0;
									$flinnk="";
									while($row=mysqli_fetch_array($res)){
										if($c==0){
                                    		$flinnk="http://localhost/ihpc/uploads/study-material/".$row["ulink"];
                                   		}
								?>
                                	<li class="li-tag">
                                	<div class="float-left">
                                    	<a href="http://localhost/ihpc/uploads/study-material/<?php echo $row["ulink"]; ?>" target="reader">
                                    		Unit <?php echo $row["units"];?>
                                    	</a>
                                     </div>
                                    <div class="float-right">
                                    	<div class="gap-type-1"></div>
                                        <div class="small-text">
                                        	<a href="http://localhost/ihpc/uploads/study-material/<?php echo $row["ulink"]; ?>" target="_blank">Download</a>
                                        </div>
                                    </div>
                                    <div class="float-clear"></div>
                                </li>
								<?php	
										$c=$c+1;
									}
								?>
                			</ul>
                        
            			</div>
                    
                 		<div class="window-wrap float-right">
                 			<div>
                            	<iframe style="width:640px; background-color:#0F9; height:600px;" frameborder="0" scrolling="no" name="reader" src="<?php echo $flinnk; ?>"></iframe>
                            </div>
                 		</div>
                 	</div>
        	         <div class="float-clear"></div>
                 
        		</div>
        
        </center>
        <?php
			require_once("../../includes/footer.php");
		?>
</body>
</html>