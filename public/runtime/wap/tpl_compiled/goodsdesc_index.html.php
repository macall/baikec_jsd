<?php echo $this->fetch('./inc/header.html'); ?>
<div class="wrap">
    <form id="goods-form" action="<?php
echo parse_wap_url_tag("u:index|postcart#index|"."".""); 
?>"  method="post">
        <div class="content">
            <div class="goods_abbr">
                <div class="good_detail">
                    <div class="good_pic">
                        <a><img src="<?php echo $this->_var['data']['image']; ?>" width="100%"></a>
                    </div>
                    <div class="goods_price">
                        <div class="price">
                            <b><span class="j_discount_price" rel="<?php echo $this->_var['data']['cur_price']; ?>"><?php echo $this->_var['data']['cur_price_format']; ?></span></b>
                            <del>
                                <?php echo $this->_var['data']['ori_price_format']; ?>
                            </del>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $this->_var['data']['goods_id']; ?>">
                        <button id="J_post_cart" type="submit" name="Submit" class="plank">
                           	 立即购买
                        </button>
                    </div>
                </div>
                <div class="business_info">
                    <div class="business_address">
                        <h3><?php echo $this->_var['data']['title']; ?></h3>
                        <span><?php echo $this->_var['data']['goods_brief']; ?></span>
                    </div>
                </div>
                <?php if ($this->_var['data']['any_refund'] == 1 || $this->_var['data']['expire_refund'] == 1): ?> 
                <div class="tuikuang">
                    <?php if ($this->_var['data']['any_refund'] == 1): ?>
                    <div class="shuishi">
                        <i class="tui">退</i>
                        <span>支持随时退款</span>
                    </div>
                    <?php endif; ?>
                    <?php if ($this->_var['data']['expire_refund'] == 1): ?>
                    <div class="guoqi">
                        <i class="fa fa-calendar f_l"></i>
                        <span class="f_l">支持过期退款</span>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <div class="barter">
                    <?php if ($this->_var['data']['less_time'] != 'none'): ?>
                    <div class="return color_two">
                        <i class="fa fa-clock-o"></i>
                        <span><?php echo $this->_var['data']['less_time_format']; ?></span>
                    </div>
                    <?php endif; ?>
                    <div class="return color_two">
                        <i class="fa fa-gavel"></i>
                        <span>已售<?php echo $this->_var['data']['buy_count']; ?></span>
                    </div>
                </div>
                <div class="barter">
                    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh">
                    </script>
                    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js">
                    </script>
                    <?php if ($this->_var['is_login'] == 1): ?>
                    <div class="bshare-custom share ">
                        <a class="bshare-more"><i class="fa fa-share-square-o"></i><span>分享</span></a>
                    </div>
                    <div class="share j_share">
                        <a onclick="add_collect(<?php echo $this->_var['data']['goods_id']; ?>,this);"><?php if ($this->_var['data']['is_collect'] == 0): ?><i class="fa fa-star-o"></i><?php else: ?><i class="fa fa-star"></i><?php endif; ?><span>收藏</span></a>
                    </div>
                    <?php endif; ?>
                    <script type="text/javascript">
                        							   	function add_collect(id,obj){
                        									var query = new Object();
                        									query.id = id;
                        									query.post_type = "json";
                        									var ajaxurl ="<?php
echo parse_wap_url_tag("u:index|add_collect|"."".""); 
?>";
                        									$.ajax({
                        										url:ajaxurl,
                        										data:query,
                        										type:"POST",
                        										dataType:"json",
                        										success:function(data){
                        											alert(data.info);
                        											if(data.status==1){
                        												$(".j_share .fa").addClass("fa-star");
                        												$(".j_share .fa").removeClass("fa-star-o");
                        											}else{
                        												$(".j_share .fa").addClass("fa-star-o");
                        												$(".j_share .fa").removeClass("fa-star");
                        											}
                        										}
                        										,error:function(){
                        											//alert("服务器提交错误");
                        										}
                        									});	
                        									return false;
                        								}
                        							   
                    </script>
                </div>
            </div>
            <div class="blank8">
            </div>
            <div class="list-view">
                <div class="evaluate">
                    <div class="grade">
                        <div class="five_star_orange">
                            <i class="fa fa-star orange" style="margin:0px;"></i>
                            <i class="fa fa-star orange" style="margin:0px;"></i>
                            <i class="fa fa-star orange" style="margin:0px;"></i>
                            <i class="fa fa-star orange" style="margin:0px;"></i>
                            <i class="fa fa-star orange" style="margin:0px;"></i>
                            <div class="five_star_grey" style="width:<?php echo $this->_var['data']['width']; ?>px;">
                                <i class="fa fa-star grey" style="margin:0px;"></i>
                                <i class="fa fa-star grey" style="margin:0px;"></i>
                                <i class="fa fa-star grey" style="margin:0px;"></i>
                                <i class="fa fa-star grey" style="margin:0px;"></i>
                                <i class="fa fa-star grey" style="margin:0px;"></i>
                            </div>
                        </div>
                        <b><?php echo $this->_var['data']['point']; ?></b>
                    </div>
                    <a href="<?php
echo parse_wap_url_tag("u:index|tuan_message_list#index|"."tuan_id=".$this->_var['data']['goods_id']."".""); 
?>"  class="evaluate_num"><span><?php if ($this->_var['data']['message_count']): ?><?php echo $this->_var['data']['message_count']; ?><?php else: ?>0<?php endif; ?>人评价</span><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="blank8">
            </div>
            <div class="list-view">
                <div class="evaluate_title">
                    支持门店
                </div>
                <?php $_from = $this->_var['data']['supplier_location_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'supplier_location');$this->_foreach['supplier_location'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['supplier_location']['total'] > 0):
    foreach ($_from AS $this->_var['supplier_location']):
        $this->_foreach['supplier_location']['iteration']++;
?>
                <div class="business_info <?php if ($this->_foreach['supplier_location']['iteration'] > 3): ?>business_display<?php endif; ?>" onclick ="javascript:location.href='<?php
echo parse_wap_url_tag("u:index|merchantitem&|"."id=".$this->_var['supplier_location']['id']."".""); 
?>'">
                    <div class="business_address">
                        <h3><?php echo $this->_var['supplier_location']['name']; ?></h3>
                        <span><?php echo $this->_var['supplier_location']['address']; ?></span>
                        <span><?php echo $this->_var['supplier_location']['tel']; ?></span>
                    </div>
                    <a class="business_phone" href="tel:<?php echo $this->_var['supplier_location']['tel']; ?>" style="display: block;"><i class="fa fa-phone"></i></a>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php if ($this->_foreach['supplier_location']['iteration'] > 3): ?>
                <div class="see_more J_location_more" style="color:#fc8600;border-top:1px solid #f5f5f5;cursor:pointer;">
                    点击下拉查看
                </div>
                <script type="text/javascript">
                    $(".J_location_more").click(function(){
                        $(".business_display").toggleClass("business_blank");
                    });
                </script>
                <?php endif; ?>
            </div>
            <div class="blank8">
            </div>
            <div class="list-view">
                <?php if ($this->_var['data']['attr']['has_attr_1']): ?>
                <div class="evaluate_title">
                    请选择商品属性
                </div>
                <div class="set_meal ">
                    <!--div class="set">
                    <span>颜色:</span>
                    <a class="meal">绿色</a>
                    <a class="meal">红色</a>
                    </div>
                    <div class="set">
                    <span>尺码:</span>
                    <a class="meal">大</a>
                    <a class="meal">小</a>
                    </div--><?php if ($this->_var['data']['attr']['has_attr_1'] == 1): ?>
                    <div class="deal_attr_box set">
                        <span class="deal_attr">请选择<?php echo $this->_var['data']['attr']['attr_title_1']; ?>：</span>
                        <ul class="cf deal_attr_box_a" style="padding: 0;margin: 0;">
                            <?php $_from = $this->_var['data']['attr']['attr_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
?>
                            <li price="<?php echo $this->_var['attr']['attr_price']; ?>" rel="<?php echo $this->_var['attr']['attr_name']; ?>" value="<?php echo $this->_var['attr']['attr_id']; ?>" class="meal">
                                <?php echo $this->_var['attr']['attr_name']; ?>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                        <select name="attr_value[]" style="display:none">
                            <option value="0">请选择<?php echo $this->_var['data']['attr']['attr_title_2']; ?></option>
                            <?php $_from = $this->_var['data']['attr']['attr_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
?><option value="<?php echo $this->_var['attr']['attr_name']; ?>"><?php echo $this->_var['attr']['attr_name']; ?></option>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                        <select name="attr[]" style="display:none">
                            <option value="0">请选择<?php echo $this->_var['data']['attr']['attr_title_1']; ?></option>
                            <?php $_from = $this->_var['data']['attr']['attr_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
?><option value="<?php echo $this->_var['attr']['attr_id']; ?>" rel="<?php echo $this->_var['attr']['attr_name']; ?>" price="<?php echo $this->_var['attr']['attr_price']; ?>"><?php echo $this->_var['attr']['attr_name']; ?></option>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                    </div>
                    <?php endif; ?>
                    <?php if ($this->_var['data']['attr']['has_attr_2'] == 1): ?>
                    <div class="deal_attr_box set">
                        <span class="deal_attr">请选择<?php echo $this->_var['data']['attr']['attr_title_2']; ?>：</span>
                        <ul class="cf deal_attr_box_b" style="padding: 0;margin: 0;">
                            <?php $_from = $this->_var['data']['attr']['attr_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
                            <li price="<?php echo $this->_var['attr']['attr_price']; ?>" rel="<?php echo $this->_var['attr']['attr_name']; ?>" value="<?php echo $this->_var['attr']['attr_id']; ?>" class="meal">
                                <?php echo $this->_var['attr']['attr_name']; ?>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                        <select name="attr_value[]" style="display:none">
                            <option value="0">请选择<?php echo $this->_var['data']['attr']['attr_title_2']; ?></option>
                            <?php $_from = $this->_var['data']['attr']['attr_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
?><option value="<?php echo $this->_var['attr']['attr_name']; ?>"><?php echo $this->_var['attr']['attr_name']; ?></option>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                        <select name="attr[]" style="display:none">
                            <option value="0">请选择<?php echo $this->_var['data']['attr']['attr_title_2']; ?></option>
                            <?php $_from = $this->_var['data']['attr']['attr_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
?><option value="<?php echo $this->_var['attr']['attr_id']; ?>" rel="<?php echo $this->_var['attr']['attr_name']; ?>" price="<?php echo $this->_var['attr']['attr_price']; ?>"><?php echo $this->_var['attr']['attr_name']; ?></option>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                    </div>
                    <?php endif; ?>
                    <script type="text/javascript">
                        							<?php $_from = $this->_var['data']['attr']['attr_1_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
                        							var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['val']; ?>";
                        							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        							$(document).ready(function(){
                        								$(".deal_attr_box ul li").click(function(){
                        									$(this).closest(".deal_attr_box").find("li").removeClass("cur");
                        									$(this).addClass("cur");
                        									var cur_price=$(".j_discount_price").attr("rel");
                        									var price=$(this).attr("price");
                        									var val = $(this).attr("value");
                        									var rel = $(this).attr("rel");
                        									var total = 0;
                        									$(this).parent().parent().find("select[name='attr[]']").val(val);
                        									$(this).parent().parent().find("select[name='attr_value[]']").val(rel);
                        									if($(".deal_attr_box ul li.cur").length!=2){
                        										return false;
                        									}
                        									var number_ext="";
                        									$(".deal_attr_box ul li.cur").each(function(){
                        										total += parseFloat($(this).attr("price"));
                        										number_ext += "_"+$(this).attr("value");
                        									});
                        									var new_price= parseFloat(total) + parseFloat(cur_price) ;
                        									$(".j_discount_price").html(new_price.toFixed(2));
                        									$("#J_left_number").val(eval("attr_limit_num"+number_ext));
                        								});
                        							});
                        						
                    </script>
                </div>
                <?php endif; ?>
                <div class="see_more">
                    <a href="<?php
echo parse_wap_url_tag("u:index|tuaninfo#index|"."goods_id=".$this->_var['data']['goods_id']."".""); 
?>">查看图文详情</a>
                </div>
            </div>
            <div class="blank8">
            </div>
            <div class="list-view">
                <div class="evaluate_title">
                    <div class="grade" style=" position:relative; height:44px;">
                        <h6 style=" position:absolute; font-size:16px; line-height:16px; top:16px;">评价</h6>
                        <div style=" position:absolute;left: 40px;top: 15px; line-height:20px;">
                            <div class="five_star_orange">
                                <i class="fa fa-star orange" style="margin:0px;"></i>
                                <i class="fa fa-star orange" style="margin:0px;"></i>
                                <i class="fa fa-star orange" style="margin:0px;"></i>
                                <i class="fa fa-star orange" style="margin:0px;"></i>
                                <i class="fa fa-star orange" style="margin:0px;"></i>
                                <div class="five_star_grey" style="width:<?php echo $this->_var['data']['width']; ?>px;">
                                    <i class="fa fa-star grey" style="margin:0px;"></i>
                                    <i class="fa fa-star grey" style="margin:0px;"></i>
                                    <i class="fa fa-star grey" style="margin:0px;"></i>
                                    <i class="fa fa-star grey" style="margin:0px;"></i>
                                    <i class="fa fa-star grey" style="margin:0px;"></i>
                                </div>
                            </div>
                        </div>
                        <b style=" position:absolute;left: 150px; top:16px; line-height:20px; "><?php echo $this->_var['data']['point']; ?></b>
                    </div>
                </div>
                <div class="assess_list">
                    <?php $_from = $this->_var['data']['message_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                    <ul>
                        <li>
                            <div class="assess_detail">
                                <div class="a_d_left">
                                    <span class="s_d_name"><?php echo $this->_var['list']['user_name']; ?></span>
                                    <div class="five_star_orange">
                                        <i class="fa fa-star orange" style="margin:0px;"></i>
                                        <i class="fa fa-star orange" style="margin:0px;"></i>
                                        <i class="fa fa-star orange" style="margin:0px;"></i>
                                        <i class="fa fa-star orange" style="margin:0px;"></i>
                                        <i class="fa fa-star orange" style="margin:0px;"></i>
                                        <div class="five_star_grey" style="width:<?php echo $this->_var['list']['width']; ?>px;">
                                            <i class="fa fa-star grey" style="margin:0px;"></i>
                                            <i class="fa fa-star grey" style="margin:0px;"></i>
                                            <i class="fa fa-star grey" style="margin:0px;"></i>
                                            <i class="fa fa-star grey" style="margin:0px;"></i>
                                            <i class="fa fa-star grey" style="margin:0px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="a_d_right"><?php echo $this->_var['list']['create_time_format']; ?></span>
                            </div>
                            <p>
                                <?php echo $this->_var['list']['content']; ?>
                            </p>
                        </li>
                    </ul>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                <div class="see_more">
                    <a href="<?php
echo parse_wap_url_tag("u:index|dp_list#index|"."id=".$this->_var['data']['goods_id']."&type=deal".""); 
?>"  class="evaluate_num"><span>查看全部评价</span></a>
                </div>
            </div>
            <div class="buy">
                <?php if ($this->_var['data']['left_num']): ?><input type="hidden" id="J_left_number" name="left_number" value="<?php echo $this->_var['data']['left_num']; ?>"><?php endif; ?>
                <button id="J_post_cart" type="submit" name="Submit" class="plank">
                  	  立即购买
                </button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    jQuery(function(){
        $("#goods-form").submit(function(){
            var is_attr_err = false;
            if ($("select[name='attr[]']").length > 0) {
                $("select[name='attr[]']").each(function(){
                    if (parseInt($(this).val()) == 0) {
                        is_attr_err = true;
                    }
                });
            }
            if (is_attr_err) {
                alert("请选择商品属性");
                return false;
            }
            var left_number = $("#J_left_number").val();
            if (left_number == 0) {
                alert("库存不足");
                return false;
            }
            
            var ajaxurl = $(this).attr("action");
            var query = $(this).serialize();
            $.ajax({
                url: ajaxurl,
                data: query,
                type: post,
                dataType: "json",
                success: function(ajaxobj){
                    alert();
                },
                error: function(){
                    alert("请求服务器失败");
                }
            });
            return false;
        });
    });
    
</script>
<?php echo $this->fetch('./inc/footer.html'); ?> 