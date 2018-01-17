<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../../css/jquery-ui-1.8.23.custom.css"/>
<link rel="stylesheet" type="text/css" href="../../css/jquery.nailthumb.1.1.css"/>
<script type="text/javascript" src="../../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../../js/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="../../js/jquery.nailthumb.1.1.js"></script>
<script>
	$(document).ready(function(){
		$(".album-thumb-list > li > a").click(function(e){
			e.preventDefault();
			var imgURL=$(this).attr('href');
			var lbH=$(window).height(), lbW=$(window).width();
			$.post("loader/").done(function(data){
				var d=$.parseJSON(data);
				var imgD="<img src='http://localhost/ihpc/images/"+d.image+"' height='' width=''/>";
				$(".view-port").append(imgD);
			}).fail(function(e){
				alert(e.status);
			});
			$(".img-light-box").dialog({
				width:"auto",
				height:"auto",
				dialogClass:"no-titlebar custom-dialog",
				modal:true,
				closeOnEscape:true,
				resizable:false
			});
		});
	});
</script>
<title>Untitled Document</title>
<style>
	.no-titlebar .ui-dialog-titlebar{
		display:none;	
	}
	.custom-dialog{
		background-image:none;
		background-color:#000;
		border-radius:0px;
		border:1px solid #dadada;	
		padding:0px;
	}
	.user-detail-container{
		width:199px;	
		height:auto;
		padding:20px;
	}
	.note-wrap{
		width:280px;	
		margin-right:20px;
	}
	.album-thumb-container{
		width:700px;
		min-height:600px;
		height:auto !important;	
		background-color:#e8e8e8;
	}
	.lb{
		text-align:left;
		color:#00B700;
		font-size:14px;
		font-weight:bold;	
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
	.dp-wrap{
		width:64px;
		height:64px;
		border-radius:32px;
		background-color:#06F;
		background-image:url(../../images/abcd.jpg);
		background-repeat:no-repeat;
		background-size:contain;	
		background-position:top center;
		background-color:#e8e8e8
	}
	.dn-wrap{
		font-size:18px;
		color:#FFF;	
	}
	.user-detail-wrap{
		font-size:14px;
		color:#FFF;
		text-align:left;
		border-top:1px solid #333;	
	}
	.alb-title{
		padding:10px;
		background-color:#000;
		color:#FFF;	
		text-align:left;
		border-bottom:1px solid #333;
	}
	.album-thumb-list{
		list-style:none;
		padding:0px;
		margin:0px;	
	}
	.album-thumb-list li{
		float:left;
		border-bottom:1px solid #333;
	}
	.album-thumb-mini{
		width:175px;
		height:175px;	
	}
	.img-light-box{
		display:none;	
	}
	.img-light-box .img-comment-wrap{
		width:300px;
		background-color:#CCC;
		height:550px;
	}
	.img-light-box.ui-widget-content{
		padding:0px;	
	}
	.img-light-box .img-holder{
		width:750px;
		background-color:#fff;
		height:550px;
		background-image:url(http://localhost/ihpc/images/ajax-loader%2826%29.gif);
		background-repeat:no-repeat;
		background-position:center center;
		text-align:center;
		position:relative;
	}
	.view-port{
		background-position:center center;
		position:absolute;
		width:100%;
		height:100%;
		background-repeat:no-repeat;
	}
</style>
</head>

<body>
<div class="img-light-box">
	<div class="float-left img-holder">
        <div class="view-port"></div>
    </div>
	<div class="float-right img-comment-wrap">
    
    </div>
    <div class="float-clear"></div>
</div>
<center>
	<div>
    	<?php require("../../includes/header.php");?>
    </div>
    <div class="mid-cont">
	    <div class="float-left bg-black user-detail-container" style="border-right:1px solid #333;">
        	<div class="dp-wrap"></div>
            <div class="gap-type-1"></div>
            <div class="dn-wrap">Anas Zubair</div>
            <div class="gap-type-4"></div>
            <div class="user-detail-wrap">
            <div class="gap-type-4"></div>
            	<div class="lb">Email</div>
                <div>hndy2565@gmail.com</div>
                <div class="gap-type-2"></div>
                <div class="lb">Contact No.</div>
                <div>+919452776688</div>
            </div>
    	</div>
	    <div class="float-right album-thumb-container">
        	<div class="alb-title">
            	A column is a vertical entity in a table that contains.
            </div>
            <div class="album-thumb-wrap">
            	<ul class="album-thumb-list">
                    <li>
                    	<a href="http://localhost/ihpc/images/nirvana-5.jpg">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/nirvana-5.jpg" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/ezgif-save.gif">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/ezgif-save.gif" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/nirvana-5.jpg">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/nirvana-5.jpg" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/ezgif-save.gif">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/ezgif-save.gif" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/nirvana-5.jpg">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/nirvana-5.jpg" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/ezgif-save.gif">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/ezgif-save.gif" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/nirvana-5.jpg">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/nirvana-5.jpg" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/ezgif-save.gif">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/ezgif-save.gif" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/nirvana-5.jpg">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/nirvana-5.jpg" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/ezgif-save.gif">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/ezgif-save.gif" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/nirvana-5.jpg">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/nirvana-5.jpg" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/ezgif-save.gif">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/ezgif-save.gif" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/nirvana-5.jpg">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/nirvana-5.jpg" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/ezgif-save.gif">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/ezgif-save.gif" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/nirvana-5.jpg">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/nirvana-5.jpg" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                    <li>
                    	<a href="http://localhost/ihpc/images/ezgif-save.gif">
	                    	<div class="album-thumb-mini">
    	                    	<img src="../../images/ezgif-save.gif" width="175" height="175"/>
        	                </div>
                        </a>    
                    </li>
                </ul>
                <div class="float-clear"></div>
            </div>
    	</div>
        <div class="float-clear"></div>
	</div>        
    <?php 
		require_once("../../includes/footer.php");
	?>
</center>
</body>
</html>