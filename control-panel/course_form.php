<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../css/base.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>course_form</title>
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
        	Course successfully added to the list.
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
        <form action="process/add-course.php" method="post">	
            <div class="input-row">
               		<div class="lable">Course Name:</div>
                    <input type="text" name="cname" class="text-field"/>
    		</div>
            <div class="gap-type-2"></div>
            <div class="input-row">
            		<div class="lable">URI:</div>
               		<input type="text" name="uri" class="text-field"/>
    		</div>
            <div class="gap-type-2"></div>
        	<div class="input-row">
	            <div class="lable">Duration:</div>
        		<select name="year" class="select-field">
            		<option value="0">--</option>
                	<option value="1">1</option>
                	<option vlaue="2">2</option>
                	<option vlaue="3">3</option>
                	<option value="4">4</option>
                	<option value="5">5</option>
                	<option value="6">6</option>
                	<option value="7">7</option>
            	</select>
        	</div>
            <div class="gap-type-4"></div>
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