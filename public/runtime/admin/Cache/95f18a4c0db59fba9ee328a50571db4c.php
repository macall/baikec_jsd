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

<script type="text/javascript" src="__TMPL__Common/js/jquery.bgiframe.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/jquery.weebox.js"></script>
<script type="text/javascript" src="__TMPL__Common/js/user.js"></script>
<link rel="stylesheet" type="text/css" href="__TMPL__Common/style/weebox.css" />
<script type="text/javascript">
	function show_content(id)
	{
		$.weeboxs.open(ROOT+'?m=PromoteMsgList&a=show_content&id='+id, {contentType:'ajax',showButton:false,title:LANG['SHOW_CONTENT'],width:800,height:400});
	}
	function send(id)
	{
		$.ajax({ 
				url: ROOT+"?"+VAR_MODULE+"="+MODULE_NAME+"&"+VAR_ACTION+"=send&id="+id, 
				data: "ajax=1",
				success: function(msg){
					alert(msg);
				}
		});
	}
</script>
<div class="main">
<div class="main_title"><?php echo ($main_title); ?></div>
<div class="blank5"></div>
<div class="button_row">
	<input type="button" class="button" value="<?php echo L("FOREVERDEL");?>" onclick="foreverdel();" />
	
	<input type="button" id="reset_sending" class="button" value="<?php echo L("CANCEL_SENDING");?>" onclick="reset_sending('PROMOTE_MSG_LOCK');" />
	
</div>
<div class="blank5"></div>
<div class="search_row">
	<form name="search" action="__APP__" method="get">	
		<?php echo L("SEND_DEST");?>：<input type="text" class="textbox" name="dest" value="<?php echo strim($_REQUEST['dest']);?>" style="width:100px;" />
		<?php echo L("CONTENT");?>：<input type="text" class="textbox" name="content" value="<?php echo strim($_REQUEST['content']);?>" />
		<input type="hidden" value="PromoteMsgList" name="m" />
		<input type="hidden" value="index" name="a" />
		<input type="submit" class="button" value="<?php echo L("SEARCH");?>" />
	</form>
</div>
<div class="blank5"></div>
<!-- Think 系统列表组件开始 -->
<table id="dataTable" class="dataTable" cellpadding=0 cellspacing=0 ><tr><td colspan="12" class="topTd" >&nbsp; </td></tr><tr class="row" ><th width="8"><input type="checkbox" id="check" onclick="CheckAll('dataTable')"></th><th width="50px  "><a href="javascript:sortBy('id','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("ID");?><?php echo ($sortType); ?> "><?php echo L("ID");?><?php if(($order)  ==  "id"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('send_type','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("SEND_TYPE");?>  <?php echo ($sortType); ?> "><?php echo L("SEND_TYPE");?>  <?php if(($order)  ==  "send_type"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('dest','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("SEND_DEST");?>  <?php echo ($sortType); ?> "><?php echo L("SEND_DEST");?>  <?php if(($order)  ==  "dest"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('title','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("TITLE");?>  <?php echo ($sortType); ?> "><?php echo L("TITLE");?>  <?php if(($order)  ==  "title"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('content','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("CONTENT");?>  <?php echo ($sortType); ?> "><?php echo L("CONTENT");?>  <?php if(($order)  ==  "content"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('create_time','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("CREATE_TIME");?>  <?php echo ($sortType); ?> "><?php echo L("CREATE_TIME");?>  <?php if(($order)  ==  "create_time"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('send_time','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("SEND_TIME");?>  <?php echo ($sortType); ?> "><?php echo L("SEND_TIME");?>  <?php if(($order)  ==  "send_time"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('is_send','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("SEND_STATUS");?>  <?php echo ($sortType); ?> "><?php echo L("SEND_STATUS");?>  <?php if(($order)  ==  "is_send"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('is_success','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("SEND_RESULT");?>  <?php echo ($sortType); ?> "><?php echo L("SEND_RESULT");?>  <?php if(($order)  ==  "is_success"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th><a href="javascript:sortBy('result','<?php echo ($sort); ?>','PromoteMsgList','index')" title="按照<?php echo L("SEND_INFO");?><?php echo ($sortType); ?> "><?php echo L("SEND_INFO");?><?php if(($order)  ==  "result"): ?><img src="__TMPL__Common/images/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th >操作</th></tr><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$msg): ++$i;$mod = ($i % 2 )?><tr class="row" ><td><input type="checkbox" name="key" class="key" value="<?php echo ($msg["id"]); ?>"></td><td>&nbsp;<?php echo ($msg["id"]); ?></td><td>&nbsp;<?php echo (get_send_type_msg($msg["send_type"])); ?></td><td>&nbsp;<?php echo ($msg["dest"]); ?></td><td>&nbsp;<?php echo ($msg["title"]); ?></td><td>&nbsp;<?php echo (show_content($msg["content"],$msg['id'])); ?></td><td>&nbsp;<?php echo (to_date($msg["create_time"])); ?></td><td>&nbsp;<?php echo (to_date($msg["send_time"])); ?></td><td>&nbsp;<?php echo (get_is_send($msg["is_send"])); ?></td><td>&nbsp;<?php echo (get_send_result($msg["is_success"])); ?></td><td>&nbsp;<?php echo ($msg["result"]); ?></td><td><a href="javascript:send('<?php echo ($msg["id"]); ?>')"><?php echo L("SEND_NOW");?></a>&nbsp;<a href="javascript:foreverdel('<?php echo ($msg["id"]); ?>')"><?php echo L("FOREVERDEL");?></a>&nbsp;</td></tr><?php endforeach; endif; else: echo "" ;endif; ?><tr><td colspan="12" class="bottomTd"> &nbsp;</td></tr></table>
<!-- Think 系统列表组件结束 -->
 

<div class="blank5"></div>
<div class="page"><?php echo ($page); ?></div>
</div>
</body>
</html>