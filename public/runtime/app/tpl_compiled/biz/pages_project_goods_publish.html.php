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
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/pages/project/goods.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/pages/project/goods.js";
?>

<?php echo $this->fetch('inc/header.html'); ?>
<script>
var ajax_url = '<?php echo $this->_var['ajax_url']; ?>';
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
				<div class="publish_project_btn f_r"><a href="<?php
echo parse_url_tag("u:biz|deal#index|"."".""); 
?>"><button class="ui-button " rel="white" type="button">返回列表</button></a></div>
			</div>
			
			<div class="form_box">
			<div class="standard_tab cf">
				<ul>
					<li class="tab_item curr"><a href="javascript:void(0);">基本信息</a></li>
					<li class="tab_item"><a href="javascript:void(0);">价格数量</a></li>
					<li class="tab_item"><a href="javascript:void(0);">规格属性</a></li>
				</ul>
			</div>
				<form name="goods_publish_form" action="<?php
echo parse_url_tag("u:biz|goods#do_save_publish|"."".""); 
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
											<td class="t_field_name "><i class="iconfont required">&#xe606;</i>商品名称:</td>
											<td class="t_field_value"><input class="ui-textbox long_input" name="name" value=""/></td>
										</tr>	
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>简短名称:</td>
											<td class="t_field_value"><input class="ui-textbox" name="sub_name" value=""/>&nbsp;<span class="t_tip">[用于邮件，短信的显示，字数不得超过20个字]</span></td>
										</tr>	
										<tr>
											<td class="t_field_name">商品简介:</td>
											<td class="t_field_value"><textarea class="textarea t_textarea" name="brief" ></textarea></td>
										</tr>

										<tr class="buy_type_0">
											<td class="t_field_name">品牌名称:</td>
											<td class="t_field_value">
												<select class="ui-select filter_select medium" name="brand_id" >
													<option value="0">==请选择品牌==</option>
													<?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row');if (count($_from)):
    foreach ($_from AS $this->_var['row']):
?>
														<option value="<?php echo $this->_var['row']['id']; ?>"><?php echo $this->_var['row']['name']; ?></option>
													<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
												</select>
											</td>
										</tr>
										<tr class="buy_type_0">
											<td class="t_field_name">标签:</td>
											<td class="t_field_value">
												<?php echo $this->_var['tags_html']; ?>
											</td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>商品分类:</td>
											<td class="t_field_value">
												<select class="ui-select filter_select medium" name="shop_cate_id" >
													<option value="0">==请选择类型==</option>
													<?php $_from = $this->_var['shop_cate_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row');if (count($_from)):
    foreach ($_from AS $this->_var['row']):
?>
														<option value="<?php echo $this->_var['row']['id']; ?>"><?php echo $this->_var['row']['title_show']; ?></option>
													<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
												</select>
											</td>
										</tr>
										<tr class="buy_type_0">
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>支持门店:</td>
											<td class="t_field_value">
												<?php $_from = $this->_var['location_infos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row');if (count($_from)):
    foreach ($_from AS $this->_var['row']):
?>
													<label class="ui-checkbox" rel="common_cbo"><input class="location_id_item" type="checkbox" name="location_id[]" value="<?php echo $this->_var['row']['id']; ?>" /><?php echo $this->_var['row']['name']; ?></label>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>商品缩略图:</td>
											<td class="t_field_value">
												<div class="img_icon_upbtn upload_btn_box">
													<button id="img_icon" class="ui-button img_icon_btn" rel="orange" type="button">图片上传</button>
												
												</div>
												<div class="img_icon_upload_box pub_upload_img_box"></div>
											</td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>商品图片集:</td>
											<td class="t_field_value">
											<div class="focus_imgs_upbtn upload_btn_box">
												<button id="focus_imgs" class="ui-button focus_imgs_btn" rel="orange" type="button">图片上传</button>
											</div>
												<div class="focus_imgs_upload_box pub_upload_img_box"></div>
											</td>
										</tr>
										<tr>
											<td class="t_field_name">商品描述:</td>
											<td class="t_field_value">
												<textarea id="description" name="description"></textarea>
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
											<td class="t_field_name">开始时间:</td>
											<td class="t_field_value"><input class="ui-textbox" name="begin_time" value="" readonly="readonly" /><a href="javascript:void(0);" class="clear_input_btn " title="清空时间">清空</a><span class="t_tip">[不设置表示商品开始无限制]</span></td>
										</tr>	
										<tr>
											<td class="t_field_name">结束时间:</td>
											<td class="t_field_value"><input class="ui-textbox" name="end_time" value=""/><a href="javascript:void(0);" class="clear_input_btn " title="清空时间">清空</a><span class="t_tip">[不设置表示商品结束无限制]</span></td>
										</tr>	
										<tr class="max_bought_row">
											<td class="t_field_name">库存数:</td>
											<td class="t_field_value"><input class="ui-textbox" name="max_bought" value=""/><span class="t_tip">[库存数]</span></td>
										</tr>
										<tr>
											<td class="t_field_name">会员最低购买数量:</td>
											<td class="t_field_value"><input class="ui-textbox" name="user_min_bought" value=""/></td>
										</tr>
										<tr>
											<td class="t_field_name">会员最大购买数量:</td>
											<td class="t_field_value"><input class="ui-textbox" name="user_max_bought" value=""/></td>
										</tr>
										<tr class="buy_type_0">
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>原价:</td>
											<td class="t_field_value"><input class="ui-textbox" name="origin_price" value=""/></td>
										</tr>
										<tr class="buy_type_0">
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>现价:</td>
											<td class="t_field_value"><input class="ui-textbox" name="current_price" value=""/></td>
										</tr>
										<tr>
											<td class="t_field_name"><i class="iconfont required">&#xe606;</i>商户结算价:</td>
											<td class="t_field_value"><input class="ui-textbox" name="balance_price" value=""/></td>
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
										<tr class="buy_type_0">
											<td class="t_field_name">是否支持退款:</td>
											<td class="t_field_value">
												<select class="ui-select filter_select medium" name="is_refund" >
													<option value="1">是</option>
													<option value="0">否</option>
												</select>
											</td>
										</tr>
										
										<tr>
											<td class="t_field_name">是否配送:</td>
											<td class="t_field_value">
												<select class="ui-select filter_select medium" name="is_delivery">
													<option value="1">是</option>
													<option value="0">否</option>
												</select>	
											</td>
										</tr>
										<tr id="filter_row">
											<td class="t_field_name">筛选关键词:</td>
											<td class="t_field_value">
												<div id="filter"></div>
											</td>
										</tr>
										<tr>
											<td class="t_field_name">商品类型:</td>
											<td class="t_field_value">
												<div class="goods_type_box f_l">
												<select class="ui-select filter_select medium" name="deal_goods_type" >
													<option value="0">==请选择类型==</option>
													<?php $_from = $this->_var['goods_type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row');if (count($_from)):
    foreach ($_from AS $this->_var['row']):
?>
														<option value="<?php echo $this->_var['row']['id']; ?>"><?php echo $this->_var['row']['name']; ?></option>
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
											<td class="t_field_name">商品属性:</td>
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
						<div class="sub_form_btn f_r">
							<button class="ui-button" rel="orange" type="submit">确认提交</button>
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