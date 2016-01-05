<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/project.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/fanweUI.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/kindeditor.css";
/*日期控件*/
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/jquery.datetimepicker.css";


$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery-1.8.2.min.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/kindeditor.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/plupload.full.min.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.pngfix.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.animateToClass.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
/*日期控件*/
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.datetimepicker.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/pages/project/project.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/pages/project/project.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/pages/project/deal.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/pages/project/deal.js";
?>

<?php echo $this->fetch('inc/header.html'); ?>
<script>
var ajax_url = '<?php echo $this->_var['ajax_url']; ?>';
var attr_cfg_json = <?php echo $this->_var['attr_cfg_json']; ?>;
var attr_stock_json = <?php echo $this->_var['attr_stock_json']; ?>;
</script>

<div class="blank20"></div>
<div class="page wrap_full">
	<div class="left_box">
		<?php echo $this->fetch('inc/biz_nav_list.html'); ?>
	</div>
	<div class="right_box">
		<div class="content">
			<div class="head_box clearfix">
				<h2 class="f_l"><?php echo $this->_var['page_title']; ?></h2>
				<div class="publish_project_btn f_r"><a href="<?php echo $this->_var['go_list_url']; ?>"><button class="ui-button " rel="white" type="button">返回列表</button></a></div>
			</div>
			
			<div class="form_box">
			<div class="standard_tab cf">
				<ul>
					<li class="tab_item curr"><a href="javascript:void(0);">基本信息</a></li>
					<li class="tab_item"><a href="javascript:void(0);">价格数量</a></li>
					<li class="tab_item"><a href="javascript:void(0);">规格属性</a></li>
				</ul>
			</div>
				<form name="deal_publish_form" action="<?php
echo parse_url_tag("u:biz|deal#do_save_publish|"."".""); 
?>" method="post">
				<div class="publish_box ">
					<div class="common_tip">
		               <span>注意：可以点击以上【顶部选项卡】或【下一页表单】按钮切换表单</span>
	            	</div>
						<ul class="publish_cons">
						<!-- 基本信息 -->
							<li class="con_item curr">
								<table class="form_teble_box add_border">
									<colgroup>
										<col width="120">
										<col width="570">
									</colgroup>
									<tbody>
										<tr>
											<td class="t_field_name "><i class="iconfont required">&#xe606;</i>团购名称:</td>
											<td class="t_field_value"><input class="ui-textbox long_input" name="name" value="<?php echo $this->_var['deal_info']['name']; ?>"/></td>
										</tr>	
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>简短名称:</td>
											<td class="t_field_value"><input class="ui-textbox" name="sub_name" value="<?php echo $this->_var['deal_info']['sub_name']; ?>"/>&nbsp;<span class="t_tip">[用于团购券，邮件，短信，列表展示的显示，字数不得超过20个字]</span></td>
										</tr>	
										<tr>
											<td class="t_field_name">团购简介:</td>
											<td class="t_field_value"><textarea class="textarea t_textarea" name="brief" ><?php echo $this->_var['deal_info']['brief']; ?></textarea></td>
										</tr>
										<tr>
											<td class="t_field_name">标签:</td>
											<td class="t_field_value">
												<?php echo $this->_var['tags_html']; ?>
											</td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>城市:</td>
											<td class="t_field_value">
												<?php 
$k = array (
  'name' => 'city_id_select',
  'city_id' => $this->_var['deal_info']['city_id'],
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
											</td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>分类:<?php echo $this->_var['deal_info']['cate_id']; ?></td>
											<td class="t_field_value">
												<?php 
$k = array (
  'name' => 'cate_id_select',
  'cate_id' => $this->_var['deal_info']['cate_id'],
);
echo $this->_hash . $k['name'] . '|' . base64_encode(serialize($k)) . $this->_hash;
?>
											</td>
										</tr>
										
										<tr id="sub_cate_box" class="hide">
											<td class="t_field_name">子分类列表:</td>
											<td class="t_field_value item_input">
											</td>
										</tr>
										
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>支持门店:</td>
											<td class="t_field_value">
												<?php $_from = $this->_var['location_infos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row');if (count($_from)):
    foreach ($_from AS $this->_var['row']):
?>
													<label class="ui-checkbox" rel="common_cbo"><input class="location_id_item" type="checkbox" name="location_id[]" value="<?php echo $this->_var['row']['id']; ?>" <?php if ($this->_var['row']['checked'] == 1): ?>checked = "checked"<?php endif; ?> /><?php echo $this->_var['row']['name']; ?></label>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>团购缩略图:</td>
											<td class="t_field_value">
												<div class="img_icon_upbtn upload_btn_box">
													<button id="img_icon" class="ui-button img_icon_btn" rel="orange" type="button">图片上传</button>
												
												</div>
												<div class="img_icon_upload_box pub_upload_img_box">
													<?php if ($this->_var['deal_info']['icon']): ?>
													<span>
														<a href="javascript:void(0);"></a><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['deal_info']['icon'],
  'h' => '50',
  'w' => '50',
  'g' => '1',
);
echo $k['name']($k['v'],$k['h'],$k['w'],$k['g']);
?>">
														<input type="hidden" name="img_icon" value="<?php echo $this->_var['deal_info']['icon']; ?>">
													</span>
													<?php endif; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>团购图片集:</td>
											<td class="t_field_value">
											<div class="focus_imgs_upbtn upload_btn_box">
												<button id="focus_imgs" class="ui-button focus_imgs_btn" rel="orange" type="button">图片上传</button>
											</div>
												<div class="focus_imgs_upload_box pub_upload_img_box">
													<?php if ($this->_var['focus_imgs']): ?>
														<?php $_from = $this->_var['focus_imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['img']):
?>
															<span>
																<a href="javascript:void(0);" ></a><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['img'],
  'h' => '50',
  'w' => '50',
  'g' => '1',
);
echo $k['name']($k['v'],$k['h'],$k['w'],$k['g']);
?>">
																<input type="hidden" name="focus_imgs[]" value="<?php echo $this->_var['img']; ?>">
															</span>
														<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
													<?php endif; ?>
												</div>
											</td>
										</tr>
										<tr>
											<td class="t_field_name">团购描述:</td>
											<td class="t_field_value">
												<textarea id="description" name="description"><?php echo $this->_var['deal_info']['description']; ?></textarea>
											</td>
										</tr>
										<tr>
											<td class="t_field_name">购买须知:</td>
											<td class="t_field_value">
												<textarea id="notes" name="notes"><?php echo $this->_var['deal_info']['notes']; ?></textarea>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<!-- 价格数量 -->
							<li class="con_item">
								<table class="form_teble_box add_border">
									<colgroup>
										<col width="120">
										<col width="570">
									</colgroup>
									<tbody>
										<tr>
											<td class="t_field_name">团购开始时间:</td>
											<td class="t_field_value"><input class="ui-textbox" name="begin_time" value="<?php echo $this->_var['deal_info']['begin_time']; ?>" readonly="readonly" /><a href="javascript:void(0);" class="clear_input_btn " title="清空时间">清空</a><span class="t_tip">[不设置表示团购开始无限制]</span></td>
										</tr>	
										<tr>
											<td class="t_field_name">团购结束时间:</td>
											<td class="t_field_value"><input class="ui-textbox" name="end_time" value="<?php echo $this->_var['deal_info']['end_time']; ?>"/><a href="javascript:void(0);" class="clear_input_btn " title="清空时间">清空</a><span class="t_tip">[不设置表示团购结束无限制]</span></td>
										</tr>	
										<tr class="max_bought_row">
											<td class="t_field_name">团购总数:</td>
											<td class="t_field_value"><input class="ui-textbox" name="max_bought" value="<?php if ($this->_var['deal_info']['max_bought'] == 0): ?><?php else: ?><?php echo $this->_var['deal_info']['max_bought']; ?><?php endif; ?>"/><span class="t_tip">[库存数]</span></td>
										</tr>
										<tr>
											<td class="t_field_name">会员最低购买数量:</td>
											<td class="t_field_value"><input class="ui-textbox" name="user_min_bought" value="<?php if ($this->_var['deal_info']['user_min_bought'] == 0): ?><?php else: ?><?php echo $this->_var['deal_info']['user_min_bought']; ?><?php endif; ?>"/></td>
										</tr>
										<tr>
											<td class="t_field_name">会员最大购买数量:</td>
											<td class="t_field_value"><input class="ui-textbox" name="user_max_bought" value="<?php if ($this->_var['deal_info']['user_max_bought'] == 0): ?><?php else: ?><?php echo $this->_var['deal_info']['user_max_bought']; ?><?php endif; ?>"/></td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>原价:</td>
											<td class="t_field_value"><input class="ui-textbox" name="origin_price" value="<?php echo $this->_var['deal_info']['origin_price']; ?>"/></td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>团购价:</td>
											<td class="t_field_value"><input class="ui-textbox" name="current_price" value="<?php echo $this->_var['deal_info']['current_price']; ?>"/></td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>商户结算价:</td>
											<td class="t_field_value"><input class="ui-textbox" name="balance_price" value="<?php echo $this->_var['deal_info']['balance_price']; ?>"/></td>
										</tr>
										
									</tbody>
								</table>
							</li>
							<!-- 规格属性 -->
							<li class="con_item">
								<table class="form_teble_box add_border">
									<colgroup>
										<col width="120">
										<col width="570">
									</colgroup>
									<tbody>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>发券类型:</td>
											<td class="t_field_value">
												<select class="ui-select filter_select medium" name="deal_type" >
													<option value="0" <?php if ($this->_var['deal_info']['deal_type'] == 0): ?>selected="selected"<?php endif; ?>>按单发券</option>
													<option value="1" <?php if ($this->_var['deal_info']['deal_type'] == 1): ?>selected="selected"<?php endif; ?>>按件发券</option>
												</select>
											</td>
										</tr>
										
										<tr>
											<td class="t_field_name">团购券有效期类型:</td>
											<td class="t_field_value">
												<select class="ui-select filter_select medium" name="coupon_time_type">
													<option value="0" <?php if ($this->_var['deal_info']['coupon_time_type'] == 0): ?>selected="selected"<?php endif; ?>>指定日期</option>
													<option value="1" <?php if ($this->_var['deal_info']['coupon_time_type'] == 1): ?>selected="selected"<?php endif; ?>>指定天数</option>
												</select>	
											</td>
										</tr>
										<tr class="coupon_time_type_day hide">
											<td class="t_field_name">团购券有效天数:</td>
											<td class="t_field_value"><input class="ui-textbox" name="coupon_day" value="<?php if ($this->_var['deal_info']['coupon_day'] > 0): ?><?php echo $this->_var['deal_info']['coupon_day']; ?><?php endif; ?>"/></td>
										</tr>
										<tr class="coupon_time_type_datetime">
											<td class="t_field_name">团购券生效时间:</td>
											<td class="t_field_value"><input class="ui-textbox" name="coupon_begin_time" value="<?php echo $this->_var['deal_info']['coupon_begin_time']; ?>"/></td>
										</tr>	
										<tr class="coupon_time_type_datetime">
											<td class="t_field_name">团购券到期时间:</td>
											<td class="t_field_value"><input class="ui-textbox" name="coupon_end_time" value="<?php echo $this->_var['deal_info']['coupon_end_time']; ?>"/></td>
										</tr>
										<tr>
											<td class="t_field_name">团购券商品类型:</td>
											<td class="t_field_value">
												<div class="goods_type_box f_l">
												<select class="ui-select filter_select medium" name="deal_goods_type" >
													<option value="0">==请选择类型==</option>
													<?php $_from = $this->_var['goods_type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row');if (count($_from)):
    foreach ($_from AS $this->_var['row']):
?>
														<option value="<?php echo $this->_var['row']['id']; ?>" <?php if ($this->_var['row']['selected'] == 1): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['row']['name']; ?></option>
													<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
												</select>
												</div>
												<div class="f_l" style="margin-top:7px;">
												<span class="f_l" style="display:block;height: 23px;line-height: 23px;">属性没有符合你的？</span>
												<div class="f_l"><button class="ui-button add_goods_type" rel="white" type="button">新增</button></div>
												</div>
											</td>
										</tr>
										<tr  id="deal_attr_row" style="display:none;">
											<td class="t_field_name">团购属性:</td>
											<td class="t_field_value">
												<div id="deal_attr"></div>
											</td>
										</tr>
									
									</tbody>
								</table>
							</li>
						</ul>
						<div class="blank10"></div>
					</div>
					<div class="confirm_form_btn">
						<input type="hidden" name="id" value="<?php echo $this->_var['deal_info']['id']; ?>"/>
						<input type="hidden" name="edit_type" value="<?php echo $this->_var['edit_type']; ?>"/>
						<div class="sub_form_btn f_r">
							<button class="ui-button " rel="orange" type="submit">确认提交</button>
						</div>
						<div class="f_r">
							<button class="ui-button next_form_btn" rel="blue" type="button">下一页表单</button>
						</div>
						
							
					</div>
				</form>
				<div class="blank10"></div>
			</div>
			<div class="blank10"></div>
		</div>
	</div>	
</div>

<div class="blank20"></div>
<?php echo $this->fetch('inc/footer.html'); ?>