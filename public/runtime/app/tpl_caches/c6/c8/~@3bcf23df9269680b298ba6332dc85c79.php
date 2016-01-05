<?php
//000000003600s:11069:"<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:58:"/alidata/www/baikec.com/app/Tpl/main/fanwe/help_index.html";i:1;s:58:"/alidata/www/baikec.com/app/Tpl/main/fanwe/inc/header.html";i:2;s:58:"/alidata/www/baikec.com/app/Tpl/main/fanwe/inc/footer.html";}s:7:"expires";i:1442665786;s:8:"maketime";i:1442662186;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>如何抽奖 - 百可 - 百可</title>
<meta name="keywords" content="如何抽奖, 百可" />
<meta name="description" content="如何抽奖, 百可" />
<script type="text/javascript">
var APP_ROOT = '';
var CART_URL = '/index.php?ctl=cart';
var CART_CHECK_URL = '/index.php?ctl=cart&act=check';
var send_span = 2000;
var IS_RUN_CRON = 1;
var DEAL_MSG_URL = '/index.php?ctl=cron&act=deal_msg_list';
var AJAX_LOGIN_URL	= '/index.php?ctl=user&act=ajax_login';
var AJAX_URL	= '/index.php?ctl=ajax';
var CITY_COUNT	= 5;
//关于图片上传的定义
var LOADER_IMG = 'http://baikec.zuoyounet.cn/app/Tpl/main/fanwe/images/loader_img.gif';
var UPLOAD_SWF = 'http://baikec.zuoyounet.cn/app/Tpl/main/fanwe/js/utils/Moxie.swf';
var UPLOAD_XAP = 'http://baikec.zuoyounet.cn/app/Tpl/main/fanwe/js/utils/Moxie.xap';
var MAX_IMAGE_SIZE = '3000000';
var ALLOW_IMAGE_EXT = 'jpg,gif,png';
var UPLOAD_URL = '/index.php?ctl=file&act=upload';
</script>
<script type="text/javascript" src="/public/runtime/app/lang.js"></script>
<link rel="stylesheet" type="text/css" href="http://baikec.zuoyounet.cn/public/runtime/statics/31b6b9cb0682129157eb59f807382540.css?v=3.01.2390" />
<script type="text/javascript" src="http://baikec.zuoyounet.cn/public/runtime/statics/ce02654045f689c0434e91e4d6ea58d5.js?v=3.01.2390"></script>
</head>
<body>
<img src="http://baikec.zuoyounet.cn/app/Tpl/main/fanwe/images/loader_img.gif" style="display:none;" /><!--延时加载的替代图片生成-->
<div class="city_list">
	<div class="city_list_box">
				<a href="/index.php?city=beijing" class="city_item" >北京</a>
				<a href="/index.php?city=fuzhou" class="city_item" >福州</a>
				<a href="/index.php?city=shanghai" class="city_item" >上海</a>
				<a href="/index.php?city=xiamen" class="city_item" >厦门</a>
				<a href="/index.php?city=zaozhuangp" class="city_item" >枣庄</a>
			</div>
</div>
<div class="top_nav">
	<div class="wrap_full main_layout">
		<span class="f_l">欢迎来到百可</span>	
		<span class="f_r">
			<ul class="head_tip">
				<li class="user_tip"><a href="/biz.php?ctl=user&act=login">商户中心</a></li>
				<li class="cart_tip" id="cart_tip">554fcae493e564ee0dc75bdf2ebf94caload_cart_count|YToxOntzOjQ6Im5hbWUiO3M6MTU6ImxvYWRfY2FydF9jb3VudCI7fQ==554fcae493e564ee0dc75bdf2ebf94ca</li>
				<li class="user_tip" id="history_tip">554fcae493e564ee0dc75bdf2ebf94caload_head_history|YToxOntzOjQ6Im5hbWUiO3M6MTc6ImxvYWRfaGVhZF9oaXN0b3J5Ijt9554fcae493e564ee0dc75bdf2ebf94ca</li>
				<li class="user_tip" id="head_user_tip">554fcae493e564ee0dc75bdf2ebf94caload_user_tip|YToxOntzOjQ6Im5hbWUiO3M6MTM6ImxvYWRfdXNlcl90aXAiO30=554fcae493e564ee0dc75bdf2ebf94ca</li>
			</ul>
		</span>
	</div>
</div><!--顶部横栏-->
<div class="blank15"></div>
<div class="wrap_full main_layout head_main">
	<div class="logo f_l">
	<a class="link" href="/">
				<span style='display:inline-block; width:125px; height:73px; background:url(http://baikec.zuoyounet.cn/public/attachment/201508/24/09/55da70b9103af.png) no-repeat; _filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=http://baikec.zuoyounet.cn/public/attachment/201508/24/09/55da70b9103af.png, sizingMethod=scale);_background-image:none;'></span>	</a>
	</div>
	<div class="city f_l">
				<a class="city_name" href="javascript:void(0);"  jump="/index.php?ctl=city">554fcae493e564ee0dc75bdf2ebf94caload_city_name|YToxOntzOjQ6Im5hbWUiO3M6MTQ6ImxvYWRfY2l0eV9uYW1lIjt9554fcae493e564ee0dc75bdf2ebf94ca&nbsp;<i></i></a>
		<a href="javascript:void(0);"  jump="/index.php?ctl=city" class="city_switch f_l">切换城市</a>
			</div>
	<div class="search f_r">
		<div class="top_search">
			<form action="/index.php?ctl=search" name="search_form" method=post >
			<select name="search_type" class="ui-select search_type f_l">
				<option value="1" >搜团购</option>
				<option value="2" >搜优惠</option>
				<option value="3" >搜活动</option>
				<option value="4" >搜商家</option>				
				<option value="5" >搜商品</option>
				<option value="6" >搜分享</option>
			</select>
			<input type="text" name="search_keyword" class="ui-textbox search_keyword f_l" holder="请输入您要搜索的关键词" value="" />
			<button class="ui-button f_l" rel="search_btn" type="submit">搜索</button>
			</form>
		</div>
		<ul class="search_hot_keyword">
						<li><a href="/index.php?ctl=search&act=jump"></a></li>
					</ul>
	</div>
</div><!--logo与头部搜索-->
<div class="blank15"></div>
<div class="nav_bar">
	<div class="wrap_full main_layout">
				<div class="main_nav">
			<ul>
								<li ><a href="/index.php" >首页</a></li>
								<li ><a href="/index.php?ctl=tuan" >团购</a></li>
								<li ><a href="/index.php?ctl=mall" >商城</a></li>
								<li ><a href="/index.php?ctl=events" >活动</a></li>
								<li ><a href="/index.php?ctl=stores" >商家</a></li>
								<li ><a href="/index.php?ctl=daren" >达人秀</a></li>
								<li ><a href="/index.php?ctl=group" >小组</a></li>
								<li ><a href="/index.php?ctl=discover" >发现</a></li>
								<li ><a href="/index.php?ctl=youhuis" >优惠券</a></li>
								<li ><a href="/index.php?ctl=scores" >积分商城</a></li>
								<li ><a href="/index.php?ctl=position" >身边团购</a></li>
								
			</ul>
		</div>
	</div>
</div>	
<div class="wrap_full main_layout">
	<div class="blank"></div>
	<div class="site_nav">
				<a href="/index.php" title="首页">首页</a>
				&nbsp;&nbsp;»&nbsp;&nbsp;<a href="/index.php?ctl=help" title="帮助中心">帮助中心</a>
			</div>	
	
</div>
 
<div class="wrap_full main_layout">
	<div class="blank20"></div>
	<div class="line"></div>
	<div class="blank20"></div>
	<div class="cate_box f_l">
				<div class="cate_item">			
			<div class="cate_title" style="padding-left:15px;"><i class="diyfont">&#58899;</i>&nbsp;&nbsp;&nbsp;公司信息</div>
						<div class="cate_name">
				<a href="/index.php?ctl=help&act=31"  ><span class="cate_icon"></span>公司简介</a>
			</div>
						<div class="cate_name">
				<a href="/index.php?ctl=help&act=30"  ><span class="cate_icon"></span>联系我们</a>
			</div>
						<div class="cate_name">
				<a href="/index.php?ctl=help&act=20"  ><span class="cate_icon"></span>关于我们</a>
			</div>
						<div class="cate_name">
				<a href="/index.php?ctl=user&act=register"  target="_blank"><span class="cate_icon"></span>加入我们</a>
			</div>
					</div>
				<div class="cate_item">			
			<div class="cate_title" style="padding-left:15px;"><i class="diyfont">&#58898;</i>&nbsp;&nbsp;&nbsp;获取更新</div>
						<div class="cate_name">
				<a href="/index.php?ctl=rss"  target="_blank"><span class="cate_icon"></span>RSS订阅</a>
			</div>
					</div>
				<div class="cate_item">			
			<div class="cate_title" style="padding-left:15px;"><i class="diyfont">&#58891;</i>&nbsp;&nbsp;&nbsp;商务合作</div>
						<div class="cate_name">
				<a href="/index.php?ctl=help&act=29"  ><span class="cate_icon"></span>咨询热点</a>
			</div>
						<div class="cate_name">
				<a href="/index.php?ctl=link"  target="_blank"><span class="cate_icon"></span>友情链接</a>
			</div>
					</div>
				<div class="cate_item">			
			<div class="cate_title" style="padding-left:15px;"><i class="diyfont">&#58897;</i>&nbsp;&nbsp;&nbsp;用户帮助</div>
						<div class="cate_name">
				<a href="/index.php?ctl=help&act=28"  ><span class="cate_icon"></span>隐私保护</a>
			</div>
						<div class="cate_name">
				<a href="/index.php?ctl=help&act=5" class="act" ><span class="cate_icon"></span>如何抽奖</a>
			</div>
					</div>
		
	</div>
	<div class="article_box f_r">
		<div class="article_top"><h3><span>帮助中心</span></h3></div>
		
		<div class="blank20"></div>
		<div class="article_content">
			<h2>如何抽奖</h2>
			<div class="update_time">2015-02-25 10:53:02</div>
			<div class="editor">
					如何抽奖			</div>
		</div>
	</div>
</div>
<div class="blank"></div>
<div class="footer_box">
<div class="footer_inner_box">
<div class="wrap_full main_layout clearfix">
	<div class="help_row f_l">
				<span>
		<dl>
			<dt><i class="diyfont">&#58899;</i>&nbsp;公司信息</dt>
			<dd>
				<ul>
										<li><b></b><a href="/index.php?ctl=help&act=31">公司简介</a></li>
										<li><b></b><a href="/index.php?ctl=help&act=30">联系我们</a></li>
										<li><b></b><a href="/index.php?ctl=help&act=20">关于我们</a></li>
										<li><b></b><a href="/index.php?ctl=user&act=register">加入我们</a></li>
									</ul>
			</dd>
		</dl>
		</span>
				<span>
		<dl>
			<dt><i class="diyfont">&#58898;</i>&nbsp;获取更新</dt>
			<dd>
				<ul>
										<li><b></b><a href="/index.php?ctl=rss">RSS订阅</a></li>
									</ul>
			</dd>
		</dl>
		</span>
				<span>
		<dl>
			<dt><i class="diyfont">&#58891;</i>&nbsp;商务合作</dt>
			<dd>
				<ul>
										<li><b></b><a href="/index.php?ctl=help&act=29">咨询热点</a></li>
										<li><b></b><a href="/index.php?ctl=link">友情链接</a></li>
									</ul>
			</dd>
		</dl>
		</span>
				<span>
		<dl>
			<dt><i class="diyfont">&#58897;</i>&nbsp;用户帮助</dt>
			<dd>
				<ul>
										<li><b></b><a href="/index.php?ctl=help&act=28">隐私保护</a></li>
										<li><b></b><a href="/index.php?ctl=help&act=5">如何抽奖</a></li>
									</ul>
			</dd>
		</dl>
		</span>
				
	</div>
	<div class="foot_logo f_r">
		<a class="link" href="/">
				<span style='display:inline-block; width:125px; height:73px; background:url(http://baikec.zuoyounet.cn/public/attachment/201508/24/09/55da70c0dc1cc.png) no-repeat; _filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=http://baikec.zuoyounet.cn/public/attachment/201508/24/09/55da70c0dc1cc.png, sizingMethod=scale);_background-image:none;'></span>		</a>
	</div>
	<div class="blank"></div>
		<div class="foot_info">
						电话：400-800-8888 周一至周六 9:00-18:00  
				&nbsp;&nbsp;
								
				&nbsp;&nbsp;
								<div style="text-align:center;"><br />
</div>
 			
								<div class="qq_div">
					<div class="qq_div_in">
																		<a class="qq_bg" href="http://wpa.qq.com/msgrd?v=3&uin=88888888&site=qq&menu=yes" target=_blank></a>
																								<a class="qq_bg" href="http://wpa.qq.com/msgrd?v=3&uin=9999999&site=qq&menu=yes" target=_blank></a>
																	
					</div>					
				</div>		
				<div class="blank"></div>
					</div>
	
</div><!--end foot_wrap-->
		
</div>
</div>
<div class="blank"></div>
<a id="go_top" href="javascript:void(0);"></a>
</body>
</html>";
?>