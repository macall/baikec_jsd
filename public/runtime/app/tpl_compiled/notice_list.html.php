<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/article.css";
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
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/article.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/article.js";
?>
<?php echo $this->fetch('inc/header.html'); ?> 
<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?>">
	<div class="blank20"></div>
	<div class="line"></div>
	<div class="blank20"></div>
	<div class="cate_box f_l">
		<?php $_from = $this->_var['acate_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
		<div class="cate_item">			
			<div class="cate_title"><a href="<?php echo $this->_var['cate']['url']; ?>" <?php if ($this->_var['cate']['id'] == $this->_var['cur_id']): ?>class="act"<?php endif; ?>><?php echo $this->_var['cate']['title']; ?></a></div>
			<?php $_from = $this->_var['cate']['child_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
			<div class="cate_name">
				<a href="<?php echo $this->_var['item']['url']; ?>" <?php if ($this->_var['item']['id'] == $this->_var['cur_id']): ?>class="act"<?php endif; ?>><span class="cate_icon"></span><?php echo $this->_var['item']['title']; ?></a>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>

	<div class="article_box f_r">
		<div class="article_top"><h3><span><?php echo $this->_var['cur_title']; ?></span></h3></div>
		
		<div class="blank20"></div>
		<div class="article_list">
			<ul>
				<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
				<li><a href="<?php echo $this->_var['item']['url']; ?>"  title="<?php echo $this->_var['item']['title']; ?>" class="f_l"><i class="list_icon"></i><span>[<?php echo $this->_var['item']['ctitle']; ?>]</span><?php echo $this->_var['item']['title']; ?></a><span class="f_r article_date"><?php 
$k = array (
  'name' => 'to_date',
  'v' => $this->_var['item']['update_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['v'],$k['f']);
?></span></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
		<div class="blank20"></div>
		<div class="pages"><?php echo $this->_var['pages']; ?></div>
		<div class="blank20"></div>
	</div>


</div>
<div class="blank"></div>

<?php echo $this->fetch('inc/footer.html'); ?>