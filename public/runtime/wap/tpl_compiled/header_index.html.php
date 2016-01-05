<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->_var['data']['page_title']; ?></title>
		<!--
        <link rel="stylesheet" type="text/css" href="./css/style.css" charset="utf-8"> 
		<link rel="stylesheet" type="text/css" href="./css/color.css">
		-->
		<link rel="stylesheet" type="text/css" href="./css/font-awesome/css/font-awesome.css"/>
		<script type="text/javascript" src="./js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="./js/index/swipe.js"></script>
        <script type="text/javascript" src="./js/index/onload.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Expires" CONTENT="-1">
        <meta http-equiv="Cache-Control" CONTENT="no-cache">
        <meta http-equiv="Pragma" CONTENT="no-cache">
	<script type="text/javascript">
		var APP_ROOT = '<?php echo $this->_var['APP_ROOT']; ?>';
		var APP_ROOT_ORA = '<?php echo $this->_var['PC_URL']; ?>';
	</script> 
	<?php
		$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";	
		$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/color.css";
	?>      
	<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['pagecss'],
);
echo $k['name']($k['v']);
?>" />     
    </head>
	<body>
	<div class="header">
		<div class="c-hd">
            <section class="cut_city">
	              <a href="<?php
echo parse_wap_url_tag("u:index|index2#index|"."".""); 
?>"><?php if ($this->_var['data']['city_name']): ?><?php echo $this->_var['data']['city_name']; ?><?php else: ?>全国<?php endif; ?><i class="fa fa-angle-down"></i></a>
		    </section>
            <section class="logo_img"><?php echo $this->_var['data']['page_title']; ?></section>
            <section class="h_search">
				 <a href="<?php
echo parse_wap_url_tag("u:index|sea_redcatetype#index|"."".""); 
?>"><i class="fa fa-search"></i></a>
            </section>
         </div>
	</div>
    
    <style>	
/**
 * 自定义的font-face
 */
@font-face {font-family: "diyfont";
  src: url('../../public/iconfont/iconfont.eot?@rand'); /* IE9*/
  src: url('../../public/iconfont/iconfont.eot?#iefix&@rand') format('embedded-opentype'), /* IE6-IE8 */
  url('../../public/iconfont/iconfont.woff?@rand') format('woff'), /* chrome、firefox */
  url('../../public/iconfont/iconfont.ttf?@rand') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url('../../public/iconfont/iconfont.svg#iconfont?@rand') format('svg'); /* iOS 4.1- */
}
.diyfont {
  font-family:"diyfont" !important;
  font-size:20px;
  font-style:normal;
  -webkit-font-smoothing: antialiased;
  -webkit-text-stroke-width: 0.2px;
  -moz-osx-font-smoothing: grayscale;
}
</style>
