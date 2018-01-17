<link rel="stylesheet" type="text/css" href="../css/base.css"/>
<style>
	.album-wrap{
		width:224x;
		height:auto;
		background-color:#e8e8e8;
		border:1px solid #dadada;
		border-radius:2px;	
	}
	.album-title{
		padding:5px;
		color:#5C5C5C;	
	}
	.album-footer{
		padding:5px;
		color:#666;
		font-size:10px;	
	}
</style>
<?php 
$at=2;
if($at==1){
?>
<div class="album-wrap">
	<div class="album-title">
    	College Fest 2014
    </div>
	<div class="thumb-type-1">
    	<img src="../images/IMG_20130722_144125_1.jpg" width="216" height="216"/>
    </div>    
    <div class="album-footer">
    	<div class="float-left img-count">
        	24
        </div>
        <div class="float-right">
        	<a href="#">View all</a>
        </div>
        <div class="float-clear"></div>
    </div>
</div>
<?php	
}else if($at==2){
?>
<div class="album-wrap">
	<div class="album-title">
    	College Fest 2014
    </div>
	<div class="thumb-wrap">
    	<div class="float-left">
	    	<div class="thumb-type-2">
		    	<img src="../images/nirvana-5.jpg" width="112" height="216"/>
        	</div>
        </div>
        <div class="float-left">
	    	<div class="thumb-type-2">
		    	<img src="../images/ezgif-save.gif" width="112" height="216"/>
        	</div>
        </div>
        <div class="float-clear"></div>    
    </div>    
    <div class="album-footer">
    	<div class="float-left img-count">
        	24
        </div>
        <div class="float-right">
        	<a href="#">View all</a>
        </div>
        <div class="float-clear"></div>
    </div>
</div>
<?php		
}else if($at==3){
?>
<div class="album-wrap">
	<div class="album-title">
    	College Fest 2014
    </div>
	<div class="thumb-wrap">
    	<div class="float-left">
	    	<div class="thumb-type-3">
		    	<img src="../images/nirvana-5.jpg" width="109" height="108"/>
        	</div>
        </div>
        <div class="float-left">
	    	<div class="thumb-type-3">
		    	<img src="../images/ezgif-save.gif" width="109" height="108"/>
        	</div>
        </div>
        <div class="float-clear"></div>
        <div class="float-left">
	    	<div class="thumb-type-3">
		    	<img src="../images/ezgif-save.gif" width="109" height="108"/>
        	</div>
        </div>
        <div class="float-left">
	    	<div class="thumb-type-3">
		    	<img src="../images/nirvana-5.jpg" width="109" height="108"/>
        	</div>
        </div>
        <div class="float-clear"></div>    
    </div>    
    <div class="album-footer">
    	<div class="float-left img-count">
        	24
        </div>
        <div class="float-right">
        	<a href="#">View all</a>
        </div>
        <div class="float-clear"></div>
    </div>
</div>
<?php		
}else{
	echo "Unknown album type";
}?>