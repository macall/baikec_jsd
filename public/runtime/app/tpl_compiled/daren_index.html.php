<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/daren.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/fanweUI.css";
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
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/daren.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/daren.js";
?>
<?php echo $this->fetch('inc/header.html'); ?> 

<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?>">
	<div class="blank"></div>	
	<div class="daren_recommend_box">
		<div class="darenshow_tag"></div>		
		<div class="m">
			<div class="daren_list">
			<?php if (count ( $this->_var['rnd_daren_list'] ) < 42): ?>
			<img src="<?php echo $this->_var['TMPL']; ?>/images/daren/demo_daren.jpg" />
			<?php else: ?>
			<?php $_from = $this->_var['rnd_daren_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'daren');if (count($_from)):
    foreach ($_from AS $this->_var['daren']):
?>
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['daren']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

			<?php endif; ?>
			</div>
			<div class="daren_submit">
				<a href="<?php
echo parse_url_tag("u:index|daren#submit|"."".""); 
?>"><img src="<?php echo $this->_var['TMPL']; ?>/images/daren/darensubmit.png" /></a>
			</div>
			<div class="clear"></div>
		</div>		
	</div>
	<div class="blank20"></div>
	
	<div class="show-nav" id="rel_nav">
		<!--{start: 达人导航 -->
			<ul>
				<li class="first on" data-category="0"><a href="javascript:;">热门推荐</a></li>
				<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item']):
        $this->_foreach['cateloop']['iteration']++;
?>							
				<li data-category="<?php echo $this->_var['cate_item']['id']; ?>" <?php if (($this->_foreach['cateloop']['iteration'] == $this->_foreach['cateloop']['total'])): ?>class="last"<?php endif; ?>><a href="javascript:;"><?php echo $this->_var['cate_item']['name']; ?></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		<!--}end: 达人导航 -->
	</div>
	<div class="blank20"></div>
	
	
	<div data-category="0" class="cate_topic">
	<div class="cate_title">热门推荐</div>
	<div class="blank20"></div>
	<?php $_from = $this->_var['topic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
	<div class="rec_topic_item <?php if ($this->_var['key'] % 2 != 0): ?>r<?php endif; ?>">
	<span>
			<div class="f_l">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['topic']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['topic']['user_id'],
);
echo $k['name']($k['value']);
?> 
			
			<br />
			<?php if ($this->_var['topic']['user_info']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['topic']['user_id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['topic']['user_id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
			</div>
			
			<div class="fav_row f_r"><span><?php echo $this->_var['topic']['fav_count']; ?></span>人喜欢</div> 
	</span>	
	<div class="blank"></div>
	<div class="tp_content"><?php echo $this->_var['topic']['content']; ?></div>
	<div class="blank5"></div>
	<a href="<?php
echo parse_url_tag("u:index|topic#view|"."id=".$this->_var['topic']['id']."".""); 
?>" class="topic_view"><img src="<?php if ($this->_var['topic']['daren_page']): ?><?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['daren_page'],
  'w' => '458',
  'h' => '160',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?><?php else: ?><?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['images']['0']['o_path'],
  'w' => '458',
  'h' => '160',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?><?php endif; ?>" lazy="true" /></a>
	</div>	
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<div class="blank"></div>
	
	<?php $_from = $this->_var['daren_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'daren');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['daren']):
?>
	<?php if ($this->_var['key'] < 8): ?>
	<span class="daren_item">
			<div class="f_l">
			<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['daren']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
			</div>
			<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
			<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['daren']['id'],
);
echo $k['name']($k['value']);
?> 
			
			<br />
			<?php if ($this->_var['daren']['focused'] == 1): ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['daren']['id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
			<?php else: ?>
			<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['daren']['id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
			<?php endif; ?>
			</div>

	</span>	
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<div class="blank"></div>
	</div><!--end cate_topic-->

	<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item']):
        $this->_foreach['cateloop']['iteration']++;
?>							
	<div data-category="<?php echo $this->_var['cate_item']['id']; ?>" class="cate_topic">
		<div class="cate_title"><?php echo $this->_var['cate_item']['name']; ?></div>
		<div class="blank20"></div>
		<?php $_from = $this->_var['cate_item']['topic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['topic']):
?>
		<div class="rec_topic_item <?php if ($this->_var['key'] % 2 != 0): ?>r<?php endif; ?>">
		<span>
				<div class="f_l">
				<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['topic']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
				</div>
				<div class="f_l" style="padding-left: 10px; width:200px; overflow:hidden;">
				<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['topic']['user_id'],
);
echo $k['name']($k['value']);
?> 
				
				<br />
				<?php if ($this->_var['topic']['user_info']['focused'] == 1): ?>
				<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['topic']['user_id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
				<?php else: ?>
				<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['topic']['user_id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
				<?php endif; ?>
				</div>
				
				<div class="fav_row f_r"><span><?php echo $this->_var['topic']['fav_count']; ?></span>人喜欢</div> 
		</span>	
		<div class="blank"></div>
		<div class="tp_content"><?php echo $this->_var['topic']['content']; ?></div>
		<div class="blank5"></div>
		<a href="<?php
echo parse_url_tag("u:index|topic#view|"."id=".$this->_var['topic']['id']."".""); 
?>" class="topic_view"><img src="<?php if ($this->_var['topic']['daren_page']): ?><?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['daren_page'],
  'w' => '458',
  'h' => '160',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?><?php else: ?><?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['topic']['images']['0']['o_path'],
  'w' => '458',
  'h' => '160',
  'g' => '1',
);
echo $k['name']($k['v'],$k['w'],$k['h'],$k['g']);
?><?php endif; ?>" lazy="true" /></a>
		</div>	
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<div class="blank"></div>
		
		<?php $_from = $this->_var['cate_item']['daren_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'daren');if (count($_from)):
    foreach ($_from AS $this->_var['daren']):
?>
		<span class="daren_item">
				<div class="f_l">
				<?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['daren']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
				</div>
				<div class="f_l" style="padding-left: 10px; width:180px; overflow:hidden;">
				<?php 
$k = array (
  'name' => 'get_user_name',
  'value' => $this->_var['daren']['id'],
);
echo $k['name']($k['value']);
?> 
				<br />
				<?php if ($this->_var['daren']['focused'] == 1): ?>
				<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['daren']['id']; ?>,this);" class="remove_focus"><?php echo $this->_var['LANG']['CANCEL_FOCUS']; ?></a>
				<?php else: ?>
				<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['daren']['id']; ?>,this);" class="add_focus"><?php echo $this->_var['LANG']['FOCUS_THEY']; ?></a>
				<?php endif; ?>
				</div>
	
		</span>	
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<div class="blank"></div>
	</div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
	
	<div style="display:none;" class="fix-nav">
		<!--{start: 浮动达人导航 -->
		<div class="show-nav">						
			<ul>
				<li class="first on" data-category="0"><a href="javascript:;">热门推荐</a></li>
				<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');$this->_foreach['cateloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cateloop']['total'] > 0):
    foreach ($_from AS $this->_var['cate_item']):
        $this->_foreach['cateloop']['iteration']++;
?>							
				<li data-category="<?php echo $this->_var['cate_item']['id']; ?>" <?php if (($this->_foreach['cateloop']['iteration'] == $this->_foreach['cateloop']['total'])): ?>class="last"<?php endif; ?>><a href="javascript:;"><?php echo $this->_var['cate_item']['name']; ?></a></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>						
		</div>
		<!--}end: 达人导航 -->
	</div>
<div class="blank"></div>
</div>
<?php echo $this->fetch('inc/footer.html'); ?>