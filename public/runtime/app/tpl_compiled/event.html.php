<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/fanweUI.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/event.css";
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
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/event.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/event.js";
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
	var EVENT_ID = <?php echo $this->_var['event']['id']; ?>; 
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
			<div class="event_box">
				<div class="title"><?php if ($this->_var['event']['supplier_info']): ?>[<?php echo $this->_var['event']['supplier_info']['name']; ?>]<?php endif; ?><?php echo $this->_var['event']['name']; ?></div>
				<p class="details">
					<?php echo $this->_var['event']['biref']; ?>
				</p>
				<div class="event_info_box">
					<div class="event_img f_l">
						<div class="img">
							<img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['event']['icon'],
  'w' => '320',
  'h' => '240',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" lazy="true" />
						</div>
					</div>
					<div class="event_intro f_r event_ico">
						
						<?php if ($this->_var['event']['total_count'] > 0): ?>
						<dl>
							<dt><i class="iconfont">&#xe608;</i></dt>
							<dd>活动名额 <i><?php echo $this->_var['event']['total_count']; ?></i> 人<?php if ($this->_var['event']['score_limit']): ?>, 报名消耗  <i><?php echo $this->_var['event']['score_limit']; ?></i> 积分<?php endif; ?><?php if ($this->_var['event']['point_limit']): ?>, 报名需要 <i><?php echo $this->_var['event']['point_limit']; ?></i> 经验<?php endif; ?></dd>
						</dl>
						<?php endif; ?>
						<dl>
							<dt><i class="iconfont">&#xe617;</i></dt>
							<dd>报名数 <i><?php echo $this->_var['event']['submit_count']; ?></i> 人</dd>
						</dl>
						
						<?php if ($this->_var['event']['event_begin_time'] > 0 || $this->_var['event']['event_end_time'] > 0): ?>
						<dl>
							<dt><i class="iconfont">&#xe621;</i></dt>
							<dd>活动时间 &nbsp;<?php if ($this->_var['event']['event_begin_time']): ?><i><?php echo $this->_var['event']['event_begin_time_format']; ?></i> 至 <?php endif; ?><?php if ($this->_var['event']['event_end_time']): ?><i><?php echo $this->_var['event']['event_end_time_format']; ?></i><?php else: ?><i>无限期</i><?php endif; ?> </dd>
						</dl>
						<?php endif; ?>
						
						<?php if ($this->_var['event']['submit_begin_time'] != 0 && $this->_var['event']['submit_begin_time'] > $this->_var['NOW_TIME']): ?>							
						<dl>
							<dt><i class="iconfont">&#xe607;</i></dt>
							<dd>
												
								<div 
									class="countdown" 
									id="countdown" 
									nowtime="<?php echo $this->_var['NOW_TIME']; ?>000" 					
									<?php if ($this->_var['event']['submit_end_time'] != 0): ?>
									endtime="<?php echo $this->_var['event']['submit_begin_time']; ?>000" showtitle="开始报名：" 
									<?php endif; ?>
								></div><!--倒计时-->
						
							</dd>
						</dl>
						<?php elseif ($this->_var['event']['submit_end_time'] != 0 && $this->_var['event']['submit_end_time'] > $this->_var['NOW_TIME']): ?>		
						<dl>
							<dt><i class="iconfont">&#xe607;</i></dt>
							<dd>
												
								<div 
									class="countdown" 
									id="countdown" 
									nowtime="<?php echo $this->_var['NOW_TIME']; ?>000" 					
									<?php if ($this->_var['event']['submit_end_time'] != 0): ?>
									endtime="<?php echo $this->_var['event']['submit_end_time']; ?>000" showtitle="报名截止：" 
									<?php endif; ?>
								></div><!--倒计时-->
						
							</dd>
						</dl>
						<?php endif; ?>
						<?php if ($this->_var['event']['address']): ?>
						<dl>
							<dt><i class="iconfont">&#xe615;</i></dt>
							<dd>活动地点： &nbsp;<?php echo $this->_var['event']['address']; ?></dd>
						</dl>
						<?php endif; ?>
						<div class="blank"></div>
						<?php if (! $this->_var['preview']): ?>
						<div class="btn_row">
							<?php if ($this->_var['event']['submitted_data'] && $this->_var['event']['submitted_data']['is_verify'] == 1): ?>
							<button class="ui-button" rel="disabled" type="button">已报名</button>
							&nbsp;
							<?php elseif ($this->_var['event']['submitted_data'] && $this->_var['event']['submitted_data']['is_verify'] == 2): ?>
							<button class="ui-button" rel="disabled" type="button">报名未通过</button>
							&nbsp;
							<?php elseif ($this->_var['event']['submit_begin_time'] < $this->_var['NOW_TIME'] && ( $this->_var['event']['submit_end_time'] > $this->_var['NOW_TIME'] || $this->_var['event']['submit_end_time'] == 0 )): ?>			
							<?php if ($this->_var['event']['submitted_data'] && $this->_var['event']['submitted_data']['is_verify'] == 0): ?>
							<button class="ui-button" rel="orange" id="submit_btn" type="button">修改报名</button>
							<?php else: ?>
							<button class="ui-button" rel="orange" id="submit_btn" type="button">我要报名</button>
							<?php endif; ?>
							&nbsp;
							<?php elseif ($this->_var['event']['submit_begin_time'] > $this->_var['NOW_TIME']): ?>
							<button class="ui-button" rel="disabled" type="button">报名未开始</button>
							&nbsp;
							<?php elseif ($this->_var['event']['submit_end_time'] != 0 && $this->_var['event']['submit_end_time'] < $this->_var['NOW_TIME']): ?>
							<button class="ui-button" rel="disabled" type="button">报名已过期</button>
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
							 	title:"<?php echo $this->_var['event']['name']; ?>",
							    url:"<?php echo $this->_var['event']['share_url']; ?>"
							    
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
				<?php if (! $this->_var['event']['address']): ?>
				<?php if ($this->_var['event']['supplier_info'] && $this->_var['event']['supplier_location_count'] > 0): ?>
				<li rel="n0">商家位置</li>
				<?php endif; ?>
				<?php else: ?>
				<li rel="n0">活动地点</li>
				<?php endif; ?>
				<?php if ($this->_var['event']['content']): ?>
				<li rel="n1">活动详情</li>
				<?php endif; ?>
				<?php if (! $this->_var['preview']): ?>
				<li rel="n2">消费评价</li>
				<?php endif; ?>
			</ul>
			<!--}end: 详情导航 -->
			</div>
			<div style="display:none;" class="fix-nav wrap_m2">
				<!--{start: 浮动导航 -->
				<div class="show-nav">
					<!--{start: 详情导航 -->
					<ul class="f_l">
						<?php if (! $this->_var['event']['address']): ?>
						<?php if ($this->_var['event']['supplier_info'] && $this->_var['event']['supplier_location_count'] > 0): ?>
						<li rel="n0">商家位置</li>
						<?php endif; ?>
						<?php else: ?>
						<li rel="n0">活动地点</li>
						<?php endif; ?>
						<?php if ($this->_var['event']['content']): ?>
						<li rel="n1">活动详情</li>
						<?php endif; ?>
						<?php if (! $this->_var['preview']): ?>
						<li rel="n2">消费评价</li>
						<?php endif; ?>
					</ul>
					<?php if (! $this->_var['preview']): ?>
					<button class="ui-button flow_btn" id="flow_btn" rel="white">立即报名</button>
					<?php endif; ?>
					<!--}end: 详情导航 -->
				</div>
				<!--}end: 浮动导航 -->
			</div>
			<!--end 详情导航-->
			<div class="show-content">
				<?php if (! $this->_var['event']['address']): ?>
				<?php if ($this->_var['event']['supplier_info'] && $this->_var['event']['supplier_location_count'] > 0): ?>
				<div rel="n0" class="content_box">
					<div class="box_title nomargin">商家位置</div>
					<div class="box_content nopadding">
						<div id="business_address" event_id="<?php echo $this->_var['event']['id']; ?>" supplier_id="<?php echo $this->_var['event']['supplier_id']; ?>">
						
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php else: ?>
				<div rel="n0" class="content_box">
					<div class="box_title nomargin">活动地点</div>
					<div class="box_content nopadding">
						<div id="event_map" name="<?php echo $this->_var['event']['name']; ?>" address="<?php echo $this->_var['event']['address']; ?>" xpoint="<?php echo $this->_var['event']['xpoint']; ?>" ypoint="<?php echo $this->_var['event']['ypoint']; ?>"></div>
					</div>
				</div>
				<?php endif; ?>
				<?php if ($this->_var['event']['content']): ?>
				<div rel="n1" class="content_box">
					<div class="box_title">活动详情</div>
					<div class="box_content">
						<?php echo $this->_var['event']['content']; ?>
					</div>
				</div>
				<?php endif; ?>
				<?php if (! $this->_var['preview']): ?>
				<div rel="n2" class="content_box">
					<div class="box_title">
						<div class="box_title_text">活动评价</div>
						<div class="box_title_more">我参与过该活动，<a href="<?php
echo parse_url_tag("u:index|review|"."event_id=".$this->_var['event']['id']."".""); 
?>" target="_blank">我要评价</a></div>
					</div>
					<div class="box_content">
						<div id="review_list" event_id="<?php echo $this->_var['event']['id']; ?>">
						</div>
					</div>
				</div>
				<?php endif; ?>
				<div class="content_box"></div>
			</div>
		</div><!--end wrap_m2-->
		<div class="wrap_s2 f_r">
			<?php if ($this->_var['side_event_list']): ?>
			<div class="side_deal_box">
			<div class="title_row">热门活动</div>
			<div class="content_row">
				<ul class="side_deal_list">
					
					<?php $_from = $this->_var['side_event_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'side_event');if (count($_from)):
    foreach ($_from AS $this->_var['side_event']):
?>
					<li>
						<a href="<?php echo $this->_var['side_event']['url']; ?>" class="deal_img"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['side_event']['icon'],
  'w' => '198',
  'h' => '134',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" lazy="true" /></a>
						<a href="<?php echo $this->_var['side_event']['url']; ?>"  class="deal_title"><?php echo $this->_var['side_event']['name']; ?></a>
						<div class="deal_info">
							<span class="deal_price f_l">
							
							</span>
							<span class="sale_count f_r">
								<i class="iconfont">&#xe617;</i>&nbsp;报名量:<?php echo $this->_var['side_event']['submit_count']; ?>
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
				<a href="javascript:void(0);" class="clear_history" type="event">清空</a>
			</div>
			<div class="content_row">
				<ul class="side_deal_list">
					<?php $_from = $this->_var['history_deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'side_event');if (count($_from)):
    foreach ($_from AS $this->_var['side_event']):
?>
					<li>
						<a href="<?php echo $this->_var['side_event']['url']; ?>" class="deal_img"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['side_event']['icon'],
  'w' => '198',
  'h' => '134',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>" lazy="true" /></a>
						<a href="<?php echo $this->_var['side_event']['url']; ?>"  class="deal_title"><?php echo $this->_var['side_event']['name']; ?></a>
						<div class="deal_info">
							<span class="deal_price f_l">
							
							</span>
							<span class="sale_count f_r">
								<i class="iconfont">&#xe617;</i>&nbsp;报名量:<?php echo $this->_var['side_event']['submit_count']; ?>
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