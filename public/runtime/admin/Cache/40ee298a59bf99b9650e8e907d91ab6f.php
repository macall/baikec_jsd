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

<script type="text/javascript">
	$(document).ready(function(){
		var u_action="<?php echo ($vo["u_action"]); ?>";		
		load_u_define(u_action);
		$("select[name='u_module']").bind("change",function(){ u_action="";load_u_define(u_action);});		
	});
	function load_u_define(u_action)
	{
		if($("select[name='u_module']").val()=='')
		{
			$("#u_config").hide();
			$("#u_act").hide();
			$("#u_define").show();
		}
		else
		{
			if(u_action==""){
				var module = $("select[name='u_module']").val();
				$.ajax({ 
						url: ROOT+"?"+VAR_MODULE+"=Nav&"+VAR_ACTION+"=load_module&module="+module, 
						data: "ajax=1",
						dataType: "json",
						success: function(obj){
							if(obj.data)
							{
								var html="<select name='u_action'>";
								for(nameo in obj.data)
								{
									html+="<option value='"+nameo+"' ";
									if(obj.info==nameo)
									{
										html+=" selected='selected' ";
									}
									html+=" >"+obj.data[nameo]+"</option>";
								}
								html+="</select>";
								$("#u_act").html(html);
							}
							else
							{
								$("#u_act").html("");
							}
						}
				});
			}

			$("#u_act").show();
			$("#u_define").hide();
			$("#u_config").show();
		}
	}
</script>
<div class="main">
<div class="main_title"><?php echo ($vo["title"]); ?><?php echo L("EDIT");?> <a href="<?php echo u("Article/index");?>" class="back_list"><?php echo L("BACK_LIST");?></a></div>
<div class="blank5"></div>
<form name="edit" action="__APP__" method="post" enctype="multipart/form-data">
<table class="form" cellpadding=0 cellspacing=0>
	<tr>
		<td colspan=2 class="topTd"></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("ARTICLE_TITLE");?>:</td>
		<td class="item_input"><input type="text" class="textbox require" name="title" value="<?php echo ($vo["title"]); ?>" /></td>
	</tr>
	<!-- 
	<tr>
		<td class="item_title">附标题:</td>
		<td class="item_input"><input type="text" class="textbox" name="sub_title" value="<?php echo ($vo["sub_title"]); ?>" /> 
			<span class="tip_span">[仅用于公告的推荐显示]</span>
		</td>
	</tr>
	<tr>
		<td class="item_title">简介:</td>
		<td class="item_input"><textarea class="textarea" name="brief" ><?php echo ($vo["brief"]); ?></textarea></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("URL_UNAME");?>:</td>
		<td class="item_input"><input type="text" class="textbox word-only" name="uname" value="<?php echo ($vo["uname"]); ?>" /> </td>
	</tr>	
	<tr>
		<td class="item_title"><?php echo L("REL_URL");?>:</td>
		<td class="item_input"><input type="text" class="textbox" name="rel_url" value="<?php echo ($vo["rel_url"]); ?>" /></td>
	</tr>
	 -->
	
	<tr>
		<td class="item_title"><?php echo L("NAV_URL");?>:</td>
		<td class="item_input">
			<select name="u_module">
					<option value=""><?php echo L("U_DEFINE");?></option>
					<?php if(is_array($jump_url)): foreach($jump_url as $key=>$nav): ?><option value="<?php echo ($key); ?>" <?php if($key == $vo['u_module']): ?>selected="selected"<?php endif; ?> ><?php echo ($nav["name"]); ?></option><?php endforeach; endif; ?>
			</select>
			<span id="u_act">
					<select name="u_action">					
					<?php if(is_array($jump_url_child)): foreach($jump_url_child as $key=>$nav): ?><option value="<?php echo ($key); ?>" <?php if($key == $vo['u_action']): ?>selected="selected"<?php endif; ?> ><?php echo ($nav); ?></option><?php endforeach; endif; ?>
					</select>				
			</span>
			<span id="u_config">				
				<?php echo L("U_PARAM");?>：<input type="text" class="textbox" name="u_param"  value="<?php echo ($vo["u_param"]); ?> "/>
			</span>
			
			<span id="u_define">
				<input type="text" class="textbox" name="url" value="<?php echo ($vo["url"]); ?>" />
			</span>
		</td>
	</tr>	
	
	<tr>
		<td class="item_title"><?php echo L("SORT");?>:</td>
		<td class="item_input"><input type="text" class="textbox" name="sort" value="<?php echo ($vo["sort"]); ?>" /></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("CATE_TREE");?>:</td>
		<td class="item_input">
		<select name="cate_id" class="require">
			<option value="0">==<?php echo L("NO_SELECT_CATE");?>==</option>
			<?php if(is_array($cate_tree)): foreach($cate_tree as $key=>$cate_item): ?><option value="<?php echo ($cate_item["id"]); ?>" <?php if($vo['cate_id'] == $cate_item['id']): ?>selected="selected"<?php endif; ?>><?php echo ($cate_item["title_show"]); ?></option><?php endforeach; endif; ?>
		</select>
		</td>
	</tr>
	<tr id="notice_page">
		<td class="item_title">公告显示位置:</td>
		<td class="item_input">
		<select name="notice_page">
			<option value="0" <?php if($vo['notice_page'] == 0): ?>selected="selected"<?php endif; ?>>全部</option>
			<option value="1" <?php if($vo['notice_page'] == 1): ?>selected="selected"<?php endif; ?>>首页</option>
			<option value="2" <?php if($vo['notice_page'] == 2): ?>selected="selected"<?php endif; ?>>商城</option>		
		</select>
		
		<span class="tip_span">[仅用于公告的显示]</span>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("IS_EFFECT");?>:</td>
		<td class="item_input">
			<lable><?php echo L("IS_EFFECT_1");?><input type="radio" name="is_effect" value="1" <?php if($vo['is_effect'] == 1): ?>checked="checked"<?php endif; ?> /></lable>
			<lable><?php echo L("IS_EFFECT_0");?><input type="radio" name="is_effect" value="0" <?php if($vo['is_effect'] == 0): ?>checked="checked"<?php endif; ?> /></lable>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("ARTICLE_CONTENT");?>:</td>
		<td class="item_input">
			 <script type='text/javascript'> var eid = 'editor';KE.show({id : eid,skinType: 'tinymce',allowFileManager : true,resizeMode : 0,items : [
							'source','fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
							'plainpaste', 'wordpaste', 'justifyleft', 'justifycenter', 'justifyright',
							'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
							'superscript', 'selectall', '-',
							'title', 'fontname', 'fontsize', 'textcolor', 'bgcolor', 'bold',
							'italic', 'underline', 'strikethrough', 'removeformat', 'image',
							'flash', 'media', 'table', 'hr', 'emoticons', 'link', 'unlink'
						]});</script><div  style='margin-bottom:5px; '><textarea id='editor' name='content' style='width:750px; height:350px;' ><?php echo ($vo["content"]); ?></textarea> </div>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("ARTICLE_SEO_TITLE");?>:</td>
		<td class="item_input"><textarea class="textarea" name="seo_title" ><?php echo ($vo["seo_title"]); ?></textarea></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("ARTICLE_SEO_KEYWORD");?>:</td>
		<td class="item_input"><textarea class="textarea" name="seo_keyword" ><?php echo ($vo["seo_keyword"]); ?></textarea></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("ARTICLE_SEO_DESCRIPTION");?>:</td>
		<td class="item_input"><textarea class="textarea" name="seo_description" ><?php echo ($vo["seo_description"]); ?></textarea></td>
	</tr>
	<tr>
		<td class="item_title"></td>
		<td class="item_input">
			<!--隐藏元素-->
			<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />

			<input type="hidden" name="<?php echo conf("VAR_MODULE");?>" value="Article" />
			<input type="hidden" name="<?php echo conf("VAR_ACTION");?>" value="update" />
			<!--隐藏元素-->
			<input type="submit" class="button" value="<?php echo L("EDIT");?>" />
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