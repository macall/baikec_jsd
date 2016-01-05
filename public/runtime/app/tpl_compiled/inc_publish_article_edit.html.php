<div class="publish_article_edit_page publish_eidt_box_full_bg">
	<form name="publish_article_edit_form" action="<?php
echo parse_url_tag("u:index|ajax#publish_save|"."".""); 
?>" method="post">
	<div class="pub_a_edit_item_box">
		<div class="pub_label">
			<h4>标题</h4><i class="iconfont">&#xe625;</i>
		</div>
		<div class="a_edit_title">
			<input type="text" class="ui-textarea a_edit_text" name="forum_title"/>
		</div>
		<div class="pub_label">
				<h4>小组</h4>
		</div>
		<div class="group_select_box ">
			<?php if ($this->_var['group_info']): ?>
				<div class="f_l">
					<input type="hidden" name="group_id" value="<?php echo $this->_var['group_info']['id']; ?>" />
					<span class="show_topic"><?php echo $this->_var['group_info']['name']; ?></span>
				</div>
			<?php else: ?>
			<div class="field_select f_l">
				<select name="cate_id" class="ui-select">
					<option value="0">小组分类</option>
					<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'g_row');if (count($_from)):
    foreach ($_from AS $this->_var['g_row']):
?>
						<option value="<?php echo $this->_var['g_row']['id']; ?>"><?php echo $this->_var['g_row']['name']; ?></option>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</select>
			</div>
			<div class="field_select f_l">
				<select name="group_id" class="ui-select">
					<option value="0">选择小组</option>
				</select>
			</div>
			<?php endif; ?>

		</div>
		<div class="pub_label ">
			<h4>内容</h4><i class="iconfont">&#xe625;</i>
		</div>
		<div class="a_edit_area ">
			<?php echo $this->fetch('inc/publish_edit_box_full.html'); ?>
		</div>
		<div class="blank0"></div>
		
		
	</div>

	<div class="pub_g_info_btn f_r">
			<input type="hidden" name="jump" value="<?php
echo parse_url_tag("u:index|uc_home#index|"."".""); 
?>">
			<input type="hidden" name="ajax" value="1">

			<input type="hidden" name="type" value="share"/>
			<div class="publish_btn_box">
				<button class="ui-button" rel="orange" type="submit"> 提 交 </button>
			</div>
		</div>
	</form>
</div>