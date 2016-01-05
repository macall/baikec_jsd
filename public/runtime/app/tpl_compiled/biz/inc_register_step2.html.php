<style type="text/css">
    td span label{float:left; padding:3px; margin:2px; background:#E6E6E6; cursor:pointer; display:inline-block;}
    td span label.active{background:#F60; color:#fff;}
    #container{height:200px; width: 200px; float:left;}  
    #container_front{width: 600px; height:500px; border: 1px solid #000; position: absolute; top: 10px; background-color: #fff; overflow: hidden;}
    #container_m{width: 550px; height: 450px; margin: 0 auto;}
    #cancel_btn{display: block; width: 600px; height: 18px; line-height: 18px; text-align: right;}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo app_conf("BAIDU_MAP_APPKEY"); ?>"></script> 
<script type="text/javascript" src="<?php echo $this->_var['TMPL']; ?>/js/utils/biz.location.map.js"></script> 
<script type="text/javascript">
	var blue_point = "<?php echo $this->_var['APP_ROOT']; ?>/system/blue_point.png";
	var red_point = "<?php echo $this->_var['APP_ROOT']; ?>/system/red_point.png";
</script>
<div class="register-panel con_box">
	<form name="user_register_2" action="<?php
echo parse_url_tag("u:biz|user#register|"."step=3".""); 
?>" method="post" bindsubmit="true">
		<!--商户名称-->
		<div class="field_group_long">
			<label class="f_label">商户名称</label>
			<div class="f_text">
				<input type="text" name="name" id="name" value="" class="ui-textbox normal  " holder="请输入商户名称" />
			</div> 
			<div class="status_icon hide"> <i class=""></i></div>
			<div class="clear"></div>
		</div>
		<!--所属分类-->
		<div class="field_group_long">
			<label class="f_label">所属分类</label> 
			<div class="field_select">
				<select name="deal_cate_id" class="ui-select ">
					<option value=0>非生活服务类商户</option>
					<?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate_item');if (count($_from)):
    foreach ($_from AS $this->_var['cate_item']):
?>
					<option value="<?php echo $this->_var['cate_item']['id']; ?>"><?php echo $this->_var['cate_item']['name']; ?></option>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</select>
			</div>
			<div class="status_icon hide"> <i class=""></i></div>
			<div class="clear"></div>
		</div>
		<!--所属子类-->
		<div id="sub_cate"  class="field_group_long ">
			<label class="f_label">所属子类</label> 
			<div class="field_checkbox cnt">

			</div>
			<div class="status_icon hide"> <i class=""></i></div>
			<div class="clear"></div>
		</div>
		<!--所属城市-->
		<div class="field_group_long">
			<label class="f_label">所属城市</label> 
			<div class="field_select" >
				<select name="city_id" class="ui-select ">
								<?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city_item');if (count($_from)):
    foreach ($_from AS $this->_var['city_item']):
?>
								<option value="<?php echo $this->_var['city_item']['id']; ?>"><?php echo $this->_var['city_item']['name']; ?></option>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</select>
							
							<span id="area">
								
							</span>
			</div>
			<div class="status_icon hide"> <i class=""></i></div>
			<div class="clear"></div>
		</div>
		
		<!--商圈/地标-->
		<div id="region_mark"  class="field_group_long" style="display:none;">
			<label class="f_label">商圈/地标</label> 
			<div class=" field_checkbox cnt">
			</div>
			<div class="status_icon hide"> <i class=""></i></div>
			<div class="clear"></div>
		</div>
		<!--商户地址-->
		<div class="field_group_long" >
			<label class="f_label">商户地址</label> 
			<div class="address">
				<div class="f_text" style="margin-right:10px;">
					<input type="text" value="" class="ui-textbox " id="address" name="address" size="80" tabindex="1"  holder="请输入商户地址">
				</div>
				<div class="f_l"><button id="mark_map" class="ui-button f_l light" rel="light" type="button">在地图上标注</button></div>
				<div class="status_icon hide"> <i class=""></i></div>
				<div style="height:10px; clear:both;"></div>
                <div id="container" style="overflow-x: hidden; overflow-y: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left; "><div style="overflow-x: visible; overflow-y: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: url(http://api.map.baidu.com/images/openhand.cur), default; "><div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow-x: hidden; overflow-y: hidden; -webkit-user-select: none; width: 200px; height: 200px; "></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200; "><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800; "></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700; "><span class="BMap_Marker BMap_noprint" unselectable="on" "="" style="position: absolute; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; cursor: pointer; background-image: url(http://api.map.baidu.com/images/blank.gif); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; width: 19px; height: 25px; left: 90px; top: 75px; z-index: -5215540; background-position: initial initial; background-repeat: initial initial; " title=""></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600; "></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500; "></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400; "><span class="BMap_Marker" unselectable="on" style="position: absolute; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; width: 0px; height: 0px; left: 90px; top: 75px; z-index: -5215540; "><div style="position: absolute; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; width: 19px; height: 25px; overflow-x: hidden; overflow-y: hidden; "><img src="http://api.map.baidu.com/images/marker_red_sprite.png" style="border:none;left:0px; top:0px; position:absolute;"></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300; "><span unselectable="on" style="position: absolute; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; width: 20px; height: 11px; left: 94px; top: 89px; "><div style="position: absolute; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; width: 20px; height: 11px; overflow-x: hidden; overflow-y: hidden; "><img src="http://api.map.baidu.com/images/marker_red_sprite.png" style="border:none;left:-19px; top:-13px; position:absolute;"></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200; "></div></div><div style="position: absolute; top: 0px; left: 0px; z-index: 1; "><div style="position: absolute; z-index: -100; left: 100px; top: 100px; "><img style="position: absolute; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-width: initial; border-color: initial; border-image: initial; width: 256px; height: 256px; left: -142px; top: -337px; opacity: 1; " src="http://q8.baidu.com/it/u=x=12975;y=2920;z=16;v=010;type=web&amp;fm=44"><img style="position: absolute; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-width: initial; border-color: initial; border-image: initial; width: 256px; height: 256px; left: -142px; top: -81px; opacity: 1; " src="http://q7.baidu.com/it/u=x=12975;y=2919;z=16;v=010;type=web&amp;fm=44"></div></div><div style="position: absolute; top: 0px; left: 0px; z-index: 2; "></div></div><div style="height: 32px; position: absolute; z-index: 10; -webkit-text-size-adjust: none; right: auto; top: auto; bottom: 0px; left: 1px; display: none; " class=" anchorBL"><a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1" style="outline-style: none; outline-width: initial; outline-color: initial; "><img style="border:none;width:77px;height:32px" src="http://api.map.baidu.com/images/copyright_logo.png"></a></div><div id="zoomer" style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:url(http://api.map.baidu.com/images/openhand.cur) 8 8,default"><div class="BMap_zoomer" style="top:0;left:0;"></div><div class="BMap_zoomer" style="top:0;right:0;"></div><div class="BMap_zoomer" style="bottom:0;left:0;"></div><div class="BMap_zoomer" style="bottom:0;right:0;"></div></div><div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" style="width: 52px; height: 233px; position: absolute; z-index: 1100; -webkit-text-size-adjust: none; bottom: auto; right: auto; top: 10px; left: 10px; "><div class="BMap_stdMpPan"><div class="BMap_button BMap_panN" title="向上平移"></div><div class="BMap_button BMap_panW" title="向左平移"></div><div class="BMap_button BMap_panE" title="向右平移"></div><div class="BMap_button BMap_panS" title="向下平移"></div><div class="BMap_stdMpPanBg BMap_smcbg"></div></div><div class="BMap_stdMpZoom" style="height: 174px; width: 52px; "><div style="height: 174px; width: 37px; "><div class="BMap_button BMap_stdMpZoomIn" title="放大一级"><div class="BMap_smcbg"></div></div><div class="BMap_button BMap_stdMpZoomOut" title="缩小一级"><div class="BMap_smcbg"></div></div></div><div class="BMap_stdMpSlider" style="height: 140px; "><div class="BMap_stdMpSliderBgTop" style="height: 131px; "><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSliderBgBot" style="top: 131px; "><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSliderMask" title="放置到此级别"></div><div class="BMap_stdMpSliderBar" title="拖动缩放" style="cursor: url(http://api.map.baidu.com/images/openhand.cur), default; top: 22px; "><div class="BMap_smcbg"></div></div></div><div class="BMap_zlHolder"><div class="BMap_zlSt"><div class="BMap_smcbg"></div></div><div class="BMap_zlCity"><div class="BMap_smcbg"></div></div><div class="BMap_zlProv"><div class="BMap_smcbg"></div></div><div class="BMap_zlCountry"><div class="BMap_smcbg"></div></div></div></div></div><div unselectable="on" class=" BMap_cpyCtrl anchorBL" style="cursor: default; white-space: nowrap; color: black; background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; font: normal normal normal 11px/15px arial, sans-serif; position: absolute; z-index: 10; -webkit-text-size-adjust: none; right: auto; top: auto; bottom: 2px; left: 4px; background-position: initial initial; background-repeat: initial initial; "><span _cid="1"><span style="font-size:11px">© 2012 Baidu</span></span></div></div>
				<div class="blank1"></div>
				<button id="chang_api" name="chang_api"  class="ui-button f_l light" rel="light" type="button">手动修改</button>
                <div style="position:relative; top:-200px;">
                    <div id="container_front" style="display: none; z-index: 2;">
                        <a href="#" id="cancel_btn">取消</a>
                        <div id="container_m"></div>
                    </div>
                </div>
				<input type="hidden" name="xpoint" value="">
				<input type="hidden" name="ypoint" value="">
			</div>
			<div class="status_icon hide"> <i class=""></i></div>
			<div class="clear"></div>
		</div>
		
		<!--手机号-->
		<div class="field_group_long">
			<label class="f_label">商户电话</label> 
			<div class="f_text">
				<input type="text" name="tel" id="tel" value="" class="ui-textbox normal  " holder="请输入商户电话" />
			</div>
			<div class="status_icon hide"> <i class=""></i></div>
			<span class="field_tip"></span>
			<div class="clear"></div>
		</div>
		<!--营业时间-->
		<div class="field_group_long">
			<label class="f_label">营业时间</label> 
			<div class="f_text">
				<input type="text" name="open_time" id="open_time" value="" class="ui-textbox normal  " holder="请输入营业时间" />
			</div>
			<div class="status_icon hide"> <i class=""></i></div>
			<span class="field_tip"></span>
			<div class="clear"></div>
		</div>
		<div class="blank"></div>
		<!---->
		<!---->
		<div class="field_group_long"><button class="ui-button " rel="orange" type="submit">下一步</button></div>

	</form>
</div>

