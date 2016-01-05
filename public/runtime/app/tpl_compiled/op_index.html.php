<?php if ($this->_var['cancel']): ?>
<form name="opform" action="<?php
echo parse_url_tag("u:index|op#submit|"."".""); 
?>">
取消操作
<div class="blank"></div>
<div class="btn_row tc">
	<input type="hidden" name="m_name" value="<?php echo $this->_var['m_name']; ?>" />
	<input type="hidden" name="a_name" value="<?php echo $this->_var['a_name']; ?>" />
	<input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
	<input type="button" onclick="do_submit_opform();" name="send" class="topic_form_button" value="确定">
	<input type="button" onclick="close_pop();" name="cancel" class="topic_form_button" value="取消">
</div>
</form>
<?php else: ?>
<form name="opform" action="<?php
echo parse_url_tag("u:index|op#submit|"."".""); 
?>">
<div class="topic_pub_form">
	请输入理由
	<div class="blank"></div>
	<textarea style="width:505px; height:80px;" id="reason" name="reason" class="f-textarea pubform"></textarea>
	<?php if (get_op_change_show ( $this->_var['m_name'] , $this->_var['a_name'] ) != ''): ?>
	<div class="blank"></div>
	<select name="op_change">
		<option value="0">不变动用户资金，积分或经验</option>
		<option value="1"><?php 
$k = array (
  'name' => 'get_op_change_show',
  'm' => $this->_var['m_name'],
  'a' => $this->_var['a_name'],
);
echo $k['name']($k['m'],$k['a']);
?></option>
	</select>
	<?php endif; ?>
	<input type="hidden" name="m_name" value="<?php echo $this->_var['m_name']; ?>" />
	<input type="hidden" name="a_name" value="<?php echo $this->_var['a_name']; ?>" />
	<input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
</div>
<div class="blank"></div>
<div class="btn_row tc">
	<input type="button" onclick="do_submit_opform();" name="send" class="topic_form_button" value="确定">
	<input type="button" onclick="close_pop();" name="cancel" class="topic_form_button" value="取消">
</div>
</form>
<?php endif; ?>