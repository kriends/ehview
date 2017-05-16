<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		
	   $videos = M('Video')->lock(true)->where('status=1')->order('createtime desc')->limit(6)->select();
	   $this->assign('videos',$videos);
	   
	   $indexmangers = M('Indexmanger')->select();
	   $this->assign('indexmangers',$indexmangers);
	   
	   $Article = M('Article');
	   $articles = $Article->lock(true)->where('status=1')->order('update_time desc')->limit(5)->select();
	   $this->assign('articles',$articles);
	   $this->display();

    }
}