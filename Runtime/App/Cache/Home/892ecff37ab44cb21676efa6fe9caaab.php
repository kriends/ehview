<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>联系我们</title>

<link href="/ehview/Public/static/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/ehview/Public/static/css/style1.css" rel='stylesheet' type='text/css' />
<link href="/ehview/Public/static/css/article.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="/ehview/Public/DWZ/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  
</head>
<body>
<!-- header -->
<div class="banner banner2">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
				<?php if(is_array($indexmangers)): $i = 0; $__LIST__ = $indexmangers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
						<li><a href="mailto:@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><?php echo ($vo["email"]); ?></a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><?php echo ($vo["contact"]); ?></li>
					</ul><?php endforeach; endif; else: echo "" ;endif; ?>
			  </div>
		 </div>
		 <div class="banner_head_top">
			  <div class="logo">
					<h1><a href="index.php">一哈<span class="glyphicon glyphicon-knight" aria-hidden="true"></span><span>视野</span></a></h1>
			 </div>	
			 <div class="top-menu">	 
			     <div class="content white">
					 <nav class="navbar navbar-default">
						 <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				
						 </div>
						 <!--/navbar header-->		
						 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav">
								 <li><a href="index.php">首页</a></li>
								 <li><a href="<?php echo U('About/index');?>">关于我们</a></li>				
								 <li><a href="<?php echo U('Article/index');?>">资讯</a></li>
								 <li><a href="<?php echo U('Video/index');?>">视频</a></li>
								 <li class="active"><a href="<?php echo U('Contact/index');?>">联系我们</a></li>
							 </ul>
							</div>
						  <!--/navbar collapse-->
					 </nav>
					  <!--/navbar-->
				 </div>
					 <div class="clearfix"></div>
					<script type="text/javascript" src="/ehview/Public/DWZ/bootstrap-3.1.1.min.js"></script>
			  </div>
				 <div class="clearfix"></div>
		  </div>
	 </div>	 
</div>
<!---->
<div class="contact">
		<div class="container">
				<h2>Contact</h2>
			<div class="map">
				<h4>How to find us :</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.684442427422!2d80.23489400000001!3d13.055746999999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52665faca71f3d%3A0x4eb15438d7a22677!2sFrench+Loaf!5e0!3m2!1sen!2sin!4v1433740002194" style="border:0"></iframe>

				</div>
			<div class="address">
				<div class="col-md-4 address-grids">
					<h4>Address :</h4>
					<ul>
						<li><p>Eiusmod Tempor inc<br>
								St Dolore Place,<br>
								Kingsport 56777</p>
						</li>
					</ul>
				</div>
				<div class="col-md-4 address-grids">
					<h4>Phone :</h4>
					<p>+2 123 456 789</p>
					<p>+2 987 654 321</p>
				</div>
				<div class="col-md-4 address-grids">
					<h4>Email :</h4>
					<p><a href="mailto:example@email.com">mail@example.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>	
			<div class="contact-form">
				<h4>Contact Form</h4>
				<form>
					<input type="text" placeholder="Name" required="">
					<input type="email" placeholder="Email" required="">
					<input type="text" placeholder="Telephone" required="">
					<textarea placeholder="Message" required=""></textarea>
					<button class="btn1 btn-1 btn-1b">Submit</button>
				</form>
			</div>	
		</div>
	</div>
	<!-- //contact -->

<!-- footer -->
<div class="gbottom">
    <div class="gbottom-nav">
	    <a href="index.php">首页</a>
	    <a href="<?php echo U('video/index');?>">视频</a>
	    <a href="<?php echo U('Article/index');?>">资讯</a>
	    <a href="<?php echo U('About/index');?>">关于我们</a>
	    <a href="<?php echo U('Contact/index');?>">联系我们</a>
	    <a href="">移动应用</a>
	    <a href="">帮助</a>
	</div>
	<div class="gbottom-i">
	   <p>
          ©2017一哈视野    &nbsp;滇ICP证100430号    &nbsp;滇网文[2015] 0609-239号    &nbsp;新出发京零字东150005号    
          </p>
	</div>
</div>
<!---->

</body>
</html>