<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/msg_page.css";
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
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/msg_page.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/msg_page.js";
?>
<?php echo $this->fetch('inc/header.html'); ?>

<div class="blank20"></div>
<div class="wrap_full" >

	<div class="layout_box msg_box">
		<div class="title"><?php echo $this->_var['page_title']; ?></div>
		<div class="content">
			<div>
			<?php echo $this->_var['msg']; ?>
			</div>
			<?php if ($this->_var['stay'] == 0): ?>
			<div class="jump_tip">				
				系统将在 <span>5</span> 秒后自动跳转，或者直接点击 [<a href="<?php echo $this->_var['jump']; ?>">这里</a>] 直接返回			
			</div>
			<?php else: ?>
			<div class="jump_tip">
				请点击 [<a href="<?php echo $this->_var['jump']; ?>">这里</a>] 返回
			</div>
			<?php endif; ?>
		</div>
	</div>

</div>
<div class="blank20"></div>
<?php echo $this->fetch('inc/footer.html'); ?>