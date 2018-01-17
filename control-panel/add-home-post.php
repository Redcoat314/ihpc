<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../css/base.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home post</title>
<style>
	.upload-field{
		background-color:#FFF;	
	}
	.text-area{
		height:200px;
		resize:none;
	}
</style>
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
        	Home Post successfully created.
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
        <form action="process/add-home-post.php" method="post" enctype="multipart/form-data">	
            <div class="input-row">
               		<div class="lable">Title:</div>
                    <input type="text" name="title" class="text-field"/>
    		</div>
            <div class="gap-type-2"></div>
            <div class="input-row">
            		<div class="lable">Description:</div>
               		<textarea class="text-field text-area" name="desc"></textarea>
    		</div>
            <div class="gap-type-2"></div>
        	<div class="input-row">
	            <div class="lable">Image<sup>(Optional)</sup></div>
        		<input type="file" class="upload-field" name="p-attatch"/>
        	</div>
            <div class="gap-type-2"></div>
                    <div class="input-row">
        	    	    <div class="lable">Type</div>
                        <select name="tp" class="select-field">
                        	<option value="0">------------------------------Select---------------------------</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
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