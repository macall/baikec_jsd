<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/pin_layout.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/pin_box.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/discover.css";
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
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/pin.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/pin.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/discover.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/discover.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/topic.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/topic.js";
?>
<?php echo $this->fetch('inc/header.html'); ?>
<div class="blank"></div>

<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?>" id="flow_cate_outer">
<div id="flow_cate">
		<ul>
			<li class="<?php if ($this->_var['cid'] == 0): ?>current<?php endif; ?>"><a href="<?php
echo parse_url_tag("u:index|discover|"."".""); 
?>">全部</a></li>
			<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');if (count($_from)):
    foreach ($_from AS $this->_var['cate_item']):
?>
			<li class="<?php if ($this->_var['cid'] == $this->_var['cate_item'] [ 'id' ]): ?>current<?php endif; ?>"><a href="<?php
echo parse_url_tag("u:index|discover|"."cid=".$this->_var['cate_item']['id']."".""); 
?>"><?php echo $this->_var['cate_item']['name']; ?></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
</div>
</div>

<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?>">
	<div class="pin_layout" id="discover_pin">
	<?php echo $this->fetch('inc/pin_tag_box.html'); ?>
	</div>
</div>
<div class="blank"></div>
<input type="hidden" name="cid" id="hd_cid" value="<?php echo $this->_var['cid']; ?>" />
<input type="hidden" name="tag" id="hd_tag" value="<?php echo $this->_var['tag']; ?>" />
<input type="hidden" name="page" id="hd_page" value="<?php echo $this->_var['page']; ?>" />
<input type="hidden" name="step_size" id="hd_step_size" value="<?php echo $this->_var['step_size']; ?>" />
<input type="hidden" name="step" id="hd_step" /> 
<input type="hidden" name="ajax_wait" id="ajax_wait" /> 
<div id="loading"> <span class="loading_span"></span><span>正在玩命加载中......</span></div>
<div class="pages"><?php echo $this->_var['pages']; ?></div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>