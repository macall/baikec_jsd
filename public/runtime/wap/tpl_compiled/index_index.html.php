<?php echo $this->fetch('./inc/header_index.html'); ?>
<script type="text/javascript">
var has_location = <?php echo $this->_var['has_location']; ?>;

	 if(has_location == 0 && navigator.geolocation)
	 {
		 var geolocationOptions={timeout:10000,enableHighAccuracy:true,maximumAge:5000};
		 
		 navigator.geolocation.getCurrentPosition(getPositionSuccess, getPositionError, geolocationOptions);
	}

	function getPositionSuccess(p){  
		has_location = 1;//定位成功; 
	    m_latitude = p.coords.latitude//纬度
	    m_longitude = p.coords.longitude;
		userxypoint(m_latitude, m_longitude);
	}
	 
	function getPositionError(error){  
		switch(error.code){  
		    case error.TIMEOUT:  
		        alert("定位连接超时，请重试");  
		        break;  
		    case error.PERMISSION_DENIED:  
		        alert("您拒绝了使用位置共享服务，查询已取消");  
		        break;  
		    default:
		    	alert("定位失败");		       
		}  
	}	 
	 //将坐标返回到服务端;
	 function userxypoint(latitude,longitude){	 	
			var query = new Object();
			query.latitude = latitude;
			query.longitude = longitude;
			query.post_type = "json";
			var ajaxurl = '<?php
echo parse_url_tag("u:index|userxypoint|"."".""); 
?>';
			$.ajax({
				url:ajaxurl,
				data:query,
				type:"post",
				dataType:"json",
				success:function(data){					
				}
				,error:function(){					
				}
			});		 		
	} 	 
</script>
			<div class="wrap">
			
				
				<?php if ($this->_var['data']['advs']): ?>
	            <div class="top">
	                <div class="flash" id=containerFlashAnimation>
	                    <section>
	                        <div id="banner_box" class="box_swipe" style="visibility: visible;">
	                            <ul style="list-style: none; transition: 500ms; -webkit-transition: 500ms;">
	                                <?php $_from = $this->_var['data']['advs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'adv');if (count($_from)):
    foreach ($_from AS $this->_var['adv']):
?>
	                                <li style="vertical-align: top; width: 640px; display: table-cell;">
	                                    <a href="<?php echo $this->_var['adv']['url']; ?>"><img src="<?php echo $this->_var['adv']['img']; ?>" alt="" border="0" style="width:100%;height:100px;"></a>
	                                </li>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	                            </ul>
	                            <ol>
	                                <?php $_from = $this->_var['data']['advs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'adv');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['adv']):
?>
	                                <li <?php if ($this->_var['key'] == 0): ?>class="on"<?php endif; ?>>
	                                </li>
	                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	                            </ol>
	                        </div>
	                    </section>
	                </div>
	            </div>
				<?php endif; ?>
				<?php if ($this->_var['data']['indexs']): ?>
				<div class="sort_nav">
					  <div class="sort_list">
					  	    <ul>
								<?php $_from = $this->_var['data']['indexs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'indexs');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['indexs']):
?>
								<li class="sort_li" >
					  	    		<a href="<?php echo $this->_var['indexs']['url']; ?>">
					  	    			
                                        <span class="yuan" style="background-color:<?php echo $this->_var['indexs']['color']; ?>" ><i class="diyfont" style="color:#fff"><?php echo $this->_var['indexs']['icon_name']; ?></i></span>
										<span class="txt"><?php echo $this->_var['indexs']['name']; ?></span>
									</a>
					  	    	</li>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					  	    </ul>
					  </div>
				</div>
				<?php endif; ?>
				<?php if ($this->_var['data']['supplier_list']): ?>
				<div class="content">
					<div class="blank8"></div>
					<div class="list-view">
						 <div class="list_title" style="position:relative;"><i class="fa fa-shopping-cart"></i>推荐商家 <a href="<?php
echo parse_url_tag("u:index|merchantlist#index|"."".""); 
?>" style="position:absolute;right:10px;color: #fc8600;top:0px;font-size:12px;line-height:23px;">更多></a></div>
						 <ul class="sp_ul">
						 	<?php $_from = $this->_var['data']['supplier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'supplier_item');$this->_foreach['supplier_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['supplier_item']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['supplier_item']):
        $this->_foreach['supplier_item']['iteration']++;
?>
							<?php if ($this->_foreach['supplier_item']['iteration'] < 4): ?>
						 	<li class="sp_li">
						 	    <a href="<?php
echo parse_wap_url_tag("u:index|merchantitem#index|"."id=".$this->_var['supplier_item']['id']."".""); 
?>">
						 	    	<img src="<?php echo $this->_var['supplier_item']['preview']; ?>" style="width:100%">
									<div class="h"><?php 
$k = array (
  'name' => 'msubstr',
  'v' => $this->_var['supplier_item']['name'],
  'b' => '0',
  'e' => '5',
);
echo $k['name']($k['v'],$k['b'],$k['e']);
?></div>
						 	    </a>
						 	</li>
							<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						 </ul>
					</div>
					<?php endif; ?>
					
			
					
					<div class="blank8"></div>
					<?php if ($this->_var['data']['event_list']): ?>
					<div class="list-view">
						 <div class="list_title" style="margin-bottom:10px;position:relative;"><i class="fa fa-clock-o"></i>推荐活动<a href="<?php
echo parse_url_tag("u:index|eventlist#index|"."".""); 
?>" style="position:absolute;right:10px;color: #fc8600;top:0px;font-size:12px;line-height:23px;">更多></a></div>
						 <ul class="activity_ul">
						 	<?php $_from = $this->_var['data']['event_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'event_item');$this->_foreach['event_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['event_item']['total'] > 0):
    foreach ($_from AS $this->_var['event_item']):
        $this->_foreach['event_item']['iteration']++;
?>
						 	<li class="activity_li">
						 	    <a href="<?php
echo parse_wap_url_tag("u:index|eventdetail#index|"."event_id=".$this->_var['event_item']['id']."".""); 
?>" class="li_box">
						 	    	<img src="<?php echo $this->_var['event_item']['icon']; ?>" width="100%">
									<div class="lucency">剩余时间：<?php echo $this->_var['event_item']['sheng_time_format']; ?></div>
						 	    </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						 </ul>
					</div>
					<?php endif; ?>
					<div class="blank8"></div>
					<?php if ($this->_var['data']['deal_list']): ?>
					<div class="list-view">
						 <div class="list_title"><i class="fa fa-shopping-cart"></i>推荐团购</div>
						 <ul class="tuan_ul">
						 	 <?php $_from = $this->_var['data']['deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'deal_item');$this->_foreach['deal_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['deal_item']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['deal_item']):
        $this->_foreach['deal_item']['iteration']++;
?>
						 	<li class="tuan_li">
						 	     <a href="<?php
echo parse_wap_url_tag("u:index|goodsdesc#index|"."id=".$this->_var['deal_item']['id']."".""); 
?>">
						 	     	<div class="list_item">
						 	     		 <div class="pic">
						 	     		 	<img src="<?php echo $this->_var['deal_item']['img']; ?>" width="140" height="85">
											<?php if ($this->_var['deal_item']['auto_order'] == 1): ?><i class="tuan_ico order">免预约</i><?php endif; ?>
											
						 	     		 </div>
										 <div class="info">
										 	<h2><?php if ($this->_var['deal_item']['sub_name']): ?><?php echo $this->_var['deal_item']['sub_name']; ?><?php else: ?><?php echo $this->_var['deal_item']['name']; ?><?php endif; ?></h2>
											<h3><?php echo $this->_var['deal_item']['brief']; ?></h3>
											<div class="tuan_price">
						                         <p class="price">
						                         	 <em><?php echo $this->_var['deal_item']['current_price']; ?><i>元</i></em>
													 <del><?php echo $this->_var['deal_item']['origin_price']; ?>元</del>
												 </p>
						                         <p class="bought"><i></i>已售<?php echo $this->_var['deal_item']['buy_count']; ?></p>
						                     </div>
										 </div>
						 	     	</div>
						 	     </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							
						 </ul>
						 <div class="see_more">
						 	<a href="<?php
echo parse_wap_url_tag("u:index|tuanlist#index|"."".""); 
?>">查看全部团购</a>
						 </div>
					</div>
					<?php endif; ?>
					<div class="blank8"></div>
					<?php if ($this->_var['data']['supplier_deal_list']): ?>
					<div class="list-view">
						 <div class="list_title"><i class="fa fa-suitcase"></i>推荐商品</div>
						 <ul class="tuan_ul">
						 	 <?php $_from = $this->_var['data']['supplier_deal_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'supplier_deal_item');$this->_foreach['supplier_deal_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['supplier_deal_item']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['supplier_deal_item']):
        $this->_foreach['supplier_deal_item']['iteration']++;
?>
						 	<li class="tuan_li">
						 	     <a href="<?php
echo parse_wap_url_tag("u:index|goodsdesc#index|"."id=".$this->_var['supplier_deal_item']['id']."".""); 
?>">
						 	     	<div class="list_item">
						 	     		 <div class="pic">
						 	     		 	<img src="<?php echo $this->_var['supplier_deal_item']['img']; ?>" width="140" height="85">
											<?php if ($this->_var['supplier_deal_item']['is_hot'] == 1): ?><i class="tuan_ico hot">热</i><?php endif; ?>
						 	     		 </div>
										 <div class="info">
										 	<h2><?php if ($this->_var['supplier_deal_item']['sub_name']): ?><?php echo $this->_var['supplier_deal_item']['sub_name']; ?><?php else: ?><?php echo $this->_var['supplier_deal_item']['name']; ?><?php endif; ?></h2>
											<h3><?php echo $this->_var['supplier_deal_item']['brief']; ?></h3>
											<div class="tuan_price">
						                         <p class="price">
						                         	 <em><?php echo $this->_var['supplier_deal_item']['current_price']; ?><i>元</i></em>
													 <del><?php echo $this->_var['supplier_deal_item']['origin_price']; ?>元</del>
												 </p>
						                         <p class="bought"><i></i>已售<?php echo $this->_var['supplier_deal_item']['buy_count']; ?></p>
						                     </div>
										 </div>
						 	     	</div>
						 	     </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							
						 </ul>
						 <div class="see_more">
						 	<a href="<?php
echo parse_wap_url_tag("u:index|goodslist#index|"."".""); 
?>">查看全部商品</a>
						 </div>
					</div>
					<?php endif; ?>
      <div class="blank8"></div>
	                   
					<?php if ($this->_var['data']['youhui_list']): ?>   
					<div class="list-view">
						 <div class="list_title"><i class="fa fa-money"></i>推荐优惠券</div>
						 <ul class="youhui_ul">
						 	<?php $_from = $this->_var['data']['youhui_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'youhui_item');$this->_foreach['youhui_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['youhui_item']['total'] > 0):
    foreach ($_from AS $this->_var['youhui_item']):
        $this->_foreach['youhui_item']['iteration']++;
?>
						 	<li class="tuan_li">
						 	     <a href="<?php
echo parse_wap_url_tag("u:index|youhuiitem#index|"."id=".$this->_var['youhui_item']['id']."".""); 
?>">
						 	     	<div class="list_item">
						 	     		 <div class="pic">
						 	     		 	<img src="<?php echo $this->_var['youhui_item']['image_1']; ?>" width="140" height="85">
										</div>
										 <div class="info">
										 	<h2><?php echo $this->_var['youhui_item']['title']; ?></h2>
											<h3><?php echo $this->_var['youhui_item']['content']; ?></h3>
											<div class="tuan_price">
						                         <?php if ($this->_var['youhui_item']['api_address']): ?><p>地址：<?php echo $this->_var['youhui_item']['api_address']; ?></p><?php endif; ?>
												 <p>发布时间：<?php echo $this->_var['youhui_item']['begin_time']; ?></p>
						                     </div>
										 </div>
						 	     	</div>
						 	     </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</ul>
						 <div class="see_more">
						 	<a href="<?php
echo parse_wap_url_tag("u:index|youhuilist#index|"."".""); 
?>">查看全部优惠券</a>
						 </div>
					</div>
					<?php endif; ?>
  					<div class="blank8"></div>
   					<?php if ($this->_var['data']['shop_cate_list']): ?>
                 	<div class="list-view">
						 <div class="list_title"><i class="fa fa-shopping-cart"></i>推荐商城</div>
						 <ul class="ecshop_ul">
						 	 <?php $_from = $this->_var['data']['shop_cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shop_cate');$this->_foreach['shop_item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['shop_item']['total'] > 0):
    foreach ($_from AS $this->_var['shop_cate']):
        $this->_foreach['shop_item']['iteration']++;
?>
						 	<li class="ecshop_li">
						 	     <a href="<?php
echo parse_wap_url_tag("u:index|goodslist#index|"."catalog_id=".$this->_var['shop_cate']['id']."&&catename=".$this->_var['shop_cate']['name']."".""); 
?>">
						 	     	<img src="<?php echo $this->_var['shop_cate']['cate_img']; ?>" width="100%">
						 	     </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</ul>
						 
					</div>
					<?php endif; ?>
				 
				</div>
</div>						
<?php echo $this->fetch('./inc/footer_index.html'); ?>				
			