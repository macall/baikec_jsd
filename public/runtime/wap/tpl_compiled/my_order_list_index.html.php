<?php echo $this->fetch('./inc/header.html'); ?>	
<?php
		$this->_var['parse_pagecss'][] = $this->_var['TMPL_REAL']."/css/youhui_comment_list.css";	
		$this->_var['parse_pagecss'][] = $this->_var['TMPL_REAL']."/css/my_order_list.css";
			
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['parse_pagecss'],
);
echo $k['name']($k['v']);
?>" />
		<?php if ($this->_var['request']['pay_status'] == 2): ?>
		<div>
			<?php $_from = $this->_var['data']['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'my_order_list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['my_order_list']):
?>
					
					<div class="collection-list back-white" onclick = 'javascript:location.href="<?php
echo parse_url_tag("u:index|my_order_detail#index|"."id=".$this->_var['my_order_list']['id']."".""); 
?>"' >
							<div class="bianma">
								<ul>
									<li class="first font-fc8">订单编号：<?php echo $this->_var['my_order_list']['sn']; ?></li>
									<li><span>订单总价：<?php echo $this->_var['my_order_list']['total_money_format']; ?></span><span class="third">共<?php echo $this->_var['my_order_list']['num']; ?>件商品</span></li>
									
								</ul>
							</div>
							<?php $_from = $this->_var['my_order_list']['orderGoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'my_order_list_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['my_order_list_item']):
?>
						        <div class="collection">
						            <a href="#" class="dl">
						                <img src="<?php echo $this->_var['my_order_list_item']['image']; ?>"  width="122" height="74" alt="图片载入中…">
						                <ul style="text-align: left;">
						                    <li class="dl-brand break-word"  style="margin-top:0px;font-size: 14px; line-height:20px;"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['my_order_list_item']['name'],
  'b' => '0',
  'e' => '28',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></li>
						                    <li class="dl-title break-word">数量：<?php echo $this->_var['my_order_list_item']['num']; ?></li>
						                    <li class="dl-price">
						                      		   单价：<span class="font-fc8"><?php echo $this->_var['my_order_list_item']['price_format']; ?></span>
						                             
						                    </li>
											<li class="dl-price">
						                      		小计：<span class="font-fc8"><?php echo $this->_var['my_order_list_item']['total_money_format']; ?></span>
						                    </li>
						                </ul>
						            </a>
						        </div>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							<div class="dingdan">
								<ul>
									<li>订单状态：<?php echo $this->_var['my_order_list']['status']; ?></li>
									<li>下单时间：<?php echo $this->_var['my_order_list']['create_time_format']; ?></li>
									<li>订单详情</li>
								</ul>
							</div>
					</div>
					
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
		<?php endif; ?>
		
		<?php if ($this->_var['request']['pay_status'] == 0): ?>
		<div class="back-white">
			<?php $_from = $this->_var['data']['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'my_order_list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['my_order_list']):
?>
					<div class="collection-list" onclick = 'javascript:location.href="<?php
echo parse_url_tag("u:index|my_order_detail#index|"."id=".$this->_var['my_order_list']['id']."".""); 
?>"'>
							<div class="bianma">
								<ul>
									<li>订单编号：<?php echo $this->_var['my_order_list']['sn']; ?></li>
									<li><span>订单总价：<?php echo $this->_var['my_order_list']['total_money_format']; ?></span><span class="third">共<?php echo $this->_var['my_order_list']['num']; ?>件商品</span></li>
									
								</ul>
							</div>
							<?php $_from = $this->_var['my_order_list']['orderGoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'my_order_list_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['my_order_list_item']):
?>
						        <div class="collection">
						            <a href="#" class="dl">
						                <img src="<?php echo $this->_var['my_order_list_item']['image']; ?>"  width="122" height="74" alt="图片载入中…">
						                <ul>
						                    <li class="dl-brand break-word"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['my_order_list_item']['name'],
  'b' => '0',
  'e' => '28',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></li>
						                    <li class="dl-title break-word">数量：<?php echo $this->_var['my_order_list_item']['num']; ?></li>
						                    <li class="dl-price">
						                      	  单价：<span><?php echo $this->_var['my_order_list_item']['price_format']; ?></span>&nbsp;&nbsp;
						                                                                            小计：<span><?php echo $this->_var['my_order_list_item']['total_money_format']; ?></span>
						                    </li>
						                </ul>
						            </a>
						        </div>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							
							<div class="dingdan">
								<ul>
									<li>订单状态：<?php echo $this->_var['my_order_list']['status']; ?></li>
									<li>下单时间：<?php echo $this->_var['my_order_list']['create_time_format']; ?></li>
									<li>订单详情</li>
								</ul>
							</div>
					</div>
					
					<div class="blank"></div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>	
		<?php endif; ?>
		
<?php echo $this->fetch('./inc/footer.html'); ?> 



