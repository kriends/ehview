<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>一哈视野</title>

<link href="/ehview/Public/static/css/style1.css" rel='stylesheet' type='text/css' />
<link href="/ehview/Public/static/css/article.css" rel='stylesheet' type='text/css' />
<link href="/ehview/Public/static/css/main.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/ehview/Public/static/css/lightbox.css">

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
<link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=6aba13f0.css">

<style type="text/css">
img{max-width:100%; height:auto;}
</style>

<script type="text/javaScript">

</script>


</head>
<body>
<!-- header -->
<div class="gheader-wrap">
    <div class="gheader-new">
	    <div class="gh-wrap">
		    <div class="gfl">
			    <ul class="gh-nav">
				    <li>
					    <a href="index.php">
					       <span class="gnicon-home">首页</span>
						</a>
				    </li>
					<li>
					    <a href="<?php echo U('Video/index');?>">视频</a>
				    </li>
					<li>
					    <a href="<?php echo U('Article/index');?>">文章</a>
				    </li>
					<li>
					    <a href="<?php echo U('Contact/index');?>">帮助</a>
				    </li>
					<li>
					    <a href="<?php echo U('About/index');?>">关于</a>
				    </li>
					<li>
					    <a href="<?php echo U('Contact/index');?>">联系我们</a>
				    </li>
			    </ul>
			</div>
			<div class="gh-login">
			</div>
	    </div>
    </div>
	<div class="gh-sub-nav-wrap" id="subNav">
	    <div class="gh-sub-nav">
		    <h1>
			    <a class="gh-sub-nav-title" href="index.php">
				   <img src="/ehview/Public/static/images/logo1.png">
				</a>
			</h1>
			<ul class="gh-sub-nav-list">
			    <li class>
			       <a href="<?php echo U('Article/index');?>">推荐</a>
				</li>
				<li class>
			       <a href="<?php echo U('Video/index');?>">视频</a>
				</li>
				<li class>
			       <a href="<?php echo U('About/index');?>">关于</a>
				</li>
				<li class>
			       <a href="<?php echo U('Contact/index');?>">联系我们</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="container article-page">
	<div class="main">
		<div class="content">
		    <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content-th">
				   <h1 itemprop="http://purl.org/dc/terms/title"><?php echo ($vo["title"]); ?></h1>
				   <div class="content-th-info">
				      <span>发表于&nbsp;<?php echo (date('Y-m-d H:i',$vo["update_time"])); ?></span>
				   </div>
		        </div>
			    <div itemprop="http://rdfs.org/sioc/ns#content" class="context-txt">
				    <div class="document">
				        <div>
					    <?php echo ($vo["description"]); ?>
					    </div>
				    </div>
			    </div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="recommend-articles">
				<div class="document-do">
				    <div id="share" class="gfl share-box bdsharebuttonbox" data-tag="shareNain" data-xlnickname style="display:block;">
					    <span>分享到</span>
						<a data-cmd="douban" class="icon icon-douban" href="javascript:void(0)" title="分享到豆瓣"></a>
						<a data-cmd="tsina" class="icon icon-weibo" href="javascript:void(0)" title="分享到新浪微博"></a>
						<a data-cmd="qzone" class="icon icon-qzone" href="javascript:void(0)" title="分享到QQ空间"></a>
						<a data-cmd="weixin" class="icon icon-weixin" href="javascript:void(0)" title="分享到微信"></a>
						<a data-cmd="tqq" class="icon icon-qqmb" href="javascript:void(0)" title="分享到腾讯微博"></a>
					</div>
				</div>
				<h2>你可能感兴趣</h2>
				<ul class="recommend-articles-list">
				    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				          <a href="<?php echo U('Article/article',array('id' => $vo['id']));?>"><?php echo ($vo["photo"]); ?></a>
					      <a href="<?php echo U('Article/article',array('id' => $vo['id']));?>" class="recommend-article-title"><?php echo ($vo["title"]); ?></a>
				        </li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="side">
		<div class="author-info clearfix">
		</div>
		<div class="side-title">
			<h2>更多文章</h2>
		</div>
		<ul class="related-article">
			<?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				    <a href="<?php echo U('Article/article',array('id' => $vo['id']));?>"><?php echo ($vo["title"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="side-qr-code">
			<img src="/ehview/Public/static/images/qrcode.jpg">
		    <p>更多内容，扫码早知道</p>
		</div>
	</div>
</div>


<div class="gbottom">
    <div class="gbottom-nav">
	    <a href="index.php">首页</a>
	    <a href="<?php echo U('video/index');?>">视频</a>
	    <a href="<?php echo U('Article/index');?>">资讯</a>
	    <a href="<?php echo U('About/index');?>">关于我们</a>
	    <a href="<?php echo U('Contact/index');?>">联系我们</a>
	    <a href="#">移动应用</a>
	    <a href="<?php echo U('Contact/index');?>">帮助</a>
	</div>
	<div class="gbottom-i">
	   <p>
          ©2017一哈视野&nbsp;&nbsp;滇ICP证100430号&nbsp;&nbsp;滇网文[2015] 0609-239号&nbsp;&nbsp;新出发京零字东150005号    
          </p>
	</div>
</div>




<style>
.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}
</style>
</body>

</html>