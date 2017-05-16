<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>一哈视野</title>

<link href="/ehview/Public/static/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/ehview/Public/static/css/style1.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/ehview/Public/static/css/lightbox.css">
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

<style type="text/css">
img{max-width:100%; height:auto;}
</style>

<script type="text/javaScript">

</script>


</head>
<body>
<!-- header -->
<?php if(is_array($indexmangers)): $i = 0; $__LIST__ = $indexmangers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="banner">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
					<ul>
						<li><a href="mailto:@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><?php echo ($vo["email"]); ?></a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><?php echo ($vo["contact"]); ?></li>
					</ul>
			  </div>
		 </div>
		 <div class="banner_head_top">
			  <div class="logo">
					 <h1><a href="index.html">一哈<span class="glyphicon glyphicon-knight" aria-hidden="true"></span><span>视野</span></a></h1>
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
								 <li class="active"><a href="<?php echo U('Index/index');?>">首页</a></li>
								 <li><a href="<?php echo U('About/index');?>">关于我们</a></li>
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
		  <div class="banner-info">
			 <h3><?php echo ($vo["titlebg"]); ?></h3>
			 <h2><?php echo ($vo["textbg"]); ?></h2>
		  </div>
		  <div class="social">
				<ul>
					<li><a href="#"><span class="wechat"> </span></a></li>
					<li><a href="http://www.toutiao.com/m52464265475/"><span class="qqzone"> </span></a></li>
					<li><a href="http://weibo.com/2126697482/profile?topnav=1&wvr=6&is_all=1"><span class="weibo"> </span></a></li>
					<li><a href="#"><span class="qq"> </span></a></li>
				</ul>
				<div class="clearfix"></div>
		 </div>
	 </div>	 
</div>

<div class="welcome">
	 <div class="container">
		 <div class="welcome-info">
				<h3><?php echo ($vo["textle"]); ?></h3>
				<h4><?php echo ($vo["intro"]); ?></h4>
				<p><?php echo ($vo["context"]); ?></p>
	     </div>
	 </div>
</div>
<!---->  
<div class="content">
	<div class="container">
		  <div class="col-md-8 content-left">
			 <div class="information">
				 <h4><?php echo ($vo["information"]); ?></h4>
				 <div class="information_grids">
					 <div class="info">					 
						 <p><?php echo ($vo["informationtext"]); ?></p>
						 <a href="<?php echo U('About/index');?>">更多</a>
					 </div>
					 <div class="info-pic">	
						 <?php echo ($vo["informationbg"]); ?>
					 </div>
					 <div class="clearfix"></div>
				 </div>
			 </div>

			 <div class="row-fluid">
			    <?php if(is_array($videos)): $i = 0; $__LIST__ = $videos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-xs-6 col-sm-6">
						 <div class="grid">
							 <a href="<?php echo U('Video/video',array('id' => $vo['id']));?>"><?php echo ($vo["photo"]); ?></a>
							 <div class="grid1-info">
								 <h4><a href="<?php echo U('Video/video',array('id' => $vo['id']));?>"><?php echo ($vo["title"]); ?></a></h4>
								 <!-- <p><?php echo ($vo["context"]); ?></p> -->
							 </div>
							 <div class="more">
							 <a href="<?php echo U('Video/index');?>">更多</a>
							 </div>
						 </div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		  </div>
          <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >一哈视野</a></div>
		<div class="col-md-4 content-right">
			  <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav2" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">推荐</a></li>
                    <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">热门</a></li>
                    </ul>
               <!-- Tab panes -->
              <div class="tab-content">
						<div role="tabpanel" class="tab-pane active re-pad2" id="home">
						   <?php if(is_array($videos)): $i = 0; $__LIST__ = $videos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="game1">
								<div class="col-md-3 tab-pic">
									<a href="<?php echo U('Video/video',array('id' => $vo['id']));?>"><?php echo ($vo["photo"]); ?></a>
								</div>
								<div class="col-md-9 tab-pic-info">
								<h4><a href="<?php echo U('Video/video',array('id' => $vo['id']));?>"><?php echo ($vo["title"]); ?></a></h4>
								<!-- <p><?php echo ($vo["context"]); ?></p> -->
								</div>
								<div class="clearfix"></div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>

						</div>
						<div role="tabpanel" class="tab-pane re-pad2" id="profile">
						    <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="game-post">
								<div class="col-md-3 tab-pic">
									<a href="single.html"><?php echo ($vo["photo"]); ?></a>
								</div>
								<div class="col-md-9 tab-post-info">
								<h4><a href="single.html"><?php echo ($vo["title"]); ?></a></h4>
								<!-- <p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p> -->
								</div>
								<div class="clearfix"></div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>                   
			 </div>
			 <!---->
			 <div class="category blog-ctgry">
					<h4>文章</h4>
					
					<div class="list-group">
					    <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Article/article',array('id' => $vo['id']));?>" class="list-group-item"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
						<a href="<?php echo U('Article/index');?>" class="list-group-item">查看更多</a>

					</div>
			 </div>	
			 <!-- <div class="photo-gallery">
				 <h4>Photo Gallery</h4>
				 <div class="gallery-1">
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="images/p2.jpg" data-lightbox="example-set"><img class="example-image" src="/ehview/Public/static/images/p1.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="images/p1.jpg" data-lightbox="example-set"><img class="example-image" src="/ehview/Public/static/images/p1.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="images/p3.jpg" data-lightbox="example-set"><img class="example-image" src="/ehview/Public/static/images/p3.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				 </div>
				 <div class="gallery-1">
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="images/p4.jpg" data-lightbox="example-set"><img class="example-image" src="/ehview/Public/static/images/p4.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="images/p5.jpg" data-lightbox="example-set"><img class="example-image" src="/ehview/Public/static/images/p5.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="images/p6.jpg" data-lightbox="example-set"><img class="example-image" src="/ehview/Public/static/images/p6.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				 </div>
				 <div class="gallery-1">
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="images/p1.jpg" data-lightbox="example-set"><img class="example-image" src="/ehview/Public/static/images/p1.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="images/p3.jpg" data-lightbox="example-set"><img class="example-image" src="/ehview/Public/static/images/p3.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="images/p4.jpg" data-lightbox="example-set"><img class="example-image" src="/ehview/Public/static/images/p4.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				 </div>

			 </div> -->
		<!-- <div class="photo-gallery">
	        <div id="waterfall" class="article-list">
		        <?php if(is_array($videos)): $i = 0; $__LIST__ = $videos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="article">
					    <a href="<?php echo U('Video/video',array('id' => $vo['id']));?>"><?php echo ($vo["photo"]); ?></a>
			        </div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div> -->
        </div>
    </div>
	<div class="clearfix"></div>
</div>
<script src="/ehview/Public/DWZ/lightbox-plus-jquery.min.js"></script>

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
</div><?php endforeach; endif; else: echo "" ;endif; ?>

</body>

</html>