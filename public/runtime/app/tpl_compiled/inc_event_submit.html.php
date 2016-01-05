<div class="form_panel event_submit_panel">
<form name="event_submit_form" action="<?php
echo parse_url_tag("u:index|event#do_submit|"."".""); 
?>">
	<?php $_from = $this->_var['event_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
	<dl>
		<dt><?php echo $this->_var['field']['field_show_name']; ?>：</dt>
		<dd>
		<?php if ($this->_var['field']['field_type'] == 0): ?>
			<input type="text" size="30" name="result[<?php echo $this->_var['field']['id']; ?>]" class="ui-textbox" value="<?php echo $this->_var['field']['result']; ?>" />
		<?php else: ?>
		<span class="select_pt">
			<select name="result[<?php echo $this->_var['field']['id']; ?>]" class="ui-select event_submt_select" height="90">
				<?php $_from = $this->_var['field']['value_scope']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
				<?php if (strim ( $this->_var['val'] ) != ''): ?>
				<option value="<?php echo $this->_var['val']; ?>" <?php if ($this->_var['field']['result'] == $this->_var['val']): ?>selected="selected"<?php endif; ?> ><?php echo $this->_var['val']; ?></option>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</select>
		</span>
		<?php endif; ?>
		<input type="hidden" value="<?php echo $this->_var['field']['id']; ?>" name="field_id[]" />
		</dd>
	</dl>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	<div class="submit_btn_row">
		<input type="hidden" value="<?php echo $this->_var['event_id']; ?>" name="event_id" />
		<button class="ui-button" rel="orange" id="do_submit_btn" type="submit"><?php echo $this->_var['btn_name']; ?></button>
	</div>
</form>
</div>