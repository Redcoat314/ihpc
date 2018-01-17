<?php 
	session_start();
?>
<?php require("../includes/connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/base.css"/>
<title>alot_unit</title>
</head>

<body>
	<center>
    	<?php 
			require_once("header.php")
		?>
        <div class="gap-type-4"></div>
        <div class="field-wrap">
            
        	<div class="form-wrap">
            	<?php 
			if(isset($_SESSION["notification"]) && $_SESSION["notification"]==1){
		?>
        
        <div class="success-state">
        	Unit successfully alotted to the list.
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
        		<form action="process/alot-unit.php" method="post" enctype="multipart/form-data">
                        	
                    <div class="gap-type-2"></div>
                    <div class="input-row">
        	    	    <div class="lable">Subjects</div>
                        <select name="sid" class="select-field">
                        	<option value="0">------------------------------Select---------------------------</option>
                            <?php 
								$a="select * from subject order by sname";
								$res=mysqli_query($con,$a);
								while($row=mysqli_fetch_array($res)){
							?>
                            	<option value="<?php echo $row["sid"]; ?>"><?php echo $row["sname"]; ?></option>
                            <?php		
								}
							?>
                        </select>
    	            </div>
                    <div class="gap-type-2"></div>
                    <div class="input-row">
        	    	    <div class="lable">Units</div>
                        <select name="units" class="select-field">
                        	<option value="0">------------------------------Select---------------------------</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
    	            </div>
                    <div class="gap-type-2"></div>
                    <div class="input-row">
        	    	    <div class="lable">Upload PDF:</div>
                        <input type="file" name="u-attach" class="upload-field" />
    	            </div>
                    <br />
                    <input type="submit" value="save" />
	            </form>
            </div>
        </div>
    </center>
</body>
</html>
<?php 
	if(isset($_SESSION["notification"])){
		unset($_SESSION["notification"]);
	}
?>