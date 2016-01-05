<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/group.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css//publish.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/fanweUI.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/iconfont.css";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.pngfix.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.animateToClass.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/plupload.full.min.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/publish.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/group.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/group.js";
?>
<?php echo $this->fetch('inc/header.html'); ?> 
<script type="text/javascript">
	var join_url = '<?php echo $this->_var['join_url']; ?>';
	var exit_url = '<?php echo $this->_var['exit_url']; ?>';
	var edit = '<?php echo $this->_var['edit_url']; ?>';

	var TOPIC_IMAGE_UPLOAD = '<?php
echo parse_url_tag("u:index|file#upload_topic|"."".""); 
?>';
</script>
<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?>">
	<div class="blank"></div>
	<div class="group_bg" style="background:url(<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['group_info']['image'],
  'w' => '990',
  'h' => '150',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?>);">
		<div class="group_intro">		
				<div class="group_title " style="color:#fff; padding-left:10px;">
				<span style="line-height:18px; font-size:18px; font-weight:bolder; font-family:微软雅黑;"><?php echo $this->_var['group_info']['name']; ?></span>
				<div class="blank1"></div>
				<span style="font-size:12px; font-weight:normal; line-height:22px;">创建于：<?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['group_info']['create_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?></span>
				</div>	
					
		</div>
	</div>
	<div class="blank"></div>	
	
	<div class="long f_l">
		<div class="group_memo_box">
			<?php 
$k = array (
  'name' => 'nl2br',
  'v' => $this->_var['group_info']['memo'],
);
echo $k['name']($k['v']);
?>
			<?php if ($this->_var['user_auth'] [ 'group' ] [ 'setmemo' ] [ 0 ] || $this->_var['user_auth'] [ 'group' ] [ 'setmemo' ] [ $this->_var['group_info'] [ 'id' ] ]): ?>
			<div class="blank"></div>
			<div class="f_r">
				<a href="javascript:void(0);" onclick="op_group_setmemo(<?php echo $this->_var['group_info']['id']; ?>);">编辑</a>
			</div>
			<?php endif; ?>
			<div class="blank"></div>
			
			<?php if ($this->_var['is_join'] == 0): ?>
			<a href="javascript:void(0);" onclick="join_group();" class="join_group f_l" ></a> <span class="group_count f_l" style="margin-left:10px;">已有 <span><?php echo $this->_var['group_info']['user_count']; ?></span> 位成员</span>
			<?php else: ?>
			<span class="group_count f_l" style="margin-left:10px;">已有 <span><?php echo $this->_var['group_info']['user_count']; ?></span> 位成员</span> ，我是小组成员  &nbsp;&nbsp;<a href="javascript:void(0);" onclick="exit_group(<?php echo $this->_var['group_info']['id']; ?>);" class="exit_group">退出小组</a>
			<?php endif; ?>
			
			<div class="blank"></div>
		</div>
		
		<div class="blank"></div>
		
		
		<div id="filter_row">
			<div class="f_l">
			<a href="<?php echo $this->_var['urls']['all']; ?>#filter_row">全部</a> / <a href="<?php echo $this->_var['urls']['is_best']; ?>#filter_row">精华</a> / <a href="<?php echo $this->_var['urls']['create_time']; ?>#filter_row">创建时间</a> / <a href="<?php echo $this->_var['urls']['last_time']; ?>#filter_row">最后回复</a>
			</div>
			
			<div class="f_r">
				<?php if ($this->_var['is_join'] == 1): ?>
				<a href="javascript:void(0);" onclick="$.publish_article(<?php echo $this->_var['group_info']['id']; ?>);"  class="add_topic">发表主题</a>
				<?php endif; ?>
			</div>
		</div>
		<div class="topic_list">
		<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['topic']):
?>
	
		<li class="tl_f">
			<div class="tl_c">			
				<?php if ($this->_var['topic']['is_best'] == 1): ?>			
	            <div class="img_tj"></div>
				<?php endif; ?>
				<div class="pic">
				<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['topic']['user_id'],
  't' => 'small',
);
echo $k['name']($k['uid'],$k['t']);
?>
				</div>
				<div class="ct">               
					<p class="title clearfix">
						<?php if ($this->_var['topic']['is_top'] == 1): ?>
						<span class="top fl">[置顶]</span>	
						<?php endif; ?>				
						<a class="tit fl " target="_blank" href="<?php
echo parse_url_tag("u:index|topic|"."id=".$this->_var['topic']['id']."".""); 
?>" title="<?php echo $this->_var['topic']['forum_title']; ?>"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['topic']['forum_title'],
  'b' => '0',
  'e' => '35',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></a>				
					</p>
					<p class="author">
						<span class="n">
							<?php 
$k = array (
  'name' => 'get_user_name',
  'v' => $this->_var['topic']['user_id'],
);
echo $k['name']($k['v']);
?>
						</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?php if ($this->_var['topic']['last_user_id'] > 0): ?>
						<span class="n reply">
							<?php 
$k = array (
  'name' => 'get_user_name',
  'v' => $this->_var['topic']['last_user_id'],
);
echo $k['name']($k['v']);
?> 在 <?php 
$k = array (
  'name' => 'pass_date',
  'v' => $this->_var['topic']['last_time'],
);
echo $k['name']($k['v']);
?> 回应了该主题
						</span>
						<?php endif; ?>
					</p>
				</div>
			</div>
			<div class="count"><?php echo $this->_var['topic']['reply_count']; ?></div>
			<span class="p_time">
				<?php 
$k = array (
  'name' => 'pass_date',
  'v' => $this->_var['topic']['create_time'],
);
echo $k['name']($k['v']);
?>		
			</span>
		</li>	
	
	
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<div class="blank"></div>
		<div class="pages"><?php echo $this->_var['pages']; ?></div>
	</div><!--end long-->
	
	<div class="short f_r">
	<div class="inc">
		<div class="inc_top"><span class="f_l">本组成员</span>
		<span class="f_r more_people"><a title="<?php echo $this->_var['LANG']['MORE']; ?>" href="<?php
echo parse_url_tag("u:index|group#user_list|"."id=".$this->_var['group_info']['id']."".""); 
?>"><?php echo $this->_var['LANG']['MORE']; ?></a></span>
		</div>
		<div class="inc_main user_list">
			<div class="blank"></div>
			<?php if ($this->_var['group_info']['user_id'] > 0): ?>
			<span>
				<div class="f_l">
				<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['group_info']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
				</div>
				<div class="f_l" style="padding-left: 10px; width:70px; overflow:hidden;">
				<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['group_info']['user_id'],
);
echo $k['name']($k['value']);
?> 
				
				<span>组长</span>			
				</div>
			</span>	
			<div class="blank"></div>
			<?php endif; ?>
			<?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user_item');if (count($_from)):
    foreach ($_from AS $this->_var['user_item']):
?>
			
			<span>
				<div class="f_l">
				<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['user_item']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
				</div>
				<div class="f_l" style="padding-left: 10px; width:70px; overflow:hidden;">
				<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['user_item']['id'],
);
echo $k['name']($k['value']);
?> 
				<br />
				<?php if ($this->_var['user_item']['type'] == 1): ?>管理员<?php else: ?>组员<?php endif; ?>
				
				</div>
			</span>	
			<div class="blank"></div>									
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
		</div>	
	
	</div>
	</div>
	
	<div class="blank"></div>
</div>
<?php echo $this->fetch('inc/footer.html'); ?>