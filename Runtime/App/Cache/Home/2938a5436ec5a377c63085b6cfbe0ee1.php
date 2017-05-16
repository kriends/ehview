<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>关于我们</title>

<link href="/ehview/Public/static/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/ehview/Public/static/css/style1.css" rel='stylesheet' type='text/css' />
<link href="/ehview/Public/static/css/article.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="/ehview/Public/DWZ/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="/ehview/Public/static/css/common.css" />
<link rel="stylesheet" type="text/css" href="/ehview/Public/static/css/style4.css" />
<script type="text/javascript" src="/ehview/Public/DWZ/modernizr.custom.79639.js"></script>
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
								 <li class="active"><a href="<?php echo U('About/index');?>">关于我们</a></li>
								 <li><a href="<?php echo U('Article/index');?>">资讯</a></li>
								 <li><a href="<?php echo U('Video/index');?>">视频</a></li>
								 <li><a href="<?php echo U('Contact/index');?>">联系我们</a></li>
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
<div class="about"> 
		<div class="container">
			<h2>关于我们</h2>
			<div class="about-text">
				<div class="col-md-6 about-text-left">
					<img src="/ehview/Public/static/images/g9.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-6 about-text-right">
					<h4>Suspendisse ac odio lacinia massa ornare blandit at sit amet dui.</h4>
					<p>The point of using content here'orem Ipsum whichbut the majority have  passage of Lorem Ipsum, you need   
						anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators making this the first true generato.</p>
					<p>Lorem Ipsum whichbut the majority have  passage of Lorem Ipsum,  All the Lorem Ipsum generators making this the first you need to be sure there isn't  
						anything embarrassing hidden in the middle of text</p>
					<ul>
						<li><a href="#">Donec quam andomised words.</a></li>
						<li><a href="#">Etiam volutpa andomised words</a></li>
						<li><a href="#">Varius fusce domised words.</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="abt-btm-grids">
			 <div class="col-md-3 abt-sec span_1_of_4">
				 <div class="num-heading">
					   <div class="number">
							<figure><span>1</span></figure>
					   </div>
					  <div class="heading">								
						  <h4>Donec ultricies</h4>
					  </div>
					  <div class="clearfix"></div>
				 </div> 
				 <div class="heading-desc">	
					 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
				 </div>	
			 </div>
			 <div class="col-md-3 abt-sec span_1_of_4">
				 <div class="num-heading">
					   <div class="number">
							<figure><span>2</span></figure>
					   </div>
					  <div class="heading">								
						  <h4>Cras accumsan</h4>
					  </div>
					  <div class="clearfix"></div>
				 </div> 
				 <div class="heading-desc">	
					 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
				 </div>	
			 </div>
			 <div class="col-md-3 abt-sec span_1_of_4">
				 <div class="num-heading">
					   <div class="number">
							<figure><span>3</span></figure>
					   </div>
					  <div class="heading">								
						  <h4>Fusce rutrum</h4>
					  </div>
					  <div class="clearfix"></div>
				 </div> 
				 <div class="heading-desc">	
					 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
				 </div>	
			 </div>
			 <div class="col-md-3 abt-sec span_1_of_4">
				 <div class="num-heading">
					   <div class="number">
							<figure><span>4</span></figure>
					   </div>
					  <div class="heading">								
						  <h4>Integer vitae</h4>
					  </div>
					  <div class="clearfix"></div>
				 </div> 
				 <div class="heading-desc">	
					 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
				 </div>	
			 </div>
			 <div class="clearfix"></div>
		 </div>	
		 <!--teamstarts--> 
			<div class="team">
					<div class="team-top">
						<h3>Our Team</h3>
					</div>
					<div class="team-bottom">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-1">				
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-1"></div>
											<div class="ch-info-back">
												<h3>Pellentesque ut metus </h3>
												<p>by Josh Schott</p>
											</div>	
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item ch-img-2">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-2"></div>
											<div class="ch-info-back">
												<h3>Mauris sit amet fringilla</h3>
												<p>by Jeremy Slagle</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item ch-img-3">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-3"></div>
											<div class="ch-info-back">
												<h3>Morbi eget augue</h3>
												<p>by Dustin Leer</p>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
			</div>
			<!--teamend--> 

		</div>
</div>
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