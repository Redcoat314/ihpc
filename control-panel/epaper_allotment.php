<?php 
	session_start();
?>
<?php require("../includes/connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/base.css"/>
<title>epaper_allotment</title>
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
        	Exam paper added.
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
        		<form action="process/alot-epaper.php" method="post" enctype="multipart/form-data">
                        	
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
        	    	    <div class="lable">Batch</div>
                        <select name="batch" class="select-field">
                        	<option value="0">------------------------------Select---------------------------</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
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