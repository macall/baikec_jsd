<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link rel="stylesheet" type="text/css" href="__TMPL__Common/style/style.css" />
<style type="text/css">
	
/**
 * 自定义的font-face
 */
@font-face {font-family: "diyfont";
  src: url('<?php echo APP_ROOT; ?>/public/iconfont/iconfont.eot?r=<?php echo time(); ?>'); /* IE9*/
  src: url('<?php echo APP_ROOT; ?>/public/iconfont/iconfont.eot?#iefix&r=<?php echo time(); ?>') format('embedded-opentype'), /* IE6-IE8 */
  url('<?php echo APP_ROOT; ?>/public/iconfont/iconfont.woff?r=<?php echo time(); ?>') format('woff'), /* chrome、firefox */
  url('<?php echo APP_ROOT; ?>/public/iconfont/iconfont.ttf?r=<?php echo time(); ?>') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url('<?php echo APP_ROOT; ?>/public/iconfont/iconfont.svg#iconfont&r=<?php echo time(); ?>') format('svg'); /* iOS 4.1- */}
.diyfont {
  font-family:"diyfont" !important;
  font-size:20px;
  font-style:normal;
  -webkit-font-smoothing: antialiased;
  -webkit-text-stroke-width: 0.2px;
  -moz-osx-font-smoothing: grayscale;
}

</style>
<script type="text/javascript">
 	var VAR_MODULE = "<?php echo conf("VAR_MODULE");?>";
	var VAR_ACTION = "<?php echo conf("VAR_ACTION");?>";
	var MODULE_NAME	=	'<?php echo MODULE_NAME; ?>';
	var ACTION_NAME	=	'<?php echo ACTION_NAME; ?>';
	var ROOT = '__APP__';
	var ROOT_PATH = '<?php echo APP_ROOT; ?>';
	var CURRENT_URL = '<?php echo btrim($_SERVER['REQUEST_URI']);?>';
	var INPUT_KEY_PLEASE = "<?php echo L("INPUT_KEY_PLEASE");?>";
	var TMPL = '__TMPL__';
	var APP_ROOT = '<?php echo APP_ROOT; ?>';
	
	//关于图片上传的定义
	var UPLOAD_SWF = '__TMPL__Common/js/Moxie.swf';
	var UPLOAD_XAP = '__TMPL__Common/js/Moxie.xap';
	var MAX_IMAGE_SIZE = '1000000';
	var ALLOW_IMAGE_EXT = 'zip';
	var UPLOAD_URL = '<?php echo u("File/do_upload_icon");?>';
	var ICON_FETCH_URL = '<?php echo u("File/fetch_icon");?>';
	var ofc_swf = '__TMPL__Common/js/open-flash-chart.swf';
</script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.timer.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/plupload.full.min.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/ui_upload.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.bgiframe.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.weebox.js"></script>
<link rel="stylesheet" type="text/css" href="__TMPL__Common/style/weebox.css" />
<script type="text/javascript" src="__TMPL__Common/js/swfobject.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/script.js"></script>

<script type="text/javascript" src="__ROOT__/public/runtime/admin/lang.js"></script>
<script type='text/javascript'  src='__ROOT__/admin/public/kindeditor/kindeditor.js'></script>
</head>
<body>
<div id="info"></div>

<script type="text/javascript" src="__TMPL__Common/js/conf.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/calendar/calendar.php?lang=zh-cn" ></script>
<script type="text/javascript">
	var attr_cfg_json = '';
	var attr_stock_json = '';
</script>
<link rel="stylesheet" type="text/css" href="__TMPL__Common/js/calendar/calendar.css" />
<script type="text/javascript" src="__TMPL__Common/js/calendar/calendar.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/deal.js"></script>
<script type="text/javascript">
	
	window.onload = function()
	{
		init_dealform();
		sw_shop_cate();
	}
</script>

</script>
<div class="main">
<div class="main_title"><?php echo L("ADD");?> <a href="<?php echo u("Deal/index");?>" class="back_list"><?php echo L("BACK_LIST");?></a></div>
<div class="blank5"></div>
<form name="edit" action="__APP__" method="post" enctype="multipart/form-data">
<div class="button_row">
	<input type="button" class="button conf_btn" rel="1" value="<?php echo L("DEAL_BASE_INFO");?>" />&nbsp;
	<input type="button" class="button conf_btn" rel="2" value="<?php echo L("DEAL_TIME_NUM");?>" />&nbsp;
	<input type="button" class="button conf_btn" rel="3" value="<?php echo L("DEAL_TYPE_AND_ATTR");?>" />&nbsp;	
	<input type="button" class="button conf_btn" rel="4" value="<?php echo L("SEO_CONFIG");?>" />&nbsp;	
</div>
<div class="blank5"></div>
<table class="form conf_tab" cellpadding=0 cellspacing=0 rel="1">
	<tr>
		<td colspan=2 class="topTd"></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_NAME");?>:</td>
		<td class="item_input"><input type="text" class="textbox require" name="name" style="width:500px;" /></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_SUB_NAME");?>:</td>
		<td class="item_input"><input type="text" class="textbox require" name="sub_name" /> <span class='tip_span'>[<?php echo L("DEAL_SUB_NAME_TIP");?>]</span></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("URL_UNAME");?>:</td>
		<td class="item_input"><input type="text" class="textbox word-only" name="uname" /> </td>
	</tr>
	<!--<tr>
		<td class="item_title"><?php echo L("DEAL_CODE");?>:</td>
		<td class="item_input"><input type="text" class="textbox" name="code" /> <span class='tip_span'>[<?php echo L("DEAL_CODE_TIP");?>]</span></td>
	</tr>-->
	<tr>
		<td class="item_title"><?php echo L("DEAL_BRIEF");?>:</td>
		<td class="item_input"><textarea class="textarea" name="brief" ></textarea></td>
	</tr>
	<!--<tr>
		<td class="item_title"><?php echo L("DEAL_BUY_TYPE");?>:</td>
		<td class="item_input">
			<select name="buy_type">
				<option value="0"><?php echo L("DEAL_BUY_TYPE_0");?></option>
				<option value="3"><?php echo L("DEAL_BUY_TYPE_3");?></option>
			</select>
		</td>
	</tr>-->
	<tr>
		<td class="item_title"><?php echo L("DEAL_TAG");?>:</td>
		<td class="item_input">
			<?php for($i=0;$i<10;$i++)
				{
				if($i!=7)
				echo "<label><input type='checkbox' name='deal_tag[]' value='".$i."' />".l("DEAL_TAG_".$i)."</label>&nbsp;";
				} ?>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("CATE_TREE");?>:</td>
		<td class="item_input">
		<select name="cate_id" class="require">
			<option value="0">==<?php echo L("NO_SELECT_CATE");?>==</option>
			<?php if(is_array($cate_tree)): foreach($cate_tree as $key=>$cate_item): ?><option value="<?php echo ($cate_item["id"]); ?>"><?php echo ($cate_item["title_show"]); ?></option><?php endforeach; endif; ?>
		</select>		
		</td>
	</tr>
	<tr id="sub_cate_box">
		<td class="item_title"><?php echo L("DEALCATETYPE_INDEX");?>:</td>
		<td class="item_input">
			
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_CITY");?>:</td>
		<td class="item_input">
		<select name="city_id" class="require">
			<option value="0">==<?php echo L("NO_SELECT_CITY");?>==</option>
			<?php if(is_array($city_list)): foreach($city_list as $key=>$city_item): ?><option value="<?php echo ($city_item["id"]); ?>" <?php if($city_item['pid'] == 0): ?>disabled="disabled"<?php endif; ?>><?php echo ($city_item["title_show"]); ?></option><?php endforeach; endif; ?>
		</select>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("SUPPLIER_NAME");?>:</td>
		<td class="item_input">
			<span id="supplier_list">
			<select name="supplier_id">
				<option value="0"><?php echo L("EMPTY_SELECT_SUPPLIER");?></option>
				<?php if($supplier_info): ?><option value="<?php echo ($supplier_info["id"]); ?>" selected="selected"><?php echo ($supplier_info["name"]); ?></option><?php endif; ?>
			</select>
			</span>
			<input type="text" class="textbox" name="supplier_key" /> 
			<input type="button" name="supplier_key_btn" class="button" value="<?php echo L("SEARCH");?>" />
		</td>
	</tr>
	<tr id="supplier_location">
		<td class="item_title"><?php echo L("SUPPLIER_LOCATION");?>:</td>
		<td class="item_input">
			
		</td>
	</tr>
	<!--<tr>
		<td class="item_title"><?php echo L("BRAND_NAME");?>:</td>
		<td class="item_input">
		<select name="brand_id">
			<option value="0">==<?php echo L("EMPTY_SELECT");?>==</option>
			<?php if(is_array($brand_list)): foreach($brand_list as $key=>$brand_item): ?><option value="<?php echo ($brand_item["id"]); ?>"><?php echo ($brand_item["name"]); ?></option><?php endforeach; endif; ?>
		</select>
		</td>
	</tr>-->
	<tr>
		<td class="item_title"><?php echo L("DEAL_ICON");?>:</td>
		<td class="item_input">
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'icon';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='icon' name='icon' style='width:120px; height:25px;' ></textarea> </div><input type='text' id='focus_icon' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='./admin/Tpl/default/Common/images/no_pic.gif'  style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_icon' /><img src='/admin/Tpl/default/Common/images/del.gif' style='display:none; margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_icon' onclick='delimg("icon")' title='删除' />
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_IMG");?>:</td>
		<td class="item_input">
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'img0';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='img0' name='img[]' style='width:120px; height:25px;' ></textarea> </div><input type='text' id='focus_img0' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='./admin/Tpl/default/Common/images/no_pic.gif'  style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_img0' /><img src='/admin/Tpl/default/Common/images/del.gif' style='display:none; margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_img0' onclick='delimg("img0")' title='删除' />
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'img1';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='img1' name='img[]' style='width:120px; height:25px;' ></textarea> </div><input type='text' id='focus_img1' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='./admin/Tpl/default/Common/images/no_pic.gif'  style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_img1' /><img src='/admin/Tpl/default/Common/images/del.gif' style='display:none; margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_img1' onclick='delimg("img1")' title='删除' />
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'img2';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='img2' name='img[]' style='width:120px; height:25px;' ></textarea> </div><input type='text' id='focus_img2' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='./admin/Tpl/default/Common/images/no_pic.gif'  style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_img2' /><img src='/admin/Tpl/default/Common/images/del.gif' style='display:none; margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_img2' onclick='delimg("img2")' title='删除' />
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'img3';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='img3' name='img[]' style='width:120px; height:25px;' ></textarea> </div><input type='text' id='focus_img3' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='./admin/Tpl/default/Common/images/no_pic.gif'  style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_img3' /><img src='/admin/Tpl/default/Common/images/del.gif' style='display:none; margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_img3' onclick='delimg("img3")' title='删除' />
			<div class="blank5"></div>
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'img4';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='img4' name='img[]' style='width:120px; height:25px;' ></textarea> </div><input type='text' id='focus_img4' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='./admin/Tpl/default/Common/images/no_pic.gif'  style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_img4' /><img src='/admin/Tpl/default/Common/images/del.gif' style='display:none; margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_img4' onclick='delimg("img4")' title='删除' />
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'img5';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='img5' name='img[]' style='width:120px; height:25px;' ></textarea> </div><input type='text' id='focus_img5' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='./admin/Tpl/default/Common/images/no_pic.gif'  style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_img5' /><img src='/admin/Tpl/default/Common/images/del.gif' style='display:none; margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_img5' onclick='delimg("img5")' title='删除' />
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'img6';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='img6' name='img[]' style='width:120px; height:25px;' ></textarea> </div><input type='text' id='focus_img6' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='./admin/Tpl/default/Common/images/no_pic.gif'  style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_img6' /><img src='/admin/Tpl/default/Common/images/del.gif' style='display:none; margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_img6' onclick='delimg("img6")' title='删除' />
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'img7';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='img7' name='img[]' style='width:120px; height:25px;' ></textarea> </div><input type='text' id='focus_img7' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='./admin/Tpl/default/Common/images/no_pic.gif'  style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_img7' /><img src='/admin/Tpl/default/Common/images/del.gif' style='display:none; margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_img7' onclick='delimg("img7")' title='删除' />
		</td>
	</tr>

	<tr>
		<td class="item_title"><?php echo L("SORT");?>:</td>
		<td class="item_input"><input type="text" class="textbox" name="sort" value="<?php echo ($new_sort); ?>" /></td>
	</tr>
	
	<tr>
		<td class="item_title"><?php echo L("IS_EFFECT");?>:</td>
		<td class="item_input">
			<lable><?php echo L("IS_EFFECT_1");?><input type="radio" name="is_effect" value="1" checked="checked" /></lable>
			<lable><?php echo L("IS_EFFECT_0");?><input type="radio" name="is_effect" value="0" /></lable>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_DESCRIPTION");?>:</td>
		<td class="item_input">
			 <script type='text/javascript'> var eid = 'description';KE.show({id : eid,skinType: 'tinymce',allowFileManager : true,resizeMode : 0,items : [
							'source','fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
							'plainpaste', 'wordpaste', 'justifyleft', 'justifycenter', 'justifyright',
							'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
							'superscript', 'selectall', '-',
							'title', 'fontname', 'fontsize', 'textcolor', 'bgcolor', 'bold',
							'italic', 'underline', 'strikethrough', 'removeformat', 'image',
							'flash', 'media', 'table', 'hr', 'emoticons', 'link', 'unlink'
						]});</script><div  style='margin-bottom:5px; '><textarea id='description' name='description' style='width:750px; height:350px;' ></textarea> </div>
		</td>
	</tr>
	<tr style="display:none">
		<td class="item_title">套餐:</td>
		<td class="item_input">
			 <script type='text/javascript'> var eid = 'package';KE.show({id : eid,skinType: 'tinymce',allowFileManager : true,resizeMode : 0,items : [
							'source','fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
							'plainpaste', 'wordpaste', 'justifyleft', 'justifycenter', 'justifyright',
							'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
							'superscript', 'selectall', '-',
							'title', 'fontname', 'fontsize', 'textcolor', 'bgcolor', 'bold',
							'italic', 'underline', 'strikethrough', 'removeformat', 'image',
							'flash', 'media', 'table', 'hr', 'emoticons', 'link', 'unlink'
						]});</script><div  style='margin-bottom:5px; '><textarea id='package' name='package' style='width:750px; height:350px;' ></textarea> </div>
		</td>
	</tr>
	<tr>
		<td class="item_title">购买须知:</td>
		<td class="item_input">
			 <script type='text/javascript'> var eid = 'notes';KE.show({id : eid,skinType: 'tinymce',allowFileManager : true,resizeMode : 0,items : [
							'source','fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
							'plainpaste', 'wordpaste', 'justifyleft', 'justifycenter', 'justifyright',
							'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
							'superscript', 'selectall', '-',
							'title', 'fontname', 'fontsize', 'textcolor', 'bgcolor', 'bold',
							'italic', 'underline', 'strikethrough', 'removeformat', 'image',
							'flash', 'media', 'table', 'hr', 'emoticons', 'link', 'unlink'
						]});</script><div  style='margin-bottom:5px; '><textarea id='notes' name='notes' style='width:750px; height:350px;' ></textarea> </div>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("IS_RECOMMEND");?>:</td>
		<td class="item_input">
			<select name="is_recommend">
				<option value="0">否</option>
				<option value="1">是</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td colspan=2 class="bottomTd"></td>
	</tr>
</table>


<table class="form conf_tab" cellpadding=0 cellspacing=0 rel="2">
	<tr>
		<td colspan=2 class="topTd"></td>
	</tr>
	<tr class="buy_type_0">
		<td class="item_title"><?php echo L("DEAL_BEGIN_TIME");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="begin_time" id="begin_time" value="" onfocus="this.blur(); return showCalendar('begin_time', '%Y-%m-%d %H:%M:%S', false, false, 'btn_begin_time');" />
			<input type="button" class="button" id="btn_begin_time" value="<?php echo L("SELECT_TIME");?>" onclick="return showCalendar('begin_time', '%Y-%m-%d %H:%M:%S', false, false, 'btn_begin_time');" />	
			<input type="button" class="button" value="<?php echo L("CLEAR_TIME");?>" onclick="$('#begin_time').val('');" />	
			<span class='tip_span'>[<?php echo L("DEAL_BEGIN_TIME_TIP");?>]</span>
			<?php echo L("NOTICE_TO_INDEX");?>: <input type="checkbox" name="notice" value="1" />
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_END_TIME");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="end_time" id="end_time" value="" onfocus="this.blur(); return showCalendar('end_time', '%Y-%m-%d %H:%M:%S', false, false, 'btn_end_time');" />
			<input type="button" class="button" id="btn_end_time" value="<?php echo L("SELECT_TIME");?>" onclick="return showCalendar('end_time', '%Y-%m-%d %H:%M:%S', false, false, 'btn_end_time');" />	
			<input type="button" class="button" value="<?php echo L("CLEAR_TIME");?>" onclick="$('#end_time').val('');" />
			<span class='tip_span'>[<?php echo L("DEAL_END_TIME_TIP");?>]</span>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_BUY_COUNT");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="buy_count" value="" />
			<span class='tip_span'>[<?php echo L("DEAL_BUY_COUNT_TIP");?>]</span>
		</td>
	</tr>	
	<tr class="buy_type_0">
		<td class="item_title"><?php echo L("DEAL_MIN_BOUGHT");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="min_bought" value="" />
			<span class='tip_span'>[<?php echo L("DEAL_MIN_BOUGHT_TIP");?>]</span>
		</td>
	</tr>
	<tr class="max_bought_row">
		<td class="item_title"><?php echo L("DEAL_MAX_BOUGHT");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="max_bought" value="" />
			<span class='tip_span'>[<?php echo L("DEAL_MAX_BOUGHT_TIP");?>]</span>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_USER_MIN_BOUGHT");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="user_min_bought" value="" />			
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_USER_MAX_BOUGHT");?>:</td>
		<td class="item_input"><input type="text" class="textbox" name="user_max_bought" value="" /></td>
	</tr>
	<tr class="buy_type_0">
		<td class="item_title"><?php echo L("DEAL_ORIGIN_PRICE");?>:</td>
		<td class="item_input"><input type="text" class="textbox" name="origin_price" value="" /></td>
	</tr>
	<tr class="buy_type_0">
		<td class="item_title"><?php echo L("DEAL_BALANCE_PRICE");?>:</td>
		<td class="item_input"><input type="text" class="textbox" name="balance_price" value="" /></td>
	</tr>
	<tr class="buy_type_0">
		<td class="item_title"><span id="price_title"><?php echo L("DEAL_CURRENT_PRICE");?></span>:</td>
		<td class="item_input"><input type="text" class="textbox" name="current_price" value="" /></td>
	</tr>
	<tr class="buy_type_0">
		<td class="item_title"><?php echo L("DEAL_DISCOUNT");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="discount" value="" />
			<span class='tip_span'>[<?php echo L("DEAL_DISCOUNT_TIP");?>]</span>
		</td>
	</tr>
	<tr class="buy_type_0">
		<td class="item_title"><?php echo L("DEAL_RETURN_MONEY");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="return_money" value="" />
			<span class='tip_span'>[验证后返还给会员的金额]</span>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_RETURN_SCORE");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="return_score" value="" />
			<span class='tip_span'>[验证后返还给会员的积分]</span>
		</td>
	</tr>
	<tr>
		<td colspan=2 class="bottomTd"></td>
	</tr>
</table>

<table class="form conf_tab" cellpadding=0 cellspacing=0 rel="3">
	<tr>
		<td colspan=2 class="topTd"></td>
	</tr>

	<!--<tr>
		<td class="item_title">是否免预约:</td>
		<td class="item_input">
			<select name="auto_order">
				<option value="0">否</option>
				<option value="1">是</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td class="item_title"><?php echo L("DEAL_IS_COUPON");?>:</td>
		<td class="item_input">
			<select name="is_coupon">
				<option value="0"><?php echo L("IS_COUPON_0");?></option>
				<option value="1"><?php echo L("IS_COUPON_1");?></option>
			</select>
			<span id="coupon_refund">
			&nbsp;&nbsp;
			<label>随时退：<input type="checkbox" name="any_refund" value="1"  /></label>  &nbsp;&nbsp;<label>过期退：<input type="checkbox" name="expire_refund" value="1" /></label>
			</span>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_IS_REFUND");?>:</td>
		<td class="item_input">
			<select name="is_refund">
				<option value="1"><?php echo L("IS_REFUND_1");?></option>
				<option value="0"><?php echo L("IS_REFUND_0");?></option>
			</select>
		</td>
	</tr>-->
	<tr class="coupon_time">
		<td class="item_title"><?php echo L("DEAL_COUNT_TYPE");?>:</td>
		<td class="item_input">
			<select name="deal_type">
				<option value="0"><?php echo L("COUNT_TYPE_0");?></option>
				<option value="1"><?php echo L("COUNT_TYPE_1");?></option>
			</select>
		</td>
	</tr>
	<tr class="coupon_time">
		<td class="item_title">团购券有效期类型:</td>
		<td class="item_input">
			<select name="coupon_time_type">
				<option value="0">指定日期</option>
				<option value="1">指定天数</option>
			</select>
		</td>
	</tr>
	<tr class="coupon_time coupon_time_type_1 coupon_time_type">
		<td class="item_title">团购券有效天数:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="coupon_day" value="7" />
		</td>
	</tr>
	<tr class="coupon_time coupon_time_type_0 coupon_time_type">
		<td class="item_title"><?php echo L("DEAL_COUPON_BEGIN_TIME");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="coupon_begin_time" id="coupon_begin_time" value="" onfocus="this.blur(); return showCalendar('coupon_begin_time', '%Y-%m-%d %H:%M:%S', false, false, 'btn_coupon_begin_time');" />
			<input type="button" class="button" id="btn_coupon_begin_time" value="<?php echo L("SELECT_TIME");?>" onclick="return showCalendar('coupon_begin_time', '%Y-%m-%d %H:%M:%S', false, false, 'btn_coupon_begin_time');" />	
			<input type="button" class="button" value="<?php echo L("CLEAR_TIME");?>" onclick="$('#coupon_begin_time').val('');" />
			<span class='tip_span'>[<?php echo L("DEAL_COUPON_BEGIN_TIME_TIP");?>]</span>
		</td>
	</tr>
	<tr class="coupon_time coupon_time_type_0 coupon_time_type">
		<td class="item_title"><?php echo L("DEAL_COUPON_END_TIME");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="coupon_end_time" id="coupon_end_time" value="" onfocus="this.blur(); return showCalendar('coupon_end_time', '%Y-%m-%d %H:%M:%S', false, false, 'btn_coupon_end_time');" />
			<input type="button" class="button" id="btn_coupon_end_time" value="<?php echo L("SELECT_TIME");?>" onclick="return showCalendar('coupon_end_time', '%Y-%m-%d %H:%M:%S', false, false, 'btn_coupon_end_time');" />	
			<input type="button" class="button" value="<?php echo L("CLEAR_TIME");?>" onclick="$('#coupon_end_time').val('');" />
			<span class='tip_span'>[<?php echo L("DEAL_COUPON_END_TIME_TIP");?>]</span>
		</td>
	</tr>
	<tr class="coupon_time">
		<td class="item_title"><?php echo L("FORBID_SMS");?>:</td>
		<td class="item_input">
			<select name="forbid_sms">
				<option value="0"><?php echo L("NO");?></option>
				<option value="1"><?php echo L("YES");?></option>								
			</select>
		</td>
	</tr>
	<!--<tr>
		<td class="item_title"><?php echo L("DEAL_IS_DELIVERY");?>:</td>
		<td class="item_input">
			<select name="is_delivery">
				<option value="0"><?php echo L("IS_DELIVERY_0");?></option>
				<option value="1"><?php echo L("IS_DELIVERY_1");?></option>
			</select>
			<span class='tip_span'>[<?php echo L("DEAL_IS_DELIVERY_TIP");?>]</span>
		</td>
	</tr>
	<tr class="weight_row">
		<td class="item_title"><?php echo L("DEAL_WEIGHT");?>:</td>
		<td class="item_input">
			<input type="text" class="textbox" name="weight" value="" />
			<select name="weight_id">
				<?php if(is_array($weight_list)): foreach($weight_list as $key=>$weight_item): ?><option value="<?php echo ($weight_item["id"]); ?>"><?php echo ($weight_item["name"]); ?></option><?php endforeach; endif; ?>				
			</select>
		</td>
	</tr>	
	
	<tr class="weight_row">
		<td class="item_title"><?php echo L("OPEN_DELIVERY_FREE");?>:</td>
		<td class="item_input">
			<select name="free_delivery">
				<option value="0"><?php echo L("NO");?></option>
				<option value="1"><?php echo L("YES");?></option>			
			</select>
		</td>
	</tr>	
	
	<tr class="free_delivery">
		<td class="item_title"><?php echo L("DELIVERY_FREE_CONF");?>:</td>
		<td class="item_input">
			<table class="no_border">
			<?php if(is_array($delivery_list)): foreach($delivery_list as $key=>$delivery_item): ?><tr>
				<td><?php echo ($delivery_item["name"]); ?>: </td><td><?php echo L("ONE_BUY");?> <input type="text" class="textbox" name="free_count[]" style="width:50px;" /> <?php echo L("ONE_BUY_2");?>  <input type="hidden" value="<?php echo ($delivery_item["id"]); ?>" name="delivery_id[]" /></td>
			</tr><?php endforeach; endif; ?>
			</table>
		</td>
	</tr>
	
	<tr class="weight_row">
		<td class="item_title"><?php echo L("FORBID_DELIVERY");?>:</td>
		<td class="item_input">
			<?php if(is_array($delivery_list)): foreach($delivery_list as $key=>$delivery_item): ?><div>
				<label><input type="checkbox" name="forbid_delivery_id[]" value="<?php echo ($delivery_item["id"]); ?>" /> <?php echo ($delivery_item["name"]); ?></label>
				</div><?php endforeach; endif; ?>			
		</td>
	</tr>-->
	
	<tr class="buy_type_0">
		<td class="item_title"><?php echo L("DEAL_DEFINE_PAYMENT");?>:</td>
		<td class="item_input">
			<select name="define_payment">
				<option value="0"><?php echo L("DEAL_DEFINE_PAYMENT_0");?></option>
				<option value="1"><?php echo L("DEAL_DEFINE_PAYMENT_1");?></option>
			</select>
			<span class='tip_span'>[<?php echo L("DEAL_DEFINE_PAYMENT_TIP");?>]</span>
		</td>
	</tr>
	
	<tr class="define_payment buy_type_0">
		<td class="item_title"><?php echo L("DEAL_DEFINE_PAYMENT_LIST");?>:</td>
		<td class="item_input">
			<?php if(is_array($payment_list)): foreach($payment_list as $key=>$payment_item): ?><div>
				<label><input type="checkbox" name="payment_id[]" value="<?php echo ($payment_item["id"]); ?>" /> <?php echo ($payment_item["name"]); ?></label>
				</div><?php endforeach; endif; ?>
		</td>
	</tr>
	
	<tr>
		<td class="item_title"><?php echo L("DEAL_ALLOW_PROMOTE");?>:</td>
		<td class="item_input">
			<select name="allow_promote">
				<option value="0"><?php echo L("ALLOW_PROMOTE_0");?></option>
				<option value="1"><?php echo L("ALLOW_PROMOTE_1");?></option>
			</select>
			<span class='tip_span'>[<?php echo L("DEAL_ALLOW_PROMOTE_TIP");?>]</span>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_ALLOW_REFERRAL");?>:</td>
		<td class="item_input">
			<select name="is_referral">
				<option value="0"><?php echo L("ALLOW_REFERRAL_0");?></option>
				<option value="1"><?php echo L("ALLOW_REFERRAL_1");?></option>
			</select>
			<span class='tip_span'>[<?php echo L("DEAL_ALLOW_REFERRAL_TIP");?>]</span>
		</td>
	</tr>
	
	<tr>
		<td class="item_title"><?php echo L("DEAL_CART_TYPE");?>:</td>
		<td class="item_input">
			<select name="cart_type">
				<option value="0"><?php echo L("DEAL_CART_TYPE_0");?></option>
				<option value="1"><?php echo L("DEAL_CART_TYPE_1");?></option>
				<option value="2"><?php echo L("DEAL_CART_TYPE_2");?></option>
				<option value="3"><?php echo L("DEAL_CART_TYPE_3");?></option>
			</select>
		</td>
	</tr>
	
	<!--<tr>
		<td class="item_title"><?php echo L("DEAL_ALLOW_LOTTERY");?>:</td>
		<td class="item_input">
			<select name="is_lottery">
				<option value="0"><?php echo L("LOTTERY_0");?></option>
				<option value="1"><?php echo L("LOTTERY_1");?></option>
			</select>
		</td>
	</tr>-->
	
	<tr id="filter_row">
		<td class="item_title"><?php echo L("FILTER_GROUP");?>:</td>
		<td class="item_input">
			<div id="filter"></div>
		</td>
	</tr>
	
	<tr>
		<td class="item_title"><?php echo L("DEAL_GOODS_TYPE");?>:</td>
		<td class="item_input">
			<select name="deal_goods_type">
			<option value="0">==<?php echo L("NO_SELECT_GOODS_TYPE");?>==</option>
			<?php if(is_array($goods_type_list)): foreach($goods_type_list as $key=>$goods_type_item): ?><option value="<?php echo ($goods_type_item["id"]); ?>"><?php echo ($goods_type_item["name"]); ?></option><?php endforeach; endif; ?>
			</select>
		</td>
	</tr>
	<tr id="deal_attr_row">
		<td class="item_title"><?php echo L("DEAL_GOODS_TYPE_ATTR");?>:</td>
		<td class="item_input">
			<div id="deal_attr"></div>
		</td>
	</tr>
	<tr>
		<td colspan=2 class="bottomTd"></td>
	</tr>
</table>


<table class="form conf_tab" cellpadding=0 cellspacing=0 rel="4">
	<tr>
		<td colspan=2 class="topTd"></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_SEO_TITLE");?>:</td>
		<td class="item_input"><textarea class="textarea" name="seo_title" ></textarea></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_SEO_KEYWORD");?>:</td>
		<td class="item_input"><textarea class="textarea" name="seo_keyword" ></textarea></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("DEAL_SEO_DESCRIPTION");?>:</td>
		<td class="item_input"><textarea class="textarea" name="seo_description" ></textarea></td>
	</tr>
	<tr>
		<td colspan=2 class="bottomTd"></td>
	</tr>
</table>

<div class="blank5"></div>
	<table class="form" cellpadding=0 cellspacing=0>
		<tr>
			<td colspan=2 class="topTd"></td>
		</tr>
		<tr>
			<td class="item_title"></td>
			<td class="item_input">
			<!--隐藏元素-->
			<input type="hidden" name="<?php echo conf("VAR_MODULE");?>" value="Deal" />
			<input type="hidden" name="<?php echo conf("VAR_ACTION");?>" value="insert" />
			<!--隐藏元素-->
			<input type="submit" class="button" value="<?php echo L("ADD");?>" />
			<input type="reset" class="button" value="<?php echo L("RESET");?>" />
			</td>
		</tr>
		<tr>
			<td colspan=2 class="bottomTd"></td>
		</tr>
	</table> 	 
</form>
</div>
</body>
</html>