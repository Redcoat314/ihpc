<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/base.css"/> 
<title>galleryhome</title>
<style>
	.gallery-grids{
		background-color:#e8e8e8;
		border:1px solid #dadada;	
	}
</style>
</head>

<body>
	<center>
    	<div class="main-wrap">
        	<?php 
				require_once("../includes/header.php");
			?>
            <div class="mid-cont">
            	<div class="gallery-category">
                	<div class="by-website">
                    	<div class="website-text">By the website</div>
                        <div class="gallery-grids">
                        <div class="gap-type-2"></div>
                        	<ul class="gallery-list">
                                <li>
                                	<a href="#">
                                    	<?php require("../includes/album-include.php"); ?>
                                    </a>
                                </li>
                                <li>
                                	<a href="#">
                                    	<?php require("../includes/album-include.php"); ?>
                                    </a>
                                </li>
                                <li>
                                	<a href="#">
                                    	<?php require("../includes/album-include.php"); ?>
                                    </a>
                                </li>
                                <li>
                                	<a href="#">
                                    	<?php require("../includes/album-include.php"); ?>
                                    </a>
                                </li>
                                <div class="float-clear"></div>                                
                            </ul>
                            <a href="#">
                            	<div class="expand-button">Expand...</div>
                            </a>
                        </div>
                    </div>
                    <div class="gap-type-4"></div>
                    <div class="by-users">
                    	<div class="website-text">By the Users</div>
                        <div class="gallery-grids">
                        	<ul class="gallery-list">
                                        	
                                <div class="gap-type-2"></div>
                                <li>
                                	<a href="#">
                                    
                                		<div class="thumb">
                                        <img src="../images/IMG_20130722_144125_1.jpg" />
                                        </div>
                                    </a>
                                </li>
                                <li>
                                	<a href="#">
                                    
                                		<div class="thumb left-margin-20px">
                                        	<img src="../images/IMG_20130722_144125_1.jpg" />
                                        </div>
                                    </a>
                                </li>
                                <li>
                                	<a href="#">
                                    
                                		<div class="thumb left-margin-20px">
                                        	<img src="../images/IMG_20130722_144125_1.jpg" />
                                        </div>
                                    </a>
                                </li>
                                <li>
                                	<a href="#">
                                    
                                		<div class="thumb left-margin-20px">
                                        	<img src="../images/IMG_20130722_144125_1.jpg" />
                                        </div>
                                    </a>
                                </li>
                                <div class="float-clear"></div>                                
                            </ul>
                            <a href="#">
                            	<div class="expand-button">Expand...</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        	 <?php 
				require_once("../includes/footer.php");
			?>	
        
        </div>
    </center>
    
</body>
</html>