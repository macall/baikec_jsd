<?php echo $this->fetch('./inc/header.html'); ?>
<link rel="stylesheet" type="text/css" href="./css/font-awesome/css/font-awesome.css"/>
<?php
		$this->_var['parse_pagecss'][] = $this->_var['TMPL_REAL']."/css/indexs_more_index.css";
			
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['parse_pagecss'],
);
echo $k['name']($k['v']);
?>" />
<style>	
/**
 * 自定义的font-face
 */
@font-face {font-family: "diyfont";
  src: url('../public/iconfont/iconfont.eot?@rand'); /* IE9*/
  src: url('../../public/iconfont/iconfont.eot?#iefix&@rand') format('embedded-opentype'), /* IE6-IE8 */
  url('../public/iconfont/iconfont.woff?@rand') format('woff'), /* chrome、firefox */
  url('../public/iconfont/iconfont.ttf?@rand') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url('../public/iconfont/iconfont.svg#iconfont?@rand') format('svg'); /* iOS 4.1- */
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
<div class="main">
<div class="cate_tab">
    <ul class="cf">
    	<?php $_from = $this->_var['data']['indexs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'indexs');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['indexs']):
?>
     
        
        <li >
            <a href="<?php echo $this->_var['indexs']['url']; ?>" style="background-color:<?php echo $this->_var['indexs']['color']; ?>">
            	<i class="diyfont" style="color:#fff"><?php echo $this->_var['indexs']['icon_name']; ?></i>
			</a>
			<span><?php echo $this->_var['indexs']['name']; ?></span>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
</div>
</div
    ></body>
</html>

 
        