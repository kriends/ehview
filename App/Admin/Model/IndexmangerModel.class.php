<?php
namespace Admin\Model;
use Think\Model;


class IndexmangerModel extends Model {
	
	
	
	/**
     * 查找后置操作
     */
    protected function _after_find(&$result,$options) {

    }

    protected function _after_select(&$result,$options){

        foreach($result as &$record){
            $this->_after_find($record,$options);
        }
    }
    protected $_validate = array(
        array('email','require','联系邮箱必须！'), //默认情况下用正则进行验证
        array('contact','require','联系电话必须!'),
        array('titlebg','require','内容标题必须！'), //默认情况下用正则进行验证
        array('textbg','require','背景内容必须！'), //默认情况下用正则进行验证
		array('textle','require','标题内容必须！'), //默认情况下用正则进行验证
		array('intro','require','内容简介必须！'), //默认情况下用正则进行验证
		array('context','require','内容正文必须！'), //默认情况下用正则进行验证
		array('information','require','公司信息必须！'), //默认情况下用正则进行验证
		array('informationtext','require','公司简介必须！'), //默认情况下用正则进行验证
		array('informationbg','require','公司背景图片必须！'), //默认情况下用正则进行验证
        array('footer','require','页脚内容必须！'), //默认情况下用正则进行验证
    );
	
	/**
     * 文件模型自动完成
     * @var array
     */
    protected $_auto = array(
        array('updatetime', NOW_TIME, self::MODEL_BOTH),
        );

}
