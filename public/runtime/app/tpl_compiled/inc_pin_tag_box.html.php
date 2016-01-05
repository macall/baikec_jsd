<div class="discover_tags" id="discover_tags" style="position:absolute; left:0px; top:0px;">
	<div class="discover_tags_top"></div>
	<div class="discover_tags_center">
		<ul>
		<?php $_from = $this->_var['tag_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag_item');if (count($_from)):
    foreach ($_from AS $this->_var['tag_item']):
?>
		<li><a <?php if ($this->_var['tag_item']['color'] != '' && $this->_var['tag'] != $this->_var['tag_item']['name']): ?>style="color:<?php echo $this->_var['tag_item']['color']; ?>;"<?php endif; ?> href="<?php
echo parse_url_tag("u:index|discover|"."cid=".$this->_var['cid']."&tag=".$this->_var['tag_item']['name']."".""); 
?>" <?php if ($this->_var['tag'] == $this->_var['tag_item']['name']): ?>class="act"<?php endif; ?>>
			<?php echo $this->_var['tag_item']['name']; ?>
			</a></li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		<div class="blank"></div>
	</div>
	<div class="discover_tags_bottom"></div>
</div>