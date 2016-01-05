<?php if (!defined('THINK_PATH')) exit();?>

<script type="text/javascript">
	$(document).ready(function(){
		load_attr_stock();
	});
	function addRow(obj)
	{
		var html = $(obj.parentNode).html();
		html = html.replace("addRow", "delRow");
		html = html.replace("+", "-");
		$("<div>"+html+"</div>").insertAfter($(obj.parentNode));
	}
	function delRow(obj)
	{
		$(obj.parentNode).remove();
	}
</script>
<?php if(is_array($goods_type_attr)): foreach($goods_type_attr as $key=>$attr_item): ?><div>
		<span id="title_<?php echo ($attr_item["id"]); ?>"><?php echo ($attr_item["name"]); ?></span>：
		<?php if($attr_item['input_type'] == 0): ?><input type="text" class="textbox" style="width:50px;" name="deal_attr[<?php echo ($attr_item["id"]); ?>][]" value="<?php echo ($attr_item["attr_name"]); ?>" onchange="load_attr_stock();"  /><?php endif; ?>
		<?php if($attr_item['input_type'] == 1): ?><select name="deal_attr[<?php echo ($attr_item["id"]); ?>][]" onchange="load_attr_stock();">
			<?php if(is_array($attr_item["attr_list"])): foreach($attr_item["attr_list"] as $key=>$attr_row): ?><option value="<?php echo ($attr_row); ?>" <?php if($attr_item['attr_name'] == $attr_row): ?>selected="selected"<?php endif; ?>><?php echo ($attr_row); ?></option><?php endforeach; endif; ?>
			</select><?php endif; ?>
		<?php echo L("ATTR_PRICE");?>：<input type="text" class="textbox" style="width:50px;" name="deal_attr_price[<?php echo ($attr_item["id"]); ?>][]" value="<?php echo ($attr_item["price"]); ?>" />
		递加结算价：<input type="text" class="textbox" style="width:50px;" name="deal_add_balance_price[<?php echo ($attr_item["id"]); ?>][]" value="<?php echo ($attr_item["add_balance_price"]); ?>" />
		<?php if($attr_item['is_first'] == 1): ?>[ <a href="javascript:void(0);" onclick="addRow(this);" style="text-decoration:none;">+</a> ]
		<?php else: ?>
		[ <a href="javascript:void(0);" onclick="delRow(this);" style="text-decoration:none;">-</a> ]<?php endif; ?>
		<input type="checkbox" name="deal_attr_stock[<?php echo ($attr_item["id"]); ?>][]" rel="<?php echo ($attr_item["id"]); ?>" <?php if($attr_item['is_checked'] == 1): ?>checked="checked"<?php endif; ?> class="deal_attr_stock" value="1" onchange="load_attr_stock(this);" />
		<input type="hidden" class="deal_attr_stock_hd" name="deal_attr_stock_hd[<?php echo ($attr_item["id"]); ?>][]" />
		<?php echo L("SET_ATTR_STOCK");?>
		<div class="blank5"></div>
	</div><?php endforeach; endif; ?>
<div id="stock_table"></div>