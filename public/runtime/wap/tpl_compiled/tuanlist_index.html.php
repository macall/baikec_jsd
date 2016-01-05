<?php echo $this->fetch('./inc/header.html'); ?>
<div class="wrap">
				<div class="hide_list">
					  <div class="abbr">
					  	   <div class="first_list">
					  	   	    <ul>
									<?php $_from = $this->_var['data']['bcate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
									<li class="directory"><?php echo $this->_var['cate']['name']; ?></li>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					  	   	    </ul>
					  	   </div>
						   <div class="second_list">
						   	<?php $_from = $this->_var['data']['bcate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cate');if (count($_from)):
    foreach ($_from AS $this->_var['cate']):
?>
						   	    <ul>
						   	    	<?php if ($this->_var['cate']['id'] > 0): ?>
					  	   	    	<li class="two_directory"><a href="<?php echo $this->_var['cate']['url']; ?>" >全部</a></li>
									<?php endif; ?>
									<?php $_from = $this->_var['cate']['bcate_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'blist');if (count($_from)):
    foreach ($_from AS $this->_var['blist']):
?>
									<li class="two_directory"><a href="<?php echo $this->_var['blist']['url']; ?>"><?php echo $this->_var['blist']['name']; ?></a></li>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					  	   	    </ul>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						   </div>
					  </div>
					  <div class="abbr">
					  	   <div class="first_list">
					  	   	    <ul>
					  	   	    	
									<?php $_from = $this->_var['data']['quan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'quan');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['quan']):
?>
									<li class="directory"><?php echo $this->_var['quan']['name']; ?></li>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					  	   	    </ul>
					  	   </div>
						   <div class="second_list">
						   	<?php $_from = $this->_var['data']['quan_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'quan');if (count($_from)):
    foreach ($_from AS $this->_var['quan']):
?>
						   	    <ul>
						   	    	<?php if ($this->_var['quan']['id'] > 0): ?>
					  	   	    	<li class="two_directory"><a href="<?php echo $this->_var['quan']['url']; ?>">全部</a></li>
									<?php endif; ?>
									<?php $_from = $this->_var['quan']['quan_sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'qlist');if (count($_from)):
    foreach ($_from AS $this->_var['qlist']):
?>
									<li class="two_directory"><a href="<?php echo $this->_var['qlist']['url']; ?>"><?php echo $this->_var['qlist']['name']; ?></a></li>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
									
					  	   	    </ul>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						   </div>
					  </div>
					  <div class="abbr">
					  	   <div class="first_list">
					  	   	    <ul>
									<?php $_from = $this->_var['data']['ordertype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'navs');if (count($_from)):
    foreach ($_from AS $this->_var['navs']):
?>
										<li class="directory"><a href="<?php echo $this->_var['navs']['url']; ?>"><?php echo $this->_var['navs']['name']; ?></a></li>
									<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</ul>
					  	   </div>
					  </div>
				</div>
					 <div class="main_list">
					 	   <ul class="mall-cate">
					 	   	   <li>
					 	   	   	    <?php if ($this->_var['request']['catename']): ?><?php echo $this->_var['request']['catename']; ?><?php else: ?>全部分类 <?php endif; ?><i class="fa fa-sort-desc"></i>
					 	   	   </li>
							   <li>
					 	   	   	<?php if ($this->_var['request']['quanname']): ?><?php echo $this->_var['request']['quanname']; ?><?php else: ?>全城 <?php endif; ?><i class="fa fa-sort-desc"></i>
					 	   	   </li>
							   <li>
					 	   	   	  <?php if ($this->_var['request']['order_type'] == price_asc): ?>价格最低
								  <?php elseif ($this->_var['request']['order_type'] == newest): ?>最新发布
								  <?php elseif ($this->_var['request']['order_type'] == buy_count): ?>销量最高
								  <?php elseif ($this->_var['request']['order_type'] == price_desc): ?>价格最高
								  <?php else: ?>默认排序
								  <?php endif; ?>
								  <i class="fa fa-sort-desc"></i>
					 	   	   </li>
					 	   </ul>
					 </div>
				
				<div class="content back-white">
					<div class="list-view bor_none">
						 <ul class="tuan_ul">
						 	<?php $_from = $this->_var['data']['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tuanlist');if (count($_from)):
    foreach ($_from AS $this->_var['tuanlist']):
?>
						 	<li class="tuan_li">
						 	     <a href="<?php
echo parse_wap_url_tag("u:index|goodsdesc#index|"."id=".$this->_var['tuanlist']['id']."".""); 
?>">
						 	     	<div class="list_item">
						 	     		 <div class="pic">
						 	     		 	<img src="<?php echo $this->_var['tuanlist']['icon']; ?>" width="140" height="85">
											<?php if ($this->_var['tuanlist']['auto_order'] == 1): ?><i class="tuan_ico order">免预约</i><?php endif; ?>
						 	     		 </div>
										 <div class="info">
										 	<h2><?php echo $this->_var['tuanlist']['sub_name']; ?></h2>
											<h3> <?php echo $this->_var['tuanlist']['goods_brief']; ?></h3>
											<div class="tuan_price">
						                         <p class="price">
						                         	 <em><?php echo $this->_var['tuanlist']['current_price']; ?><i>元</i></em>
													 <del><?php echo $this->_var['tuanlist']['origin_price']; ?>元</del>
												 </p>
						                         <p class="bought"><i></i>已售<?php echo $this->_var['tuanlist']['buy_count']; ?></p>
						                     </div>
										 </div>
						 	     	</div>
						 	     </a>
						 	</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							
						 </ul>
						 
					</div>
					</div>
<?php echo $this->fetch('./inc/footer.html'); ?> 
