<link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="http://localhost/ihpc/css/base.css"/>
<script type="text/javascript" src="http://localhost/ihpc/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://localhost/ihpc/js/jquery-ui-1.8.23.custom.min.js"></script>
<script>
	(function(){
//		$("body").css({"background-size" : $(window).width()+"px "+$(window).height()+"px"});
	})();
</script>
<style>
	.header-wrap{
		background-color:#000;	
	}
	.header-inner-wrap{
		padding:0px 20px 0px 20px;	
	}
	.header-tab{
		padding:10px 20px 10px 20px;
		color:#FFF;	
		font-size:14px;
	}
	.header-tab a{
		color:#FFF;
		text-decoration:none;	
	}
	.logo-wrap{
		color:#FFF;
		padding:3px 10px 1px 10px;	
		font-size:14px;
	}
</style>
<div class="header-wrap">
	<div class="header-inner-wrap">
    	<div class="float-left">
        <a href="http://localhost/ihpc/">
            <div class="logo-wrap float-left bg-green">
              	<img src="http://localhost/ihpc/images/iehcLogo.png" height="27"/><br>
                <div class="gap-type-2px"></div>
                <span style="font-size:12px; font-weight:bold; color:#000;">IEHC</span>
            </div>
         </a>
            <div class="float-left">
	            <?php require_once("main-menu.php"); ?>  
            </div>
            <div class="float-clear"></div>    
        </div>
        <div class="float-right">
        	<div class="header-tab float-left border-left-gray border-right-gray">
            	<a href="http://localhost/ihpc/signin/">
            		<div class="button-type-1 bg-green border-radius-2px">
	            	Sign-in
                	</div>    
                </a>
            </div>
            <div class="float-left header-tab border-right-gray">
             	<a href="http://localhost/ihpc/signup/">
            		<div class="button-type-1 border-radius-2px">
	            		Sign-up
                	</div>    
                </a>
            </div>
            <div class="float-clear"></div>
        </div>
        <div class="float-clear"></div>
	</div>
</div>
<div class="bg-green gap-type-3px"></div>
