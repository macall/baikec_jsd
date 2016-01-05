<ul class="comment_list">
<?php $_from = $this->_var['reply_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row');if (count($_from)):
    foreach ($_from AS $this->_var['row']):
?>
<li class="clearfix" id="reply_item_<?php echo $this->_var['row']['id']; ?>">
	<span class="avatar"><?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['row']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?></span>
	<div class="detail">    
		<p class="words">    
			<a class="name" href="<?php
echo parse_url_tag("u:index|uc_home#index|"."id=".$this->_var['row']['user_id']."".""); 
?>" target="_blank"><?php echo $this->_var['row']['user_name']; ?></a>
			<span class="content"><?php 
$k = array (
  'name' => 'nl2br',
  'v' => $this->_var['row']['content'],
);
echo $k['name']($k['v']);
?></span>
		</p>    
		<p class="other">
			<span class="time"><?php echo $this->_var['row']['format_create_time']; ?></span>    								
			<span class="opt"   <?php echo $this->_var['user_auth']['topic']['replydel']['0']; ?>>
				<a class="reply_btn" href="javascript:void(0);" onclick="set_reply('<?php echo $this->_var['row']['id']; ?>','<?php echo $this->_var['row']['user_name']; ?>')">回复</a>
				<?php if ($this->_var['row']['user_id'] == $this->_var['user_info']['id']): ?>										
					<a class="del_btn yahei" href="javascript:void(0);" onclick="delete_topic_reply('<?php echo $this->_var['row']['id']; ?>',$('#reply_item_<?php echo $this->_var['row']['id']; ?>'))">删除</a>  
				<?php elseif ($this->_var['user_auth']['topic']['replydel']): ?>
					<a class="del_btn yahei" href="javascript:void(0);" onclick="op_topic_replydel(<?php echo $this->_var['row']['id']; ?>);">删除</a>
				<?php endif; ?>
			</span>
		</p>    
	</div>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<?php if ($this->_var['pages']): ?>
<div class="page_box pages"><?php echo $this->_var['pages']; ?></div>
<?php endif; ?>
