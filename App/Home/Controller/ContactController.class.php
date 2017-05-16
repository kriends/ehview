<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends Controller {
    public function index(){
		
	   $indexmangers = M('Indexmanger')->select();
	   $this->assign('indexmangers',$indexmangers);
		
       $this->display();
	   
    }
}