<?php echo $this->fetch('./inc/header.html'); ?>
<?php
		$this->_var['parse_pagecss'][] = $this->_var['TMPL_REAL']."/css/cart_index.css";				
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['parse_pagecss'],
);
echo $k['name']($k['v']);
?>" />
	
    <div class="body bg-common">
        <form id="buy-form" action="<?php
echo parse_wap_url_tag("u:index|calc_cart|"."".""); 
?>" method="POST" style="margin-bottom:0px">
            <?php $_from = $this->_var['data']['postcart_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cart_item');if (count($_from)):
    foreach ($_from AS $this->_var['cart_item']):
?>

            <div class="back-white">
			<div class="item-common">
				    
                    <div class="word">
	                    <span class="item-content" >
	                    	<a href="<?php
echo parse_wap_url_tag("u:index|postcart#index|"."id=".$this->_var['cart_item']['id']."&post_type=del".""); 
?>"> <?php echo $this->_var['cart_item']['name']; ?></a>
						</span>
                    </div>
                </div>
				
                <div class="item-common">
                    <span class="item-label">单价：</span>
                    <span class="item-content" ><?php echo $this->_var['cart_item']['current_price_format']; ?></span>
                </div>
                <div>
                    <div class="item-common">
                        <span class="item-label">数量：</span>
                        <span class="item-content quantity-box count_box">
                        	<a class="btn-mini minus min_btn  min_btn_<?php echo $this->_var['cart_item']['id']; ?>" id="min_btn" onclick="min_btn(<?php echo $this->_var['cart_item']['current_price']; ?>,'<?php echo $this->_var['cart_item']['id']; ?>',this);" action="<?php
echo parse_wap_url_tag("u:index|postcart#index|"."id=".$this->_var['cart_item']['id']."&post_type=modify".""); 
?>">
                        		<span>I</span>
							</a>
					
							<input id="buy_number" name="num[<?php echo $this->_var['cart_item']['id']; ?>]" class="input-amount buy_number_<?php echo $this->_var['cart_item']['id']; ?> buy_number" type="text" value="<?php echo $this->_var['cart_item']['number']; ?>"  <?php if ($this->_var['cart_item']['max_bought'] > 0): ?>max="<?php echo $this->_var['cart_item']['stock']; ?>"<?php endif; ?>>
							<a class="btn-mini plus add_btn  add_btn_<?php echo $this->_var['cart_item']['id']; ?>" id="add_btn" onclick="add_btn(<?php echo $this->_var['cart_item']['current_price']; ?>,'<?php echo $this->_var['cart_item']['id']; ?>',this);" action="<?php
echo parse_wap_url_tag("u:index|postcart#index|"."id=".$this->_var['cart_item']['id']."&post_type=modify".""); 
?>">
								<span>✚</span>
							</a>
						</span>
                    </div>
                </div>
                <div class="item-common over" style="border:none;">
				<div class="total_money f_l">
                    <span class="item-label">总价：</span>
                    <span class="item-content amount" id="amount"><span id="J_total_price_<?php echo $this->_var['cart_item']['id']; ?>" ><?php echo $this->_var['cart_item']['total_price']; ?></span>元<span class="J_campaign-value"></span></span>
                 </div>
				  <div class="delete_but f_r">
                    	<div class="buy">
                    		<a href="<?php
echo parse_wap_url_tag("u:index|postcart#index|"."id=".$this->_var['cart_item']['id']."&post_type=del".""); 
?>" class="plank"> 删除</a>
						</div>
                    </div>
				</div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
             <script type="text/javascript">
                 //计算购买数量 总价
				 $(document).ready(function(){
				 	$(".count_box").each(function(){
						var number=$(this).find(".buy_number").val();
						var max=$(this).find(".buy_number").attr("max");
						if(max>0){
							if(number >= 1 && number < max){
								$(this).find(".add_btn").addClass("active_two");
							}
							if (number = max) {
	                           $(this).find(".add_btn").removeClass("active_two");
							    var number=max;
							   $(this).find(".buy_number").val(number);
	                        }
						}else{
							
							$(this).find(".add_btn").addClass("active_two");
						}
						
						if(number > 1 ){
							$(this).find(".min_btn").addClass("active_two");
						}
						if (number <= 1) {
                           $(this).find(".min_btn").removeClass("active_two");
						   var number=1;
						   $(this).find(".buy_number").val(number);
                        }
					});
				 });
            	function add_btn(price,id,obj){
					buy_number = $(".buy_number_"+id).val();
                 	var max=$(".buy_number_"+id).attr("max");
                    var buy_number = Number(buy_number) + 1;
					if(max>0){
						if (buy_number = max) {
                           $(obj).removeClass("active_two");
						   var buy_number = max;
                        }
						if(buy_number >= 1 && buy_number < max){
							$(obj).addClass("active_two");
						}
					}else{
						$(obj).addClass("active_two");
					}
                   
                    if (buy_number > 1) {
                        $(".min_btn_"+id).addClass("active_two");
                    }
					
        		   var url=$(obj).attr("action");
                   $.getJSON(url+"&number="+buy_number,function(obj){
        			 });
					$(".buy_number_"+id).val(buy_number);
					var total_price=buy_number*price;
					$("#J_total_price_"+id).html(total_price);
				
                }
                function min_btn(price,id,obj){
					buy_number =  $(".buy_number_"+id).val();
                    var max=$(".buy_number_"+id).attr("max");
                    var buy_number = Number(buy_number) - 1;
              		if (buy_number > 1) {
                        $(obj).addClass("active_two");
                    }
				    if (buy_number <= 1) {
                       $(obj).removeClass("active_two");
					    var buy_number =1;
                    }
					
					
        			var url=$(obj).attr("action");
                    $.getJSON(url+"&number="+buy_number,function(obj){
        				
        			 });
					 $(".buy_number_"+id).val(buy_number);
					 var total_price=buy_number*price;
					
					$("#J_total_price_"+id).html(total_price);
                }
					
				function do_code_change(){
						var mobile=$("#mobile").val();
						var code=$("#code").val();
						if(!mobile){
							return false;	
						}
						if(!code){
							$(".mj-submit").attr("disabled","disabled");
							$(".mj-submit").addClass("btn-disabled");
							return false;	
						}
						$(".mj-submit").removeAttr("disabled");
						$(".mj-submit").removeClass("btn-disabled");
				}
				var left_time_act = null;
				var left_time = 0;
				function setTab(name,cursel,n){
					 for(i=1;i<=n;i++){
					  var menu=document.getElementById(name+i);
					  var con=document.getElementById("con_"+name+"_"+i);
					  menu.className=i==cursel?"hover":"";
					  con.style.display=i==cursel?"block":"none";
					 }
				}
				function left_time_func(){
					clearTimeout(left_time_act);
					if(left_time > 0){
						$("#btn_send").val(left_time + "秒后重新发送" );
						$("#btn_send").addClass("dis");
						$("#btn_send").css({"color":"#999","border":"1px solid #999"});
						left_time --;
						left_time_act = setTimeout(left_time_func,1000);
					}
					else{
						$("#btn_send").css({"color":"#fc8600","border":"1px solid #fc8600"});
						$("#btn_send").removeClass("dis");
						$("#btn_send").val("重新发送" );
					}
				}
				function  do_send(){
				
					var mobile=$("#mobile").val();	
					if(!mobile){
						alert("请填写手机号码");
						return false;	
					}
					
					//alert(mobile.length);
					if(mobile.length != 11){
						alert("请填写正确的手机号码");
						return false;	
					}
					
					//http://o2o.fanwe.net/sjmapi/index.php?act=register_verify_phone&mobile=13559110609&is_login=1&r_type=2
					var query = new Object();
					query.mobile = mobile;
					query.is_login = 1;
					//query.r_type = 1;
					query.post_type = "json";
					var ajaxurl = '<?php
echo parse_wap_url_tag("u:index|register_verify_phone|"."".""); 
?>';
					//alert(ajaxurl);
					
					$.ajax({
						url:ajaxurl,
						data:query,
						type:"Post",
						dataType:"json",
						success:function(data){
							if(data.status == 1){
								left_time = 60;
								left_time_func();
								//location.replace(document.referrer);
								//window.location.href = "<?php
echo parse_url_tag("u:index|index#index|"."".""); 
?>";
							}else{
								alert(data.info);
							}
						}
						,error:function(){
							alert("服务器提交错误");
						}
					});
					
				}
            </script>
			<?php if ($this->_var['is_login'] != 1): ?>
			<div id="con_one_2" class="no_login">
				<h4 class="h">免登录直接购买</h4>
				<div class="inputtxt2">
					<div  style="box-shadow: 3px 3px 5px #ccc inset;line-height: 45px;height: 45px;width: 55%;background: #f5f5f5;border: 1px solid #ccc;border-radius: 4px;text-align: center;float: left;color: #c0c0c0;font-size: 15px;padding-left:10px;">
						<input type="text" class="phone"  id = "mobile" name="mobile" placeholder="请输入手机号"  style=" width:100%; background:none;box-shadow:none; border:none; float:none;">
					</div>
				
				
				<div style="float: right;height: 45px;width: 35%;border: 1px solid #fc8600;border-radius: 4px;color: #fc8600;text-align: center;font-size: 15px;">
				    <input class="btn_phone" type="Button"  id = "btn_send"  onclick="do_send()" value="发送验证码" >
				</div>
	
				<div class="blank"></div>
				</div>
				<div class="inputtxt"> 
				<div class="input_sr" style=" margin-left:10px;">
					<input class="testing" type="text" name="code" id = "code" onkeydown="do_code_change()" onkeyup="do_code_change()"  placeholder="请输入手机短信中的验证码" style=" text-align: center;box-shadow: none;" >
				
					</div>	 
				</div>
		   </div>
		   <div class="blank"></div>
		   <?php endif; ?>
		   <?php if ($this->_var['data']['order_has_bind_mobile'] == 1 && $this->_var['data']['is_binding'] == 0 && $this->_var['is_login'] == 1): ?>
		   <div style=" background: #fff; margin: 10px 0; border-top: 1px solid #f5f5f5; border-bottom: 1px solid #f5f5f5; ">
		   		<a href="<?php
echo parse_wap_url_tag("u:index|binding_mobile|"."".""); 
?>" style=" display: block; width: 100%; padding: 10px 0; text-align: center; box-sizing: border-box; cursor: pointer; ">绑定手机号码</a>
			</div>
		   <?php endif; ?>
		   <div class="buy">
				<?php if ($this->_var['ref_uid']): ?><input type="hidden" name="ref_uid" id="ref_uid" value="<?php echo $this->_var['ref_uid']; ?>"><?php endif; ?>
                <button type="submit" class="plank  mj-submit <?php if ($this->_var['is_login'] != 1): ?>btn-disabled<?php endif; ?>" id="J_btn_submit" <?php if ($this->_var['is_login'] != 1): ?>disabled="disabled"<?php endif; ?>>
                    	去结算
                </button>
            </div>
		</form>
    </div>
	
     <?php echo $this->fetch('./inc/footer.html'); ?> 