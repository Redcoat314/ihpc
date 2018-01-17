<?php 
	session_start();
?>
<?php require("../includes/connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/base.css"/>
<title>branch_form</title>
</head>

<body>
	<center>
		<?php
			require_once("header.php")
		?>
      	<div class="gap-type-4"></div>
        <div class="form-wrap">
		<?php 
			if(isset($_SESSION["notification"]) && $_SESSION["notification"]==1){
		?>
        
        <div class="success-state">
        	Branch successfully added to the list.
        </div>
        
        <?php		
			}else if(isset($_SESSION["notification"]) && $_SESSION["notification"]==0){
		?>
        
        <div class="error-state">
        	Error while connecting to the database!
        </div>
        
        <?php		
			}else if(isset($_SESSION["notification"]) && $_SESSION["notification"]==2){
		?>
        
        <div class="error-state">
        	Please fill all fields before submiting the form.
        </div>
        
        <?php		
			}
		?>
    	
        <form action="process/add-branch.php" method="post">
        	<div class="input-row">
            	<div class="lable">Select course:</div>	
            	<select name="cid" class="select-field">
    				
                	<option value="0">-----------------Select------------------</option>
    				<?php 
								$a="select * from course order by cname";
								$res=mysqli_query($con,$a);
								while($row=mysqli_fetch_array($res)){
							?>
                            	<option value="<?php echo $row["cid"]; ?>"><?php echo $row["cname"]; ?></option>
                            <?php		
								}
							?>
                
    			</select>
            </div>
            <div class="gap-type-2"></div>
        	<div class="input-row">
            	<div class="lable">Add a Branch:</div>
    			
   				<input type="text" name="bname" class="text-field" />
        	</div>
            <div class="gap-type-2"></div>
            <div class="input-row">
            	<div class="lable">URI:</div>
    			
   				<input type="text" name="uri" class="text-field" />
        	</div>
            <br />

            <div class="input-row">
            		<input type="submit" value="Save" />
            </div>
            
        	</form>
         </div>
     </center>
</body>
</html>
<?php 
	if(isset($_SESSION["notification"])){
		unset($_SESSION["notification"]);
	}
?>