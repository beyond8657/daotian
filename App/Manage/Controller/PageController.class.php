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
class PageController extends CommonController {
	/**
	 * 单页模型首页
	 */
    public function index(){
    	$id=I('get.id');
    	$m=D('Column');
    	$arr=$m->find($id);
    	//dump($arr);
    	//exit;
    	
    	$this->assign('v',$arr);
    	$this->display();	
    }
    
    /**
     * 处理栏目修改
     */
    public function do_edit(){
//     	dump($_POST);
//     	exit;
        $m=D('Column');
    	if (!$m->create()){
			$this->error($m->geterror());
		}

    	$data['id']=I('post.id');
    	$data['column_descr']=htmlspecialchars($_POST['column_descr']);
    	$data['column_content']=htmlspecialchars($_POST['column_content']);
    	$count=$m->save($data); //修改表单用save函数
    	if ($count>0){
    		$this->success('修改成功！');
    	}
    	else {
    		$this->error('修改失败！');
    	}
    }
    
    
}
?>
