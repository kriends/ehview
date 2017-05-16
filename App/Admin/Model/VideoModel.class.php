<?php
namespace Admin\Model;
use Think\Model;


class VideoModel extends Model {

    /**
     * ���Һ��ò���
     */
    protected function _after_find(&$result,$options) {

    }

    protected function _after_select(&$result,$options){

        foreach($result as &$record){
            $this->_after_find($record,$options);
        }
    }
    protected $_validate = array(
        array('title','require','������룡'), //Ĭ������������������֤
        array('name','','�����Ѵ���',0,'unique',3),
        array('url','require','��Ƶ���ӱ��룡'), //Ĭ������������������֤
        array('photo','require','��Ƶ������룡'), //Ĭ������������������֤
        array('context','require','��Ƶ���ݱ��룡'), //Ĭ������������������֤
    );

    /**
     * �ļ�ģ���Զ����
     * @var array
     */
    protected $_auto = array(
        array('createtime', NOW_TIME, self::MODEL_BOTH),
        );

   
}
