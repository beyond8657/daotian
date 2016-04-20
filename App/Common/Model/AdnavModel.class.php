<?php 
/*******************************************************************************
* [DTCMS] 道田CMS
* @Copyright (C) 2016-2017  http://DTCMS.com   All rights reserved.
* @Team  dt0572.com
* @Author: 小沈 QQ:334554156
* @Licence http://www.dt0572.com
*******************************************************************************/
namespace Common\Model;
use Think\Model\RelationModel;
class AdnavModel extends RelationModel{//继承relation
		/**
		 * 自动验证   by DTCMS
		 */
		protected $_validate=array(
				//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间]),
				//array('username','require','用户必须填写!'), //成功验证用户名是否填写
				array('adnav_name','require','分类名称必须填写'),
		);

		
		/**
		 * 自动完成，在create时自动执行   by DTCMS
		 */
		protected $_auto=array(
				//array('id','htmlspecialchars',3,'function'),
				array('adnav_time','time',1,'function'),
				array('adnav_name','htmlspecialchars',3,'function'),
		);

		
	}

?>