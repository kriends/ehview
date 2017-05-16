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
		//���ɲ�ѯ����
		
		$dbname = $dbname ? $dbname : $this->dbname;
		
		$model = D($dbname);
		$map = array();
			
		foreach ($model->getDbFields() as $key => $val) {
			if (isset($_REQUEST [$val]) && $_REQUEST [$val] != '') {
				if(in_array($val, array('name','account'))){//��Ҫģ����ѯ���ֶΣ�������ӣ���title��
					$map [$val] = array('like','%'.$_REQUEST [$val].'%');
				}else{
					$map [$val] = $_REQUEST [$val];
				}
					
			}
		}
		return $map;
	}
	
	protected function _list($model, $map, $asc = false) {
		

		//ȡ�����������ļ�¼��
		$count = $model->where($map)->count();

		if ($count > 0) {


			$p = new \Think\Page($count, $listRows);
			//��ҳ��ѯ����
			$numPerPage = empty($_REQUEST['numPerPage']) ? C('PAGE_LISTROWS') : $_REQUEST['numPerPage'];
			//����Ļ��ÿҳ��ʾ����������
			// dump("`" . $order . "` " . $sort);
			//��ҳ��ѯ����
			$voList = $model->where($map)->order("`" . $order . "` " . $sort)->limit($numPerPage)->page($_REQUEST[C('VAR_PAGE')])->select();
			// $voList = $model->where($map)->order("`" . $order . "` " . $sort)->limit($p->firstRow . ',' . $p->listRows)->select();

			//��ҳ��ת��ʱ��֤��ѯ����
			foreach ($map as $key => $val) {
				if (!is_array($val)) {
					$p->parameter .= "$key=" . urlencode($val) . "&";
				}
			}

			//��ҳ��ʾ
			$page = $p->show();
			
			
		   if( method_exists($this, '_after_list')){
				
				$voList=$this->_after_list($voList);
			}
			
			//ģ�帳ֵ��ʾ
			$this->assign("map", $map);
			
			$this->assign('list', $voList);
			
			$this->assign("page", $page);
		}
	}
}