<?php
//000000000600s:58311:"<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:59:"/alidata/www/baikec.com/app/Tpl/main/fanwe/daren_index.html";i:1;s:58:"/alidata/www/baikec.com/app/Tpl/main/fanwe/inc/header.html";i:2;s:58:"/alidata/www/baikec.com/app/Tpl/main/fanwe/inc/footer.html";}s:7:"expires";i:1444269813;s:8:"maketime";i:1444269213;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>达人秀 - 百可 - 百可</title>
<meta name="keywords" content="达人秀, 百可" />
<meta name="description" content="达人秀, 百可" />
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
<link rel="stylesheet" type="text/css" href="http://baikec.zuoyounet.cn/public/runtime/statics/38f3658c0460a7b532388d7084281fd6.css?v=3.01.2390" />
<script type="text/javascript" src="http://baikec.zuoyounet.cn/public/runtime/statics/2e2cc88da2c327e212474483bf597a18.js?v=3.01.2390"></script>
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
				<option value="6" selected="selected">搜分享</option>
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
								<li class="current"><a href="/index.php?ctl=daren" >达人秀</a></li>
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
				&nbsp;&nbsp;»&nbsp;&nbsp;<a href="/index.php?ctl=daren" title="达人秀">达人秀</a>
			</div>	
	
</div>
 
<div class="wrap_full main_layout">
	<div class="blank"></div>	
	<div class="daren_recommend_box">
		<div class="darenshow_tag"></div>		
		<div class="m">
			<div class="daren_list">
						<img src="http://baikec.zuoyounet.cn/app/Tpl/main/fanwe/images/daren/demo_daren.jpg" />
						</div>
			<div class="daren_submit">
				<a href="/index.php?ctl=daren&act=submit"><img src="http://baikec.zuoyounet.cn/app/Tpl/main/fanwe/images/daren/darensubmit.png" /></a>
			</div>
			<div class="clear"></div>
		</div>		
	</div>
	<div class="blank20"></div>
	
	<div class="show-nav" id="rel_nav">
		<!--{start: 达人导航 -->
			<ul>
				<li class="first on" data-category="0"><a href="javascript:;">热门推荐</a></li>
											
				<li data-category="1" ><a href="javascript:;">休闲娱乐</a></li>
											
				<li data-category="2" ><a href="javascript:;">乐享美食</a></li>
											
				<li data-category="3" ><a href="javascript:;">旅游酒店</a></li>
											
				<li data-category="4" ><a href="javascript:;">都市购物</a></li>
											
				<li data-category="5" ><a href="javascript:;">幸福居家</a></li>
											
				<li data-category="6" ><a href="javascript:;">浪漫婚恋</a></li>
											
				<li data-category="7" class="last"><a href="javascript:;">玩乐帮派</a></li>
							</ul>
		<!--}end: 达人导航 -->
	</div>
	<div class="blank20"></div>
	
	
	<div data-category="0" class="cate_topic">
	<div class="cate_title">热门推荐</div>
	<div class="blank20"></div>
		<div class="rec_topic_item ">
	<span>
			<div class="f_l">
			<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>			</div>
			<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
			<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
			
			<br />
						<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
						</div>
			
			<div class="fav_row f_r"><span>1</span>人喜欢</div> 
	</span>	
	<div class="blank"></div>
	<div class="tp_content">沙漠风光</div>
	<div class="blank5"></div>
	<a href="/index.php?ctl=topic&act=view&id=229" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/fbeac19ee91e70d5177f16550c90505979_458x160.jpg" lazy="true" /></a>
	</div>	
		<div class="rec_topic_item r">
	<span>
			<div class="f_l">
			<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>			</div>
			<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
			<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
			
			<br />
						<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
						</div>
			
			<div class="fav_row f_r"><span>0</span>人喜欢</div> 
	</span>	
	<div class="blank"></div>
	<div class="tp_content">经典的黑白条纹套装，搭配出都市上班族的利落来吧</div>
	<div class="blank5"></div>
	<a href="/index.php?ctl=topic&act=view&id=228" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/015b3856a9b4e05fd4a177e869bbae0d43_458x160.jpg" lazy="true" /></a>
	</div>	
		<div class="rec_topic_item ">
	<span>
			<div class="f_l">
			<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>			</div>
			<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
			<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
			
			<br />
						<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
						</div>
			
			<div class="fav_row f_r"><span>0</span>人喜欢</div> 
	</span>	
	<div class="blank"></div>
	<div class="tp_content">撞色撞出鲜亮活泼style～</div>
	<div class="blank5"></div>
	<a href="/index.php?ctl=topic&act=view&id=227" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/attachment/201502/26/16/54eed629217dc_458x160.jpg" lazy="true" /></a>
	</div>	
		<div class="rec_topic_item r">
	<span>
			<div class="f_l">
			<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>			</div>
			<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
			<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
			
			<br />
						<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
						</div>
			
			<div class="fav_row f_r"><span>0</span>人喜欢</div> 
	</span>	
	<div class="blank"></div>
	<div class="tp_content">格子总能体现复古情怀，姜黄色外套和橘红的帽子呼应了整体的温暖…</div>
	<div class="blank5"></div>
	<a href="/index.php?ctl=topic&act=view&id=226" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/2beb3bdd1805fdc8cec3230f6f942a0450_458x160.jpg" lazy="true" /></a>
	</div>	
		<div class="rec_topic_item ">
	<span>
			<div class="f_l">
			<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>			</div>
			<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
			<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
			
			<br />
						<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
						</div>
			
			<div class="fav_row f_r"><span>0</span>人喜欢</div> 
	</span>	
	<div class="blank"></div>
	<div class="tp_content">清新文艺范格子来袭，一款百搭甜美的长袖连衣裙，清新的格子元素…</div>
	<div class="blank5"></div>
	<a href="/index.php?ctl=topic&act=view&id=225" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/f293d32988646c70bf8c8fc53c65158d13_458x160.jpg" lazy="true" /></a>
	</div>	
		<div class="rec_topic_item r">
	<span>
			<div class="f_l">
			<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>			</div>
			<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
			<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
			
			<br />
						<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
						</div>
			
			<div class="fav_row f_r"><span>0</span>人喜欢</div> 
	</span>	
	<div class="blank"></div>
	<div class="tp_content">水母</div>
	<div class="blank5"></div>
	<a href="/index.php?ctl=topic&act=view&id=224" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/19bf15376fa41ab96ac0b6953a3f671797_458x160.jpg" lazy="true" /></a>
	</div>	
		<div class="blank"></div>
	
			<span class="daren_item">
			<div class="f_l">
			<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>			</div>
			<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
			<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
			
			<br />
						<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
						</div>
	</span>	
				<span class="daren_item">
			<div class="f_l">
			<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>			</div>
			<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
			<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
			
			<br />
						<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
						</div>
	</span>	
			<div class="blank"></div>
	</div><!--end cate_topic-->
								
	<div data-category="1" class="cate_topic">
		<div class="cate_title">休闲娱乐</div>
		<div class="blank20"></div>
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>1</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">沙漠风光</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=229" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/fbeac19ee91e70d5177f16550c90505979_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">经典的黑白条纹套装，搭配出都市上班族的利落来吧</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=228" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/015b3856a9b4e05fd4a177e869bbae0d43_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">撞色撞出鲜亮活泼style～</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=227" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/attachment/201502/26/16/54eed629217dc_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">格子总能体现复古情怀，姜黄色外套和橘红的帽子呼应了整体的温暖…</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=226" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/2beb3bdd1805fdc8cec3230f6f942a0450_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="blank"></div>
		
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<div class="blank"></div>
	</div>
								
	<div data-category="2" class="cate_topic">
		<div class="cate_title">乐享美食</div>
		<div class="blank20"></div>
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>1</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">沙漠风光</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=229" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/fbeac19ee91e70d5177f16550c90505979_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">经典的黑白条纹套装，搭配出都市上班族的利落来吧</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=228" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/015b3856a9b4e05fd4a177e869bbae0d43_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">撞色撞出鲜亮活泼style～</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=227" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/attachment/201502/26/16/54eed629217dc_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">格子总能体现复古情怀，姜黄色外套和橘红的帽子呼应了整体的温暖…</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=226" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/2beb3bdd1805fdc8cec3230f6f942a0450_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="blank"></div>
		
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<div class="blank"></div>
	</div>
								
	<div data-category="3" class="cate_topic">
		<div class="cate_title">旅游酒店</div>
		<div class="blank20"></div>
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>1</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">沙漠风光</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=229" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/fbeac19ee91e70d5177f16550c90505979_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">经典的黑白条纹套装，搭配出都市上班族的利落来吧</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=228" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/015b3856a9b4e05fd4a177e869bbae0d43_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">撞色撞出鲜亮活泼style～</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=227" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/attachment/201502/26/16/54eed629217dc_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">格子总能体现复古情怀，姜黄色外套和橘红的帽子呼应了整体的温暖…</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=226" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/2beb3bdd1805fdc8cec3230f6f942a0450_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="blank"></div>
		
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<div class="blank"></div>
	</div>
								
	<div data-category="4" class="cate_topic">
		<div class="cate_title">都市购物</div>
		<div class="blank20"></div>
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>1</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">沙漠风光</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=229" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/fbeac19ee91e70d5177f16550c90505979_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">经典的黑白条纹套装，搭配出都市上班族的利落来吧</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=228" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/015b3856a9b4e05fd4a177e869bbae0d43_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">撞色撞出鲜亮活泼style～</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=227" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/attachment/201502/26/16/54eed629217dc_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">格子总能体现复古情怀，姜黄色外套和橘红的帽子呼应了整体的温暖…</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=226" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/2beb3bdd1805fdc8cec3230f6f942a0450_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="blank"></div>
		
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<div class="blank"></div>
	</div>
								
	<div data-category="5" class="cate_topic">
		<div class="cate_title">幸福居家</div>
		<div class="blank20"></div>
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>1</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">沙漠风光</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=229" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/fbeac19ee91e70d5177f16550c90505979_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">经典的黑白条纹套装，搭配出都市上班族的利落来吧</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=228" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/015b3856a9b4e05fd4a177e869bbae0d43_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">撞色撞出鲜亮活泼style～</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=227" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/attachment/201502/26/16/54eed629217dc_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">格子总能体现复古情怀，姜黄色外套和橘红的帽子呼应了整体的温暖…</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=226" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/2beb3bdd1805fdc8cec3230f6f942a0450_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="blank"></div>
		
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<div class="blank"></div>
	</div>
								
	<div data-category="6" class="cate_topic">
		<div class="cate_title">浪漫婚恋</div>
		<div class="blank20"></div>
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>1</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">沙漠风光</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=229" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/fbeac19ee91e70d5177f16550c90505979_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">经典的黑白条纹套装，搭配出都市上班族的利落来吧</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=228" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/015b3856a9b4e05fd4a177e869bbae0d43_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">撞色撞出鲜亮活泼style～</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=227" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/attachment/201502/26/16/54eed629217dc_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">格子总能体现复古情怀，姜黄色外套和橘红的帽子呼应了整体的温暖…</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=226" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/2beb3bdd1805fdc8cec3230f6f942a0450_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="blank"></div>
		
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<div class="blank"></div>
	</div>
								
	<div data-category="7" class="cate_topic">
		<div class="cate_title">玩乐帮派</div>
		<div class="blank20"></div>
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>1</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">沙漠风光</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=229" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/fbeac19ee91e70d5177f16550c90505979_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">经典的黑白条纹套装，搭配出都市上班族的利落来吧</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=228" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/015b3856a9b4e05fd4a177e869bbae0d43_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item ">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">撞色撞出鲜亮活泼style～</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=227" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/attachment/201502/26/16/54eed629217dc_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="rec_topic_item r">
		<span>
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
				
				<div class="fav_row f_r"><span>0</span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content">格子总能体现复古情怀，姜黄色外套和橘红的帽子呼应了整体的温暖…</div>
		<div class="blank5"></div>
		<a href="/index.php?ctl=topic&act=view&id=226" class="topic_view"><img data-src="http://baikec.zuoyounet.cn/public/comment/201502/26/16/2beb3bdd1805fdc8cec3230f6f942a0450_458x160.jpg" lazy="true" /></a>
		</div>	
				<div class="blank"></div>
		
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=72' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"72");'><img src='/public/avatar/noavatar_small.gif'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=72' onmouseover='userCard.load(this,"72");'>fz云淡风…</a><font class='is_daren' title='分享达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(72,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<span class="daren_item">
				<div class="f_l">
				<a href='/index.php?ctl=uc_home&id=71' style='text-align:center; display:inline-block;'  onmouseover='userCard.load(this,"71");'><img src='/public/avatar/000/00/00/71virtual_avatar_small.jpg'  /></a>				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<a href='/index.php?ctl=uc_home&id=71' onmouseover='userCard.load(this,"71");'>fanwe</a><font class='is_daren' title='方维o2o达人'></font> 
				<br />
								<a href="javascript:;" onclick="focus_user(71,this);" class="add_focus">关注TA</a>
								</div>
	
		</span>	
				<div class="blank"></div>
	</div>
		
	
	<div style="display:none;" class="fix-nav">
		<!--{start: 浮动达人导航 -->
		<div class="show-nav">						
			<ul>
				<li class="first on" data-category="0"><a href="javascript:;">热门推荐</a></li>
											
				<li data-category="1" ><a href="javascript:;">休闲娱乐</a></li>
											
				<li data-category="2" ><a href="javascript:;">乐享美食</a></li>
											
				<li data-category="3" ><a href="javascript:;">旅游酒店</a></li>
											
				<li data-category="4" ><a href="javascript:;">都市购物</a></li>
											
				<li data-category="5" ><a href="javascript:;">幸福居家</a></li>
											
				<li data-category="6" ><a href="javascript:;">浪漫婚恋</a></li>
											
				<li data-category="7" class="last"><a href="javascript:;">玩乐帮派</a></li>
							</ul>						
		</div>
		<!--}end: 达人导航 -->
	</div>
<div class="blank"></div>
</div>
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