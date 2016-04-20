<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($sitename); ?> - <?php echo (C("setting.Copyright")); ?> <?php echo (C("setting.Version")); ?> <?php echo (C("setting.Code")); ?></title>
<script language="javascript" type="text/javascript" src="/comz/App/Manage/View/Default/js/jquery.js"></script>
<script src="/comz/App/Manage/View/Default/js/frame.js" language="javascript" type="text/javascript"></script>
<link href="/comz/App/Manage/View/Default/css/style.css" rel="stylesheet" type="text/css" />

<!--[if IE 6]>
<script src="/comz/App/Manage/View/Default/Js/DD_belatedPNG.js" language="javascript" type="text/javascript"></script>
<script>
  DD_belatedPNG.fix('.nav ul li a,.top_link ul li,background');   /* string argument can be any CSS selector */
</script>
<![endif]-->
</head>
<body class="showmenu">
<link href="/comz/App/Manage/View/Default/css/pintuer.css" rel="stylesheet" type="text/css" />
<script src="/comz/App/Manage/View/Default/js/pintuer.js"></script>
<script src="/comz/App/Manage/View/Default/js/jquery.js"></script>	
<style type="text/css">
	html{_overflow-y:scroll}
</style>
<div class="right_style">

<div class="column">
	<dl class="dbox winbg1" id="item3">
	    <dt class="lside">
	        <div class="l">我的个人信息</div>
	    </dt>
	    <dd>
			<div class="content">
				您好，<?php echo ($v["admin_name"]); ?><br/>
				<div class="clear"></div>
				上次登录时间：<?php echo (date('Y-m-d H:i:s',$v["admin_olddate"])); ?><br/>
				上次登录IP：<?php echo ($v["admin_oldip"]); ?><br/> 登录次数：<?php echo ($v["admin_login"]); ?> <br/>
			</div>
	    </dd>
	</dl>

	<dl class="dbox winbg1" id="item5">
	    <dt class="lside"><span class="l">站点统计</span></dt>
	    <dd>
			<div class="content">
			会员：<?php echo ($countUser); ?> <br>
			内容：<?php echo ($countNews); ?> <br>
			留言本：<?php echo ($countGuestbook); ?> <br>
			广告：<?php echo ($countAdvert); ?> <br>
			公告：<?php echo ($countNotice); ?> <br>
			数据库：<?php echo ($total); ?><br>
			
			</div>
	    </dd>
	</dl>

	
</div>

<div class="column_right">

	<dl class="dbox winbg2" id="item1">
	    <dt class="lside"><span class="l">系统信息</span></dt>
	    <dd>
	        <div class="content">
	程序版本：DTCMS1.0<br />

	操作系统：<?php echo PHP_OS; ?><br />
	php版本：<?php echo "PHP".PHP_VERSION; ?><br />
	MySQL 版本：<?php echo mysql_get_server_info(); ?><br />
	服务器时间：<?php echo $showtime=date("Y-m-d H:i:s");?><br />

          </div>
	    </dd>
	</dl>
	
	<dl class="dbox winbg5" id="item2">
	    <dt class="lside"><span class="l">DTCMS系统开发团队</span></dt>
	    <dd>
	        	        <div class="content">
			版权所有：<a href="http://www.dt0572.net" target="_blank">湖州道田文化传播有限公司</a><br />
			官方网站：<a href="http://www.dt0572.com" target="_blank">http://www.dt0572.com</a><br />
	    <!--	DTCMS官方：<a href="http://www.DTCMS.com/" target="_blank">http://www.DTCMS.com/</a> <br />
			官方QQ群：<a href="http://jq.qq.com/?_wv=1027&k=fHc7iL" target="_blank">383851010</a> <br />  -->
			</div>
	    </dd>
	</dl>

</div>
</div>
<!--<div style="height:50px;"></div>
<div class="cont-ft">
            <div class="copyright">
                <div class="fl">感谢使用<a href="http://www.DTCMS.com" target="_blank">DTCMS</a>企业网站内容管理系统</div>               
            </div>
</div>-->
</body>