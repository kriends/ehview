<?php
namespace Home\Controller;
use Think\Controller;
use Think\Log;

class CommonController extends Controller {
	public function index() {

		$model = D($this->dbname);
		$map = $this->_search();



		$this->assign("map", $map);
		
		if (method_exists($this, '_filter')) {
			$this->_filter($map);
		}
		
		if (!empty($model)) {
			$this->_list($model, $map);
		}
		$this->display();
	}

	protected function _search($dbname='') {
		//生成查询条件
		
		$dbname = $dbname ? $dbname : $this->dbname;
		
		$model = D($dbname);
		$map = array();
			
		foreach ($model->getDbFields() as $key => $val) {
			if (isset($_REQUEST [$val]) && $_REQUEST [$val] != '') {
				if(in_array($val, array('name','account'))){//需要模糊查询的字段，可再添加，如title等
					$map [$val] = array('like','%'.$_REQUEST [$val].'%');
				}else{
					$map [$val] = $_REQUEST [$val];
				}
					
			}
		}
		return $map;
	}
	
	protected function _list($model, $map, $asc = false) {
		

		//取得满足条件的记录数
		$count = $model->where($map)->count();

		if ($count > 0) {


			$p = new \Think\Page($count, $listRows);
			//分页查询数据
			$numPerPage = empty($_REQUEST['numPerPage']) ? C('PAGE_LISTROWS') : $_REQUEST['numPerPage'];
			//上面的获得每页显示的数据条数
			// dump("`" . $order . "` " . $sort);
			//分页查询数据
			$voList = $model->where($map)->order("`" . $order . "` " . $sort)->limit($numPerPage)->page($_REQUEST[C('VAR_PAGE')])->select();
			// $voList = $model->where($map)->order("`" . $order . "` " . $sort)->limit($p->firstRow . ',' . $p->listRows)->select();

			//分页跳转的时候保证查询条件
			foreach ($map as $key => $val) {
				if (!is_array($val)) {
					$p->parameter .= "$key=" . urlencode($val) . "&";
				}
			}

			//分页显示
			$page = $p->show();
			
			
		   if( method_exists($this, '_after_list')){
				
				$voList=$this->_after_list($voList);
			}
			
			//模板赋值显示
			$this->assign("map", $map);
			
			$this->assign('list', $voList);
			
			$this->assign("page", $page);
		}
	}
}