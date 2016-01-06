<?php echo $this->fetch('./inc/header.html'); ?>
<div class="wrap">
	<div class="content">
					
					<div class="goods_abbr">
						  <div class="person_account">
						  	 
							   <div class="account_info">
							   	    <div class="pic">
							   	    	<img src="<?php echo $this->_var['data']['user_avatar']; ?>" width="59" height="59">
							   	    </div>
									<div class="name">
										  <b><?php echo $this->_var['data']['user_name']; ?></b>
										  <p>账户余额:<font class="font-fc8"><?php echo $this->_var['data']['user_money_format']; ?></font>元</p>
									</div>
							   </div>
						  </div>
						  
					</div>	

 <div class="blank8"></div>
	
	          <div class="list-view">
				       <ul class="person_details one">
				       	    <li>
				       	    	<a href="<?php
echo parse_wap_url_tag("u:index|my_order_list#index|"."pay_status=0".""); 
?>">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-tags"></i>
										<span>待付款订单</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li>
							<li>
				       	    	<a href="<?php
echo parse_wap_url_tag("u:index|my_order_list#index|"."pay_status=2".""); 
?>">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-truck"></i>
										<span>已付款订单</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li>
				       </ul>		 
				</div>       
						
   <div class="blank8"></div>
   
                <div class="list-view">
				       <ul class="person_details one">
							<li>
				       	    	<a href="<?php
echo parse_wap_url_tag("u:index|couponlist#index|"."".""); 
?>">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-tag"></i>
										<span>我的团购券</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li>
				       </ul>		 
				</div>						
   <div class="blank8"></div>
   
              <div class="list-view">
				       <ul class="person_details one">
				       	    <li>
				       	    	<a href="<?php
echo parse_wap_url_tag("u:index|user_addr_list#index|"."".""); 
?>">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-map-marker"></i>
										<span>配送地址</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li>
							<!--li>
				       	    	<a href="">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-bullhorn "></i>
										<span>常去地址</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li>
							<li>
				       	    	<a href="">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-bullhorn "></i>
										<span>订阅提醒</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li>
							<li>
				       	    	<a href="">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-volume-down"></i>	
										<span>订阅消息</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li>
							-->
							<li>
		       	    	<a href="<?php
echo parse_wap_url_tag("u:index|collect_list#index|"."".""); 
?>">
		       	    	    <div class="per_li">
		       	    	    	<i class="fa fa-bullhorn "></i>
								<span>收藏</span>
								<i class="fa fa-chevron-right"></i>
		       	    	    </div>
		       	        </a>
					</li>
					<li>
		       	    	<a href="<?php
echo parse_wap_url_tag("u:index|uc_invite#index|"."".""); 
?>">
		       	    	    <div class="per_li">
		       	    	    	<i class="fa fa-volume-down"></i>	
								<span>邀请链接</span>
								<i class="fa fa-chevron-right"></i>
		       	    	    </div>
		       	        </a>
					</li>
				       </ul>		 
				</div>
			   				
   <div class="blank8"></div>
   
                 <div class="list-view">
				       <ul class="person_details one">
				       	    <!--li>
				       	    	<a href="">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-bullhorn "></i>
										<span>新浪微博绑定</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li>
							<li>
				       	    	<a href="">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-bullhorn "></i>
										<span>腾讯微博绑定</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li-->
							<li>
				       	    	<a href="<?php
echo parse_wap_url_tag("u:index|pwd#index|"."".""); 
?>">
				       	    	    <div class="per_li">
				       	    	    	<i class="fa fa-lock"></i>
										<span>修改密码</span>
										<i class="fa fa-chevron-right"></i>
				       	    	    </div>
				       	        </a>
							</li>
				       </ul>		 
				</div>
					<div class="buy ">
						  <a href="<?php
echo parse_wap_url_tag("u:index|login_out#index|"."&post_type=unset".""); 
?>" class="plank">退出当前账号</a>
					</div>
				 
				</div>

</div>
<?php echo $this->fetch('./inc/footer.html'); ?> 