<?php
/*******************************************************************************
* [DTCMS] 道田CMS
* @Copyright (C) 2016-2017  http://dt0572.com   All rights reserved.
* @Team  dt0572.com
* @Author: 小沈 QQ:334554156
* @Web http://www.dt0572.com
*******************************************************************************/

namespace Manage\Controller;
use Think\Controller;
class CommonController extends Controller {
	/**
	 * 公共验证控制器CommonAction
	 */
	Public function _initialize(){
		header("Content-Type:text/html; charset=utf-8");
		session_start();
		if (!isset($_SESSION['admin_name']) || $_SESSION['admin_name']==''){
			$this->error('请勿无权访问！你的ip已被记录',U('Login/index'));	
		}
	}
}