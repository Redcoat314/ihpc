<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.signin-wrap{
		width:300px;	
		height:auto;
		padding:20px;
	}
	.note-wrap{
		width:580px;	
		margin-right:20px;
	}
	.signin-field{
		padding:8px;
		width:280px;
		border:2px solid #090;	
	}
	.signin-select-field{
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
			<br /><br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
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
			<div class="signin-wrap bg-black">
            	<div class="form-heading">
                	Sign-in
                </div><br />
            	<div class="form-wrap-1">
                	<div class="form-row">
    	                <div class="lb">Email</div>
	                    <input type="text" class="signin-field" name="email" placeholder="Enter your registered email..."/>
                    </div>
                    <div class="gap-type-2"></div>
                    <div class="form-row">
    	                <div class="lb">Password</div>
	                    <input type="password" class="signin-field" name="pass"/>
                    </div>                    
                    <div class="float-left">
                    	<input type="submit" style="display:none;" value="Save"/>
                        <div class="submit-button">
                        	Sign-in
                        </div>
                    </div>
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