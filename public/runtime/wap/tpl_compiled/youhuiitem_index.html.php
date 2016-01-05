<?php echo $this->fetch('./inc/header.html'); ?>
<script type="text/javascript">
	function  check(id){
		var  obj1=$("#add_id").val();
		var query = new Object();
		query.id = id;
		query.post_type = "json";
		var ajaxurl ="<?php
echo parse_wap_url_tag("u:index|fasongduanxin|"."".""); 
?>";
		$.ajax({
			url:ajaxurl,
			data:query,
			type:"post",
			dataType:"json",
			success:function(data){
				alert(data.info);
				window.location.href="<?php
echo parse_wap_url_tag("u:index|youhuiitem#index|"."id=".$this->_var['data']['id']."".""); 
?>";
			}
			,error:function(){
				alert("服务器提交错误");
			}
		});	
		return false;
	}
</script>	
<style type="text/css">
	.hui_detail img{
		width:100%;
	}

</style>
<div class="wrap">
<div class="content">
					
					<div class="goods_abbr">
						<div class="good_detail">
							       <div class="good_pic">
							       	    <a>
							       	    	<img src="<?php echo $this->_var['data']['logo']; ?>" width="100%">
							       	   	</a>
							       </div>
								   <div class="browse_num">
								   	      <ul>
								   	      	<li>
								   	      		<span>浏览次数:</span><b class="font-fc8"><?php echo $this->_var['data']['view_count']; ?></b>
								   	      	</li>
											<li>
								   	      		<span>下载次数:</span><b class="font-fc8"><?php echo $this->_var['data']['down_count']; ?></b>
								   	      	</li>
								   	      </ul>
										 <div class="buy">
										 	<div class="back-main " style="border-radius: 20px;">
										 	<input type="hidden" value="<?php echo $this->_var['youhuilist']['id']; ?>" id="add_id">
										 	<?php if ($this->_var['is_login'] == 1): ?>
												<input type="button" class="plank" value="领取"  onclick="javascript:check('<?php echo $this->_var['data']['id']; ?>');" style=" background:none;"/> 
											<?php else: ?>
												<input type="button" class="plank" value="登陆后领取" onclick="location.href='<?php
echo parse_wap_url_tag("u:index|login#index|"."".""); 
?>'" style=" background:none;"/>
											<?php endif; ?>
											
										</div>	
					                     </div>
										 
										  
								   </div>
						  </div>
						
						 
						 
						 
						 
						 
						
					</div>	
					
					
	<div class="blank8"></div>	
	               		
	<div class="blank8"></div>
					
				<div class="list-view">
						 <div class="evaluate_title">支持门店</div>
						  <?php $_from = $this->_var['data']['list_merchant']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
						 <div class="business_info">
						 	   <div class="business_address">
						 	   	     <h3><?php echo $this->_var['item']['name']; ?></h3>
									 <span><?php echo $this->_var['item']['address']; ?></span>
						 	   </div>
							   <a class="business_phone" href="tel:<?php echo $this->_var['item']['tel']; ?>" style="display:block;">
							   	     <i class="fa fa-phone"></i>
							   </a>
						 </div>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						
					</div>	
					
				<?php if ($this->_var['data']['content']): ?>	
	<div class="blank8"></div>				
					<div class="list-view">
						 <div class="evaluate_title">优惠券详情</div>
						<div class="hui_detail">
							<?php echo $this->_var['data']['content']; ?>
						</div>
						 
						
					</div>
					<?php endif; ?>
					<?php if ($this->_var['data']['use_notice']): ?>
	<div class="blank8"></div>				
					<div class="list-view">
						 <div class="evaluate_title">使用须知</div>
						 <div class="specifier" >
						 <?php echo $this->_var['data']['use_notice']; ?>
						 </div>
						
					</div>
					<?php endif; ?>
   <div class="blank8"></div>
   
                 <div class="list-view">
						 <div class="evaluate_title">评价</div>
						 <div class="assess_list">
						 	<?php if ($this->_var['data']['comment_list']): ?>
						 	  <ul>
						 	  	<?php $_from = $this->_var['data']['comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
						 	  	 <li>
						 	  	 	  <div class="assess_detail">
						 	  	 	  	  <div class="a_d_left">
						 	  	 	  	  	   <span class="s_d_name"><?php echo $this->_var['item']['user_name']; ?></span>
											   
						 	  	 	  	  </div>
						 	  	 	  	  <span class="a_d_right"><?php echo $this->_var['item']['create_time_format']; ?></span>
						 	  	 	  </div>
									  <p>
									  	<?php echo $this->_var['item']['content']; ?>
									  </p>
						 	  	 </li>
								 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								 
						 	  </ul>
							  <?php else: ?>
							  <div style="padding: 10px 0;text-align: center;">暂无评论</div>
							  <?php endif; ?>
						 </div>
						 <div class="see_more">
						 	<a href="<?php
echo parse_wap_url_tag("u:index|dp_list#index|"."id=".$this->_var['data']['id']."&type=youhui".""); 
?>" class="font-fc8">查看全部评价</a>
						 </div>
					</div>
					
				 
				</div>
				</div>
<?php echo $this->fetch('./inc/footer.html'); ?> 