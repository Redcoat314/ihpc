<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
<?php require("connect.php"); ?>
<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.8.23.custom.css"/>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script>
	var list=$(".home-post-list");
	list.imagesLoaded(function(){
		$(".home-post-list").masonry({
			itemSelector:".home-post-list > li",
			gutter:0,
			"isFitWidth":true,
			columnWidth:313	
		});
	});
</script>
<style>
	.home-post .post-header{
		padding:5px;
		font-size:18px;
		font-weight:bold;
		text-align:left;
		color:#FFF;
		background-color:#000;
		font-family: 'Lato', sans-serif;
		-moz-border-radius-topleft: 2px; 
		-webkit-border-top-left-radius: 2px; 
		-khtml-border-top-left-radius: 2px; 
		border-top-left-radius: 2px;
		-moz-border-radius-topright: 2px; 
		-webkit-border-top-right-radius: 2px; 
		-khtml-border-top-right-radius: 2px; 
		border-top-right-radius: 2px;
	}
	.home-post .post-body{
		border-bottom:1px solid #dadada;
	}
	.home-post .post-footer{
		padding:5px;
		font-size:11px;
		color:#8A8A8A;
	}
	.home-post .post-footer a{
		color:#8A8A8A;
	}
	.home-post .post-footer a:hover{
		text-decoration:underline;
	}
	.home-post-list{
		list-style:none;
		padding:0px;
		margin:0px;	
	}
	.home-post-list li{
		float:left;	
		margin:0px 5px 10px 5px;
	}
	.home-post-grid-1{
		width:303px;
	}
	.home-post-grid-2{
		width:616px;
	}
	.home-post-list li .home-post{
		box-shadow:0px 0px 2px #616161;
		background-color:#EFEFEF;
		border-radius:2px;
	}
	.home-post-list li .home-post .post-body .post-img{
		display:inline-block;
	}
	.home-post-list li .home-post .post-body .post-text{
		font-size:14px;
		padding:5px;
		font-family:sans-serif;
		text-align:left;
		background-color:#FFF;
		color:#333;
		line-height:20px;
	}
</style>
<center>
    	<ul class="home-post-list">
        	<li>
            	<div class="home-post home-post-grid-1">
                	<div class="post-header ui-corner-top">
                    <i class="fa fa-thumb-tack"></i>&nbsp;&nbsp;Promote US!
                    </div>
                    <div class="post-body">
                    	<div class="post-img">
                        	
                        </div>
                        <div class="post-text">
                        	lhjsdofjds;jfdrsj dfger ger ger g erg erg re ger gerklgnerigerj er ger erigjeri gjerijergi erjgier gerigvje rgrhjegio ergierjg iergjer ig erigvjeri gergj erg erjig ergierjg erigj ergijeri grjegi erigj erigj reg
                        </div>
                    </div>
                    <div class="post-footer">
                    	<div class="float-left">
                        	<div class="date">
                            	Highly Recomended
                            </div>
                        </div>
                        <div class="float-right">
                        	Posted by - <a href="#"><b>C.E.O</b></a>
                        </div>
                        <div class="float-clear"></div>
                    </div>
                </div>
            </li>
        	<?php 
				$sql="SELECT `title`, `desc`, `home-post`.`type`, `attatchment`, DATE_FORMAT(`home-post`.`dor`, '%M %D %Y') as 'dpost', `signup`.`id`, `signup`.`rname`, `signup`.`dname` FROM `home-post`, `signup` where `signup`.`id`=`home-post`.`admin` order by `home-post`.`dor` desc, `home-post`.`tor` desc limit 0,30";
				if($res=mysqli_query($con,$sql)){
					while($row=mysqli_fetch_array($res)){
			?>
            <li>
            	<div class="home-post <?php if($row["type"]==1){echo "home-post-grid-1";}else if($row["type"]==2){echo "home-post-grid-2";}else{echo "home-post-grid-1";} ?>">
                	<div class="post-header">
                    <?php if($row["type"]==1){echo "<span><i class='fa fa-align-justify'></i></span>&nbsp;";}else if($row["type"]==2){echo "<span style='color:#FF0;'><i class='fa fa-star'></i></span>&nbsp;";}else{echo "<span style='color:#FF0;'><i class='fa fa-star'></i></span>&nbsp;";} ?>
                    <?php echo $row["title"]; ?>
                    </div>
                    <div class="post-body">
                    	<div class="post-img">
                        	<?php
								if($row["attatchment"]!=''){
							?>
                            <img src="uploads/home-post/<?php echo $row["attatchment"]; ?>" <?php if($row["type"]==1){echo "width='303'";}else if($row["type"]==2){echo "width='616'";}else{echo "width='303'";} ?>/>
                            <?php		
								} 
							?>
                        </div>
                        <div class="post-text">
                        	<?php echo $row["desc"]; ?>
                        </div>
                    </div>
                    <div class="post-footer">
                    	<div class="float-left">
                        	<div class="date">
                            	<?php echo $row["dpost"]; ?>
                            </div>
                        </div>
                        <div class="float-right">
                        	Posted by - <a href="#"><b><?php echo $row["dname"]; ?></b></a>
                        </div>
                        <div class="float-clear"></div>
                    </div>
                </div>
            </li>
            <?php			
					}
				}
			?>
            <div class="float-clear"></div>
        </ul>
</center>