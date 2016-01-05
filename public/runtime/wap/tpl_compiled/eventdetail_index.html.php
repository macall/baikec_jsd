<?php echo $this->fetch('./inc/header.html'); ?> 
<?php
	$this->_var['parse_pagecss'][] = $this->_var['TMPL_REAL']."/css/activity_details.css";
		
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['parse_pagecss'],
);
echo $k['name']($k['v']);
?>" />
<div class="content">
    <div class="activity_d_block back-white">
        <div class="goods_intro">
            <h4><?php echo $this->_var['data']['item']['name']; ?></h4>
            <p>
                <?php echo $this->_var['data']['item']['brief']; ?>
            </p>
        </div>
    </div>
    <?php if ($this->_var['data']['item']['content']): ?>
    <div class="activity_d_block">
        <div class="prompt_block">
            <?php echo $this->_var['data']['item']['content']; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if ($this->_var['data']['item']['event_fields']): ?>
    <div class="activity_d_block">
        <form name="event_submit_form">
            <?php $_from = $this->_var['data']['item']['event_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
            <div class="event_submit_row">
                <div class="tx_select" style="display:-webkit-box;display:-moz-box;display:box; width:100%;">
                    <span style="display:inline-block;"><?php echo $this->_var['field']['field_show_name']; ?></span>： 
                    <?php if ($this->_var['field']['field_type'] == 0): ?>
                    <div style="-webkit-box-flex:1;-moz-box-flex:1;">
                        <input type="text" size="30" name="bm[<?php echo $this->_var['field']['id']; ?>]" class="f-input" value="<?php echo $this->_var['field']['result']; ?>" />
                    </div>
                	<?php else: ?>
                	<select name="bm[<?php echo $this->_var['field']['id']; ?>]" style="border: 1px solid #d5d5d5; color:#575757;height:42px;background:#fff;">
	                    <?php $_from = $this->_var['field']['value_scope']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
	                    <?php if (trim ( $this->_var['val'] ) != ''): ?>
						<option value="<?php echo $this->_var['val']; ?>" <?php if ($this->_var['field']['result'] == $this->_var['val']): ?>selected="selected"<?php endif; ?> ><?php echo $this->_var['val']; ?>  </option>
	                    <?php endif; ?>
	                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
               		</select>
               		<?php endif; ?>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </form>
    </div>
    <?php endif; ?>
</div>
<div class="buttom_block">
    <ul>
        <li class="i_apply">
            <div class="back-main font-main">
                <!--input type="hidden" value="<?php echo $this->_var['data']['item']['id']; ?>" id="event_id">
				<?php if ($this->_var['is_login'] == 1): ?>
				<input type="button" class="btn btn-block2 " value="我要报名" onclick="check(this);">
				<?php else: ?>
				<input type="button" value="登陆后报名" onclick="location.href='<?php
echo parse_wap_url_tag("u:index|login#index|"."".""); 
?>'">
                <?php endif; ?>
				-->
				<input type="hidden" value="<?php echo $this->_var['data']['item']['id']; ?>" id="event_id">
				<?php if ($this->_var['data']['item']['is_submit'] == 1): ?><!--已报名-->
					<?php if ($this->_var['data']['item']['is_verify'] == 0): ?>
						<input type="button" class="btn btn-block2 " value="修改报名" onclick="check(this);">
					<?php elseif ($this->_var['data']['item']['is_verify'] == 1): ?>
						<input type="button" class="btn btn-block2 " style="background:#757575;cursor:not-allowed;" value="已报名" disabled="disabled">
					<?php else: ?>
						<input type="button" class="btn btn-block2 " style="background:#757575;cursor:not-allowed;" value="报名未通过" disabled="disabled">
					<?php endif; ?>
				<?php else: ?>
					<input type="button" value="马上报名" onclick="check(this);">
                <?php endif; ?>
            </div>
        </li>
        <li class="i_comment">
            <div>
                <?php if ($this->_var['is_login'] == 1): ?>
					<input type="button" value="我要评论" onclick="location.href='<?php
echo parse_wap_url_tag("u:index|dp_list#index|"."id=".$this->_var['data']['item']['id']."&type=event".""); 
?>'">
				<?php else: ?>
					<input type="button" value="登陆后评论" onclick="location.href='<?php
echo parse_wap_url_tag("u:index|login#index|"."".""); 
?>'">
                <?php endif; ?>

            </div>
        </li>
    </ul>
</div> 
<?php if ($this->_var['data']['message_list']): ?>
<div class="critical_list">
    <ul>
        <?php $_from = $this->_var['data']['message_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
        <li>
            <div class="pic">
                <img src="<?php echo $this->_var['comment']['user_avatar']; ?>" width="64" height="64">
            </div>
            <div class="txt">
                <div class="name_time">
                    <h5><?php echo $this->_var['comment']['user_name']; ?></h5>
                    <span><?php echo $this->_var['comment']['time']; ?></span>
                </div>
                <p>
                    <?php echo $this->_var['comment']['content']; ?> 
                </p>
            </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?>
<!--div id="light" class="white_content" style="display:none;">
    <div id="deal-terms" class="box-style deal-terms">
        <h2>我要点评</h2>
        <div class="textarea">
            <textarea name="content" id="content">
            </textarea>
        </div>
        <div class="ft-account">
            <input type="hidden" value="<?php echo $this->_var['data']['item']['id']; ?>" id="add">
            <button type="button" onclick ="javascript:event_dp();" class="but_go">
               	 提交
            </button>
            <button class="but_black" type="button" value="取消" onclick="document.getElementById('light').style.display='none';">
               	 取消
            </button>
        </div>
    </div>
</div-->
</div>
</div>
<script type="text/javascript">
function e_field(obj){
	$("#event_submit_form").css("display","none");
	$("input[type=text]").val("");
}
function  check(obj){	
	var  event_id=$("#event_id").val();

	var submit_rows = $(".event_submit_row");
	for(var i=0;i<submit_rows.length;i++)
	{
		var row = $(submit_rows[i]);
		if($(row).find("input").val()=='')
		{
			var info=$(row).find("span").html();  
			alert("请输入你的"+info);
			$(row).find("input").focus();
			return false;;
		}
	}
	
	var from_name=$("form[name='event_submit_form']").serialize();
	
	var post_url = '<?php
echo parse_wap_url_tag("u:index|eventdetail&act_2=bm|"."event_id=".$this->_var['data']['item']['id']."&post_type=json".""); 
?>';  

	 $.ajax({
		 	url:post_url,
			dataType:"json",
			data:from_name,
			type:"POST",
			success:function(data){
				if(data.return==1){
					alert(data.info);
					window.location.href="<?php
echo parse_wap_url_tag("u:index|eventdetail#index|"."event_id=".$this->_var['data']['item']['id']."".""); 
?>";
				}else{
					alert(data.info);
				}
			},error:function(){
				//alert("请求服务器失败");
			}
		});
	return false;
}
	
          
</script>
<?php echo $this->fetch('./inc/footer.html'); ?> 