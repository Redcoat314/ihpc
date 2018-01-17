<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/base.css"/>
<style rel="stylesheet" type="text/css">
	.main-wrap{
		width:100%;	
	}
	
</style>
</head>
<body>
	<center>
    	<div class="main-wrap">
        	<?php 
				require_once("includes/header.php");
			?>
            <div class="mid-cont">
<!--            	<div class="shout-box float-left">
                	<div>
                    <div class="shoutbox-header">Shoutbox</div>
                    </div>
                </div>
                <div class="notice-board float-left">
                	<div class="notice-board-text">Notice Board</div>
                </div>
                <div class="other-stuff float-right">
                	<div>other stuff</div>	 
                </div>
                <div class="float-clear"></div>-->
                <?php require("includes/home-timeline.php");?>
            </div>
            <?php 
				require_once("includes/footer.php");
			?>
            
            
        </div>
    </center>
</body>
</html>