<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/uc_follow_fans.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/publish.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/pin_layout.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/pin_box.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/login_page.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/user_header.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/fanweUI.css";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.pngfix.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.animateToClass.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/plupload.full.min.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/pin.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/pin.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/topic.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/topic.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/uc_best.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/uc_best.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/uc_follow_fans.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/uc_follow_fans.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/publish.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/publish.js";
?>
<?php echo $this->fetch('inc/user_header.html'); ?>
<script type="text/javascript">
	var TOPIC_IMAGE_UPLOAD = '<?php
echo parse_url_tag("u:index|file#upload_topic|"."".""); 
?>'; //分享点评的图片上传路径
	var is_best_user = '<?php echo $this->_var['is_best_user']; ?>';
</script>
<div class="blank"></div>
<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?>">
	<div class="u_list_main">
		<div class="u_list_box">
			
		</div>
		<div class="blank10"></div>
		<?php if ($this->_var['uc_u_list']): ?>
			<?php $_from = $this->_var['uc_u_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'u_item');if (count($_from)):
    foreach ($_from AS $this->_var['u_item']):
?>
				<div class="u_item">
					<div class="avatar"><?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['u_item']['id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?></div>
					<div class="u_info">
						<p><span class="u_name"><?php echo $this->_var['u_item']['user_name']; ?></span></p>
						<p>
							<?php if ($this->_var['u_item']['focused'] == 1): ?>
									<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['u_item']['id']; ?>,this);" class="remove_focus" style="margin:0px 5px; _margin-top:-1px;">取消关注</a>
							<?php else: ?>
									<a href="javascript:;" onclick="focus_user(<?php echo $this->_var['u_item']['id']; ?>,this);" class="add_focus"  style="margin:0px 5px;  _margin-top:-1px;">关注TA</a>
							<?php endif; ?>
						</p>
					</div>
				</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<div class="blank10"></div>
			<div class="pages"><?php echo $this->_var['pages']; ?></div>
			<div class="blank10"></div>
		<?php else: ?>
			<div class="tip"><h3>TA没关注用户，上面可能是你感兴趣的用户 ^_^ </h3>&nbsp;<a href="javascript:void(0);" onclick="load_best_user()"><i class="iconfont">&#xe624;</i>换一批</a></div>
		<?php endif; ?>
		<div class="blank"></div>
		
	</div>
</div>
<div class="blank"></div>
<?php echo $this->fetch('inc/footer.html'); ?>