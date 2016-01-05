<?php if (!defined('THINK_PATH')) exit();?>

<?php function get_rel_data($id,$topic)
{
		if($topic['rel_table']=='buycomment')
		{
			//购物分享
			$message_item = M("Message")->getById($topic['rel_id']);
			$name = M($message_item['rel_table'])->where("id=".$message_item['rel_id'])->getField("name");
			$str = "<a href='".u("Message/index", array("id"=>$topic['rel_id']))."' title='".$name."'>[".l("COMMENT_GOODS")."]".msubstr($name,0,20)."</a>";
		}
		else
		$str = l("NO_REL_DATA");
		return $str;
} ?>
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
	function del_img(id,o,tid)
	{
		if(confirm("<?php echo L("CONFIRM_DELETE_IMAGE");?>"))
		{
			$.ajax({ 
				url: ROOT+"?"+VAR_MODULE+"=TopicImage&"+VAR_ACTION+"=delete&id="+id+"&tid="+tid, 
				data: "ajax=1",
				dataType: "json",
				success: function(obj){
					if(obj.status==1)
					{
						$(o).parent().remove();
					}
					else
					{
						alert(obj.data);
					}
				}
			});
		}
	}
	$(document).ready(function(){
		$("select[name='is_recommend']").bind("change",function(){
			toogle_recommend();
		});
		toogle_recommend();
	});
	function modify_title(o)
	{
		$(o).parent().remove();
		$("input[name='title']").show();
	}
	function modify_content(o)
	{
		$(o).parent().remove();
		$("textarea[name='content']").show();
	}
	function toogle_recommend()
	{
		var is_rec = $("select[name='is_recommend']").val();
		if(is_rec==1)
		{
			$("#recommend_daren_page").show();
		}
		else
		{
			$("#recommend_daren_page").hide();
			delimg("daren_page");
		}
	}
</script>
<div class="main">
<div class="main_title"><?php echo L("VIEW");?> <a href="<?php echo u("Topic/index");?>" class="back_list"><?php echo L("BACK_LIST");?></a>

</div>
<div class="blank5"></div>
<form name="edit" action="__APP__" method="post" enctype="multipart/form-data">
<table class="form" cellpadding=0 cellspacing=0>
	<tr>
		<td colspan=2 class="topTd"></td>
	</tr>
	
	<tr>
		<td class="item_title"><?php echo L("TITLE");?>:</td>
		<td>
			<div style="word-break:break-all;"><?php echo ($vo["title"]); ?>[<a href='javascript:;' onclick="modify_title(this);"><?php echo L("MODIFY");?></a>]</div>
			<input type="text" class="text" name="title" value="<?php echo ($vo["title"]); ?>" style="display:none;" />
		</td>
	</tr>	

	<tr>
		<td class="item_title"><?php echo L("CONTENT");?>:</td>
		<td>
			<div style="word-break:break-all;"><?php echo (decode_topic(nl2br($vo["content"]))); ?>[<a href='javascript:;' onclick="modify_content(this);"><?php echo L("MODIFY");?></a>]</div>
			<textarea class="textarea" name="content" style="display:none;" ><?php echo ($vo["content"]); ?></textarea>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("CLICK_COUNT");?>:</td>
		<td><?php echo ($vo["click_count"]); ?></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("TOPIC_TAGS");?>:</td>
		<td> <input type="text" class="textbox" value="<?php echo ($vo["tags"]); ?>" name="tags" /></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("TOPIC_CATE_NAME");?>:</td>
		<td class="item_input">
			<?php if(is_array($cate_list)): foreach($cate_list as $key=>$cate_item): ?><label><input type="checkbox" value="<?php echo ($cate_item["id"]); ?>" name="cate_id[]" <?php if($cate_item['checked'] > 0): ?>checked="checked"<?php endif; ?> /><?php echo ($cate_item["name"]); ?></label><?php endforeach; endif; ?>
		</td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("REPLY_COUNT");?>:</td>
		<td><?php echo ($vo["reply_count"]); ?></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("GOOD_COUNT");?>:</td>
		<td><?php echo ($vo["good_count"]); ?></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("BAD_COUNT");?>:</td>
		<td><?php echo ($vo["bad_count"]); ?></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("REL_DATA");?>:</td>
		<td><?php echo get_rel_data($vo['id'],$vo); ?></td>
	</tr>
	<tr>
		<td class="item_title"><?php echo L("TOPIC_IMG");?>:</td>
		<td>&nbsp;
			<?php if(is_array($image_list)): foreach($image_list as $key=>$image_item): ?><div class="topic_image">
					<span onclick="del_img(<?php echo ($image_item["id"]); ?>,this,<?php echo ($vo["id"]); ?>)">x</span>
					<img src="__ROOT__/<?php echo ($image_item["o_path"]); ?>" width=100 height=100 />
				</div><?php endforeach; endif; ?>
		</td>
	</tr>
	<tr>
		<td class="item_title">推荐:</td>
		<td>
			<select name="is_recommend">
				<option value="0" <?php if($vo['is_recommend'] == 0): ?>selected="selected"<?php endif; ?>>否</option>
				<option value="1" <?php if($vo['is_recommend'] == 1): ?>selected="selected"<?php endif; ?>>是</option>
			</select>
		</td>
	</tr>
	<tr id="recommend_daren_page">
		<td class="item_title">达人秀封面图:</td>
		<td>
			<div style='width:120px; height:40px; margin-left:10px; display:inline-block;  float:left;' class='none_border'><script type='text/javascript'>var eid = 'daren_page';KE.show({id : eid,items : ['upload_image'],skinType: 'tinymce',allowFileManager : true,resizeMode : 0});</script><div style='font-size:0px;'><textarea id='daren_page' name='daren_page' style='width:120px; height:25px;' ><?php echo ($vo["daren_page"]); ?></textarea> </div></div><input type='text' id='focus_daren_page' style='font-size:0px; border:0px; padding:0px; margin:0px; line-height:0px; width:0px; height:0px;' /></div><img src='<?php if($vo["daren_page"] == ''): ?>./admin/Tpl/default/Common/images/no_pic.gif<?php else: ?><?php echo ($vo["daren_page"]); ?><?php endif; ?>' <?php if($vo["daren_page"] != ''): ?>onclick='openimg("daren_page")'<?php endif; ?> style='display:inline-block; float:left; cursor:pointer; margin-left:10px; border:#ccc solid 1px; width:35px; height:35px;' id='img_daren_page' /><img src='/admin/Tpl/default/Common/images/del.gif' style='<?php if($vo["daren_page"] == ''): ?>display:none;<?php else: ?>display:inline-block;<?php endif; ?> margin-left:10px; float:left; border:#ccc solid 1px; width:35px; height:35px; cursor:pointer;' id='img_del_daren_page' onclick='delimg("daren_page")' title='删除' />
		</td>
	</tr>
	<tr>
		<td class="item_title"></td>
		<td class="item_input">
			<!--隐藏元素-->
			<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
			<input type="hidden" name="<?php echo conf("VAR_MODULE");?>" value="Topic" />
			<input type="hidden" name="<?php echo conf("VAR_ACTION");?>" value="update" />
			<!--隐藏元素-->
			<input type="submit" class="button" value="<?php echo L("EDIT");?>" />
		</td>
	</tr>
	<tr>
		<td colspan=2 class="bottomTd"></td>
	</tr>
</table>
<div class="blank5"></div>
</form>

</div>
</body>
</html>