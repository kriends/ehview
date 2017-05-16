<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends Controller {
    public function index(){
		
	   $videos = M('Video')->where('status = 1')->select();
	   $this->assign('videos',$videos); 
	   
	   $indexmangers = M('Indexmanger')->select();
	   $this->assign('indexmangers',$indexmangers);
		
       $this->display();
	   
    }
	
	public function video(){
		
		
	   $Video = M('Video');
	   
	   $id = $_GET['id'];
	   $map['id'] = array('eq',$id);
	   $video = $Video->where($map)->select();
	   $this->assign('video',$video);
	   
	   $indexmangers = M('Indexmanger')->select();
	   $this->assign('indexmangers',$indexmangers);
	   
	   $videolist = $Video->where('status = 1')->limit(4)->select();
	   $this->assign('videolist',$videolist);
	   
	   $videos = $Video->where('status = 1')->limit(6)->select();
	   $this->assign('videos',$videos);
		
       $this->display();
	}
}