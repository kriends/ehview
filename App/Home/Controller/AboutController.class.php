<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function index(){
		
		
	   $indexmangers = M('Indexmanger')->select();
	   $this->assign('indexmangers',$indexmangers);
		
       $this->display();
	   
    }
}