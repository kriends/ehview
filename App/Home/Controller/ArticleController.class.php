<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
	
    public function index(){
		
		$articleslist = M('Article')->select();
		
	    $this->assign('articleslist',$articleslist);
		
        $this->display();
	   
    }
	
	public function article(){
		
		$Article = M('Article');
		
		/* if(isset($_GET['id'])){
			$data = $Article->find($_GET['id']);
		} */
		
		$id = $_GET['id'];
		$map['id'] = array('eq',$id);
		$article = $Article->where($map)->select();
		$this->assign('article',$article);
		
		$list = $Article->lock(true)->where('status = 1')->limit(4)->select();
		$this->assign('list',$list);
		
		$articles = $Article->lock(true)->where('status = 1')->limit(6)->select();
		$this->assign('articles',$articles);
		
		$this->display();
		
	}
}
