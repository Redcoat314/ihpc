<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sign_up</title>
<style>
	.signup-wrap{
		width:300px;	
		height:auto;
		padding:20px;
	}
	.note-wrap{
		width:580px;	
		margin-right:20px;
	}
	.signup-field{
		padding:8px;
		width:280px;
		border:2px solid #090;	
	}
	.signup-select-field{
		padding:8px;
		width:300px;
		border:2px solid #090;	
	}
	.lb{
		text-align:left;
		color:#FFF;
		font-size:14px;
		font-weight:bold;	
	}
	.tag-list{
		list-style:none;
		padding:0px;
		margin:0px;	
	}
	.tag-list li{
		display:inline-block;	
	}
	.tag-list li .tag .tag-name{
		background-color:#000;
		color:#fff;
		padding:5px;
		font-size:12px;
	}
	.tag-list li .tag .rmv-tag{
		background-color:#000;
		color:#fff;
		width:12px;
		padding:5px;
		font-size:12px;
	}
	.tag-list li .tag .rmv-tag:hover{
		background-color:#333;
		cursor:pointer;	
	}
	.spcl-tag-wrap{
		padding:5px;	
	}
	.submit-button{
		padding:10px;	
		background-color:#090;
		border-radius:2px;
		margin-top:20px;
		color:#FFF;
		font-size:14px;
		width:80px;
		border-bottom:3px solid #090;
		border-top:3px solid #090;
	}
	.submit-button:hover{
		background-color:#00B700;
		cursor:pointer;
		border-top:3px solid #00B700;
	}
	.form-heading{
		font-size:24px;
		font-weight:bold;
		color:#FFF;
	}
</style>
</head>

<body>
<center>
	<div>
    	<?php require("../includes/header.php");?>
    </div>
    <div class="mid-cont">
	    <div class="float-left bg-green note-wrap">
    		<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
    	</div>
	    <div class="float-right">
			<div class="signup-wrap bg-black">
            	<div class="form-heading">
                	Sign-up
                </div><br />
            	<div class="form-wrap-1">
       	<?php 
			if(isset($_SESSION["notification"]) && $_SESSION["notification"]==1){
		?>
        
        <div class="success-state">
        	Registered successfully.
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
        
        	<form action="process/add-user.php" method="post" id="signup-form">
                	<div class="form-row">
    	                <div class="lb">Real Name</div>
	                    <input type="text" class="signup-field" name="rname" placeholder="Enter your real name..."/>
                    </div>
                    <div class="gap-type-2"></div>
                    <div class="form-row">
    	                <div class="lb">Display Name</div>
	                    <input type="text" class="signup-field" name="dname" placeholder="Enter your display name..."/>
                    </div>
                    <div class="gap-type-2"></div>
                    <div class="form-row">
    	                <div class="lb">Email</div>
	                    <input type="text" class="signup-field" name="email" placeholder="Enter your valid email..."/>
                    </div>
                    <div class="gap-type-2"></div>
                    <div class="form-row">
    	                <div class="lb">Contact No.<sup>(Optional)</sup></div>
	                    <input type="text" class="signup-field" name="cno" placeholder="Enter your contact number..."/>
                    </div>
                    <div class="gap-type-2"></div>
                    <div class="form-row">
    	                <div class="lb">Specialisation</div>
                        <select class="signup-select-field" name="spcl_in"><br />
							<option value="0">
                            	-----------------------------Select-----------------------------
                            </option>
                            <option value="1">Maths</option>
                            <option value="2">English</option>
                            <option value="3">Physics</option>
                            <option value="4">Computer Science</option>
                            <option value="5">Electrical</option>
                            <option value="6">Disaster Management</option>
                            <option value="7">Computer Graphics</option>
						</select>
                        <div class="gap-type-1"></div>
                        <div class="spcl-tag-wrap bg-green">
                        	<ul class="tag-list">
                            	<li>
                                	<div class="tag">
                                    	<div class="float-left tag-name">
                                        	Maths
                                        </div>
                                        <div class="float-left rmv-tag">
                                        	X
                                        </div>
                                    </div>
                                    <div class="float-clear"></div>
                                </li>
                                <li>
                                	<div class="tag">
                                    	<div class="float-left tag-name">
                                        	Computer Science
                                        </div>
                                        <div class="float-left rmv-tag">
                                        	X
                                        </div>
                                    </div>
                                    <div class="float-clear"></div>
                                </li>
                                <li>
                                	<div class="tag">
                                    	<div class="float-left tag-name">
                                        	Physics
                                        </div>
                                        <div class="float-left rmv-tag">
                                        	X
                                        </div>
                                    </div>
                                    <div class="float-clear"></div>
                                </li>
                                <li>
                                	<div class="tag">
                                    	<div class="float-left tag-name">
                                        	Maths
                                        </div>
                                        <div class="float-left rmv-tag">
                                        	X
                                        </div>
                                    </div>
                                    <div class="float-clear"></div>
                                </li>
                                <li>
                                	<div class="tag">
                                    	<div class="float-left tag-name">
                                        	Computer Science
                                        </div>
                                        <div class="float-left rmv-tag">
                                        	X
                                        </div>
                                    </div>
                                    <div class="float-clear"></div>
                                </li>
                                <li>
                                	<div class="tag">
                                    	<div class="float-left tag-name">
                                        	Physics
                                        </div>
                                        <div class="float-left rmv-tag">
                                        	X
                                        </div>
                                    </div>
                                    <div class="float-clear"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="float-right">
                    	<input type="submit" style="display:none;" value="Save"/>
                        <div class="submit-button">
                        	Submit
                        </div>
                    </div>
                    </form>
                    <div class="float-clear"></div>
                </div>
            </div>	    
    	</div>
        <div class="float-clear"></div>
	</div>        
    <?php 
		require_once("../includes/footer.php");
	?>
</center>
</body>
</html>
<?php 
	if(isset($_SESSION["notification"])){
		unset($_SESSION["notification"]);
	}
?>