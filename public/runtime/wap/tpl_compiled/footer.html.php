<?php if ($this->_var['pages']): ?>
	<div class="fy">
		<?php echo $this->_var['pages']; ?>
	</div>
<?php endif; ?>
<div   class="gotop" data-com="gotop">
	<a   href="#">
		<i>⇧</i>
	</a>
	</div>
<div class="footer">
	 <div class="footer-t">
	 	  <div class="f_user f_l">
	 	  	   <?php if ($this->_var['is_login'] == 0): ?>
				<div class="f_login"><a href="<?php
echo parse_wap_url_tag("u:index|login#index|"."".""); 
?>">登录</a></div>
				<div class="f_register"><a href="<?php
echo parse_wap_url_tag("u:index|register#index|"."".""); 
?>">注册</a></div>
				<?php else: ?>
				<span style="padding-left:10px;"><a href="<?php
echo parse_wap_url_tag("u:index|user_center#index|"."".""); 
?>">我的帐户</a></span>&nbsp;&nbsp;<i style="color: #6E7D8B;">|</i>&nbsp;&nbsp;
				<span class="f_login_out"><a href="<?php
echo parse_wap_url_tag("u:index|login_out#index|"."".""); 
?>">退出</a></span>
				<?php endif; ?>
	 	  </div>

		  <div class="change_city f_r">
		  	   <span><?php if ($this->_var['data']['city_name']): ?><?php echo $this->_var['data']['city_name']; ?><?php else: ?>全国<?php endif; ?></span>
			   <a href="<?php
echo parse_wap_url_tag("u:index|index2#index|"."".""); 
?>"><i class="fa fa-exchange"></i>切换城市</a>
		  </div>
	 </div>		 
	 <div class="footer-sort">
	 	  <ul>
	 	  	<li><a href="<?php
echo parse_wap_url_tag("u:index|index#index|"."".""); 
?>">首页</a></li>
			<li><a href="<?php
echo parse_wap_url_tag("u:index|merchantlist#index|"."".""); 
?>">商家</a></li>
			<li><a href="<?php echo get_domain().str_replace('/wap',"",APP_ROOT) ?>/index.php?&is_pc=1">电脑版</a></li>
			<li><a href="<?php
echo parse_wap_url_tag("u:index|biz_login#index|"."".""); 
?>">商家登陆</a></li>
		 </ul>
	 </div>			 
	 <div class="footer_p">
		 	友情链接：
			<?php $_from = $this->_var['data']['f_link_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link_group');if (count($_from)):
    foreach ($_from AS $this->_var['link_group']):
?>
			<?php $_from = $this->_var['link_group']['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>	
			<?php echo $this->_var['link']['name']; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	 </div>
	 <div class="footer_num">
	 	<div class="footer_bor">
	 		<div class="footer_text">
			<?php 
$k = array (
  'name' => 'app_conf',
  'value' => 'SHOP_TITLE',
);
echo $k['name']($k['value']);
?>
		    </div>
	 	</div>
	 </div> 
</div>
				
			

</body>
<html>