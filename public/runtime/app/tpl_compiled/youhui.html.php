<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/fanweUI.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/youhui.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/business_address.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/side_deal_list.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/sort_row.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/review_list.css";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.pngfix.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.animateToClass.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/cart.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/cart.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/business_address.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/business_address.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/review_list.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/review_list.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/youhui.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/youhui.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/side_deal_list.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/side_deal_list.js";
?>
<?php echo $this->fetch('inc/header.html'); ?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php 
$k = array (
  'name' => 'app_conf',
  'v' => 'BAIDU_MAP_APPKEY',
);
echo $k['name']($k['v']);
?>"></script> 
<script type="text/javascript">
	var YOUHUI_ID = <?php echo $this->_var['youhui']['id']; ?>; 
</script>
<div class="blank"></div>
<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?> clearfix">

			<div class="wrap_m2 f_l">			
			<div class="youhui_box">
				<div class="title"><?php if ($this->_var['youhui']['supplier_info']): ?>[<?php echo $this->_var['youhui']['supplier_info']['name']; ?>]<?php endif; ?><?php echo $this->_var['youhui']['name']; ?></div>
				<p class="details">
					<?php echo $this->_var['youhui']['list_brief']; ?>
				</p>
				<div class="youhui_info_box">
					<div class="youhui_img f_l">
						<div class="img">
							<div class="tags">											
							<?php $_from = $this->_var['youhui']['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
							<h2 class="tag<?php echo $this->_var['tag']; ?>"></h2>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</div>
							<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['youhui']['icon'],
  'w' => '320',
  'h' => '240',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" lazy="true" width=320 h=240 />
						</div>
					</div>
					<div class="youhui_intro f_r youhui_ico">
						<?php if ($this->_var['youhui']['user_limit'] > 0): ?>
						<dl>
							<dt><i class="iconfont">&#xe60a;</i></dt>
							<dd>每个会员每天只能下载 <i><?php echo $this->_var['youhui']['user_limit']; ?></i> 张</dd>
						</dl>
						<?php endif; ?>
						<dl>
							<dt><i class="iconfont">&#xe609;</i></dt>
							<dd>已有 <i id="s_user_count"><?php echo $this->_var['youhui']['user_count']; ?></i> 人下载<?php if ($this->_var['youhui']['score_limit']): ?>, 下载消耗  <i><?php echo $this->_var['youhui']['score_limit']; ?></i> 积分<?php endif; ?><?php if ($this->_var['youhui']['point_limit']): ?>, 下载需要 <i><?php echo $this->_var['youhui']['point_limit']; ?></i> 经验<?php endif; ?></dd>
						</dl>
						<?php if ($this->_var['youhui']['total_num'] > 0): ?>
						<dl>
							<dt><i class="iconfont">&#xe608;</i></dt>
							<dd>还剩 <i id="s_less"><?php echo $this->_var['youhui']['less']; ?></i> 张</dd>
						</dl>
						<?php endif; ?>
						
						<?php if ($this->_var['youhui']['begin_time'] != 0 && $this->_var['youhui']['begin_time'] > $this->_var['NOW_TIME']): ?>							
						<dl>
							<dt><i class="iconfont">&#xe607;</i></dt>
							<dd>
												
								<div 
									class="countdown" 
									id="countdown" 
									nowtime="<?php echo $this->_var['NOW_TIME']; ?>000" 					
									<?php if ($this->_var['youhui']['end_time'] != 0): ?>
									endtime="<?php echo $this->_var['youhui']['begin_time']; ?>000" showtitle="距离开始：" 
									<?php endif; ?>
								></div><!--倒计时-->
						
							</dd>
						</dl>
						<?php elseif ($this->_var['youhui']['end_time'] != 0 && $this->_var['youhui']['end_time'] > $this->_var['NOW_TIME']): ?>		
						<dl>
							<dt><i class="iconfont">&#xe607;</i></dt>
							<dd>
												
								<div 
									class="countdown" 
									id="countdown" 
									nowtime="<?php echo $this->_var['NOW_TIME']; ?>000" 					
									<?php if ($this->_var['youhui']['end_time'] != 0): ?>
									endtime="<?php echo $this->_var['youhui']['end_time']; ?>000" showtitle="剩余时间：" 
									<?php endif; ?>
								></div><!--倒计时-->
						
							</dd>
						</dl>
						<?php if ($this->_var['youhui']['expire_day'] > 0): ?>
						<dl>
							<dt><i class="iconfont">&#xe621;</i></dt>
							<dd>请于 <i><?php echo $this->_var['youhui']['expire_day']; ?></i> 天内使用</dd>
						</dl>
						<?php endif; ?>
						<?php endif; ?>
						<div class="blank"></div>
						<?php if (! $this->_var['preview']): ?>
						<div class="btn_row">
							<?php if ($this->_var['youhui']['begin_time'] < $this->_var['NOW_TIME'] && ( $this->_var['youhui']['end_time'] > $this->_var['NOW_TIME'] || $this->_var['youhui']['end_time'] == 0 )): ?>
							<button class="ui-button" rel="orange" id="download_btn" type="button">立即领取</button>
							&nbsp;
							<?php elseif ($this->_var['youhui']['begin_time'] > $this->_var['NOW_TIME']): ?>
							<button class="ui-button" rel="disabled" type="button">未开始</button>
							&nbsp;
							<?php elseif ($this->_var['youhui']['end_time'] != 0 && $this->_var['youhui']['end_time'] < $this->_var['NOW_TIME']): ?>
							<button class="ui-button" rel="disabled" type="button">已过期</button>
							&nbsp;
							<?php endif; ?>
							<button class="ui-button" rel="blue" type="button" id="collect_btn">加入收藏</button>
						</div>
						<div class="blank"></div>
						<!-- JiaThis Button BEGIN -->
						<div class="jiathis_style">
							<span class="jiathis_txt">分享到：</span>
							<a class="jiathis_button_icons_1"></a>
							<a class="jiathis_button_icons_2"></a>
							<a class="jiathis_button_icons_3"></a>
							<a class="jiathis_button_icons_4"></a>
							<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
							<a class="jiathis_counter_style"></a>
						</div>
						<script type="text/javascript">
							 var jiathis_config = {
							 	title:"<?php echo $this->_var['youhui']['name']; ?>",
							    url:"<?php echo $this->_var['youhui']['share_url']; ?>"
							    
							};
						</script>
						<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
						
						<!-- JiaThis Button END -->
						<?php endif; ?>
					</div>
				</div>
			</div>
			<!--详情导航-->
			<div class="show-nav" id="rel_nav">
			<!--{start: 详情导航 -->
			<ul>
				<?php if ($this->_var['youhui']['supplier_info'] && $this->_var['youhui']['supplier_location_count'] > 0): ?>
				<li rel="n0">商家位置</li>
				<?php endif; ?>
				<?php if ($this->_var['youhui']['use_notice']): ?>
				<li rel="n1">使用需知</li>
				<?php endif; ?>
				<?php if ($this->_var['youhui']['description']): ?>
				<li rel="n2">优惠券详情</li>
				<?php endif; ?>
				<?php if (! $this->_var['preview']): ?>
				<li rel="n3">消费评价</li>
				<?php endif; ?>
			</ul>
			<!--}end: 详情导航 -->
			</div>
			<div style="display:none;" class="fix-nav wrap_m2">
				<!--{start: 浮动导航 -->
				<div class="show-nav">
					<!--{start: 详情导航 -->
					<ul class="f_l">
						<?php if ($this->_var['youhui']['supplier_info'] && $this->_var['youhui']['supplier_location_count'] > 0): ?>
						<li rel="n0">商家位置</li>
						<?php endif; ?>
						<?php if ($this->_var['youhui']['use_notice']): ?>
						<li rel="n1">使用需知</li>
						<?php endif; ?>
						<?php if ($this->_var['youhui']['description']): ?>
						<li rel="n2">优惠券详情</li>
						<?php endif; ?>
						<?php if (! $this->_var['preview']): ?>
						<li rel="n3">消费评价</li>
						<?php endif; ?>
					</ul>
					<?php if (! $this->_var['preview']): ?>
					<button class="ui-button flow_btn" id="flow_btn" rel="white">立即领取</button>
					<?php endif; ?>
					<!--}end: 详情导航 -->
				</div>
				<!--}end: 浮动导航 -->
			</div>
			<!--end 详情导航-->
			<div class="show-content">
				<?php if ($this->_var['youhui']['supplier_info'] && $this->_var['youhui']['supplier_location_count'] > 0): ?>
				<div rel="n0" class="content_box">
					<div class="box_title nomargin">商家位置</div>
					<div class="box_content nopadding">
						<div id="business_address" youhui_id="<?php echo $this->_var['youhui']['id']; ?>" supplier_id="<?php echo $this->_var['youhui']['supplier_id']; ?>">
						
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php if ($this->_var['youhui']['use_notice']): ?>
				<div rel="n1" class="content_box">
					<div class="box_title">使用需知</div>
					<div class="box_content">
						<?php echo $this->_var['youhui']['use_notice']; ?>
					</div>
				</div>
				<?php endif; ?>
				<?php if ($this->_var['youhui']['description']): ?>
				<div rel="n2" class="content_box">
					<div class="box_title">优惠券详情</div>
					<div class="box_content">
						<?php echo $this->_var['youhui']['description']; ?>
					</div>
				</div>
				<?php endif; ?>
				<?php if (! $this->_var['preview']): ?>
				<div rel="n3" class="content_box">
					<div class="box_title">
						<div class="box_title_text">消费评价</div>
						<div class="box_title_more">我领取并使用过本券，<a href="<?php
echo parse_url_tag("u:index|review|"."youhui_id=".$this->_var['youhui']['id']."".""); 
?>" target="_blank">我要评价</a></div>
					</div>
					<div class="box_content">
						<div id="review_list" youhui_id="<?php echo $this->_var['youhui']['id']; ?>">
						</div>
					</div>
				</div>
				<?php endif; ?>
				<div class="content_box"></div>
			</div>
		</div><!--end wrap_m2-->
		<div class="wrap_s2 f_r">
			<?php if ($this->_var['side_youhui_list']): ?>
			<div class="side_deal_box">
			<div class="title_row">热门下载</div>
			<div class="content_row">
				<ul class="side_deal_list">
					
					<?php $_from = $this->_var['side_youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'side_youhui');if (count($_from)):
    foreach ($_from AS $this->_var['side_youhui']):
?>
					<li>
						<a href="<?php echo $this->_var['side_youhui']['url']; ?>" class="deal_img"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['side_youhui']['icon'],
  'w' => '198',
  'h' => '134',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" lazy="true" /></a>
						<a href="<?php echo $this->_var['side_youhui']['url']; ?>"  class="deal_title"><?php echo $this->_var['side_youhui']['name']; ?></a>
						<div class="deal_info">
							<span class="deal_price f_l">
								<?php if ($this->_var['side_youhui']['end_time'] > 0): ?>
								<em class="iconfont youhui_ico">&#xe607;</em>&nbsp;有效期至<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['side_youhui']['end_time'],
  'f' => 'Y.m.d',
);
echo $k['name']($k['v'],$k['f']);
?>						
								<?php endif; ?>
							</span>
							<span class="sale_count f_r">
								下载<span><?php echo $this->_var['side_youhui']['user_count']; ?></span>
							</span>
						</div>
					</li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					
				</ul>
			</div>
			</div>
			<div class="blank"></div>
			<?php endif; ?>
			
			<?php if ($this->_var['history_deal_list']): ?>
			<div class="side_deal_box">
			<div class="title_row">
				<span>浏览历史</span>
				<a href="javascript:void(0);" class="clear_history" type="youhui">清空</a>
			</div>
			<div class="content_row">
				<ul class="side_deal_list">
					<?php $_from = $this->_var['history_deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'side_youhui');if (count($_from)):
    foreach ($_from AS $this->_var['side_youhui']):
?>
					<li>
						<a href="<?php echo $this->_var['side_youhui']['url']; ?>" class="deal_img"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['side_youhui']['icon'],
  'w' => '198',
  'h' => '134',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" lazy="true" /></a>
						<a href="<?php echo $this->_var['side_youhui']['url']; ?>"  class="deal_title"><?php echo $this->_var['side_youhui']['name']; ?></a>
						<div class="deal_info">
							<span class="deal_price f_l">
								<?php if ($this->_var['side_youhui']['end_time'] > 0): ?>
								<em class="iconfont youhui_ico">&#xe607;</em>&nbsp;有效期至<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['side_youhui']['end_time'],
  'f' => 'Y.m.d',
);
echo $k['name']($k['v'],$k['f']);
?>						
								<?php endif; ?>
							</span>
							<span class="sale_count f_r">
								下载<span><?php echo $this->_var['side_youhui']['user_count']; ?></span>
							</span>
						</div>
					</li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					
				</ul>
			</div>
			</div>
			<?php endif; ?>
		</div>


</div>
<div class="blank20"></div>

<?php echo $this->fetch('inc/footer.html'); ?>