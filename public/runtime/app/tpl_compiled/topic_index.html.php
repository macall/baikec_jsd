<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/topic.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/utils/fanweUI.css";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.pngfix.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.animateToClass.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/login_panel.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/topic.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/topic.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/topic.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/page_js/topic.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/user.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/op.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/op.js";
?>
<?php echo $this->fetch('inc/header.html'); ?>
<script>
	var MANAGE_AJAX_URL = '<?php
echo parse_url_tag("u:index|op#index|"."".""); 
?>';
	var TOPIC_ID = '<?php echo $this->_var['topic']['id']; ?>';
	var IS_FAV = '<?php echo $this->_var['is_fav']; ?>';
</script>
<div class="<?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?>  clearfix">
	<div class="topic_head <?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?> clearfix">
		<div class="blank20"></div>
	</div>
	<div class="topic_main_layout <?php 
$k = array (
  'name' => 'load_wrap',
  't' => $this->_var['wrap_type'],
);
echo $k['name']($k['t']);
?> clearfix">
		<div class="topic_content f_l">
			<div class="topic_main_inner clearfix">
				<div class="album_info clearfix">
					<div class="user_avatar">
						<a href="<?php
echo parse_url_tag("u:index|uc_home#index|"."id=".$this->_var['topic']['user_id']."".""); 
?>">
	                        <?php 
$k = array (
  'name' => 'show_avatar',
  'uid' => $this->_var['topic']['user_id'],
  'type' => 'small',
);
echo $k['name']($k['uid'],$k['type']);
?>
	                        
	                    </a>
	                </div>
					<div class="user_meta">
						<div class="clearfix"><a class="user_name" href="<?php
echo parse_url_tag("u:index|uc_home#index|"."id=".$this->_var['topic']['user_id']."".""); 
?>"><?php echo $this->_var['topic']['user_name']; ?></a></div>
						<a class="uc_home_link" href="<?php
echo parse_url_tag("u:index|uc_home#index|"."id=".$this->_var['topic']['user_id']."".""); 
?>">Ta的个人主页</a>
					</div>
					<?php if ($this->_var['title']): ?>
						<p class="album_desc">
							<i class="icon iconfont">&#xe605;</i>
								<span><?php echo $this->_var['title']; ?></span>
							<i class="icon iconfont">&#xe606;</i>
						</p>
					<?php endif; ?>
					<div class="topic_pub_time yahei"><span><?php 
$k = array (
  'name' => 'to_date',
  'p' => $this->_var['topic']['create_time'],
  'f' => 'Y-m-d',
);
echo $k['name']($k['p'],$k['f']);
?></span></div>
				</div>
				<div class="blank20"></div>
				<div class="item_info clearfix">
					
					<div class="item_action clearfix">
						<a class="i_like_btn <?php if ($this->_var['is_fav']): ?>i_like_btn_liked<?php endif; ?>" href="javascript:void(0);" >
							<ul>
								<li class="like_group"><i class="iconfont icon">&#xe60c;</i>喜欢<em class="topic_fav_<?php echo $this->_var['topic']['id']; ?>"><?php echo $this->_var['topic']['fav_count']; ?></em></li>
								<li class="like_group"><i class="iconfont icon">&#xe60d;</i>喜欢+1</li>
								<li class="liked_group"><i class="iconfont icon">&#xe60d;</i>已喜欢</li>
								<li class="liked_group"><i class="iconfont icon">&#xe60c;</i>取消</li>
							</ul>
						</a>
						<a class="i_relay_topic_btn" href="javascript:void(0);" onclick="relay_topic('<?php echo $this->_var['topic']['id']; ?>');"><i class="iconfont icon">&#xe60b;</i><span>转发</span></a>
						<a class="i_comments_btn" href="#comment_list_box"><i class="iconfont icon">&#xe602;</i><span>评论</span></a>
					</div>
					<div class="item_desc">
						<span>
							<?php echo $this->_var['content']; ?>
						</span>
					</div>
					<div class="blank20"></div>
					<?php if ($this->_var['topic']['images']): ?>
					<div class="item_pic_list">
						<?php $_from = $this->_var['topic']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row_img');if (count($_from)):
    foreach ($_from AS $this->_var['row_img']):
?>
							<div class="pic_item"><a href="<?php echo $this->_var['row_img']['o_path']; ?>" target="_Blank"><img src="<?php 
$k = array (
  'name' => 'get_spec_image',
  'v' => $this->_var['row_img']['o_path'],
  'w' => '875',
  'h' => '0',
);
echo $k['name']($k['v'],$k['w'],$k['h']);
?>" lazy="true" /></a> </div>
							<div class="blank20"></div>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
					<?php endif; ?>
				</div>
				<div class="admin_manager">
					<?php if ($this->_var['topic'] [ 'group_id' ] > 0): ?>
						
							<?php if ($this->_var['user_auth'] [ 'group' ] [ 'setbest' ] [ 0 ] || $this->_var['user_auth'] [ 'group' ] [ 'setbest' ] [ $this->_var['topic'] [ 'group_id' ] ]): ?>
								<a href="javascript:void(0);" onclick="op_group_setbest(<?php echo $this->_var['topic']['id']; ?>);"><i class="iconfont">&#xe62b;</i>推荐</a>
							<?php endif; ?>
							<?php if ($this->_var['user_auth'] [ 'group' ] [ 'settop' ] [ 0 ] || $this->_var['user_auth'] [ 'group' ] [ 'settop' ] [ $this->_var['topic'] [ 'group_id' ] ]): ?>
								<a href="javascript:void(0);" onclick="op_group_settop(<?php echo $this->_var['topic']['id']; ?>);"><i class="iconfont">&#xe62e;</i>置顶</a>
							<?php endif; ?>
							
							<?php if ($this->_var['user_auth'] [ 'topic' ] [ 'del' ]): ?>			
								<a href="javascript:void(0);" onclick="op_topic_del(<?php echo $this->_var['topic']['id']; ?>);"><i class="iconfont">&#xe62f;</i>删除</a>
							<?php elseif ($this->_var['user_auth'] [ 'group' ] [ 'del' ] [ 0 ] || $this->_var['user_auth'] [ 'group' ] [ 'del' ] [ $this->_var['topic'] [ 'group_id' ] ]): ?>
								<a href="javascript:void(0);" onclick="op_group_del(<?php echo $this->_var['topic']['id']; ?>);"><i class="iconfont">&#xe62f;</i>删除</a>										
							<?php endif; ?>							
					<?php else: ?>
						<?php if ($this->_var['user_auth'] [ 'topic' ] [ 'del' ]): ?>
							<a href="javascript:void(0);" onclick="op_group_del(<?php echo $this->_var['topic']['id']; ?>);"><i class="iconfont">&#xe62f;</i>删除</a>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<div class="item_comment">
					<div class="comment_box">
						<div class="c_title">
							<h5>大家都在讨论</h5>
						</div>
						<div class="c_content" id="comment_list_box">
							
						</div>
						
						<div class="blank20"></div>
						<form name="message_form" action="<?php
echo parse_url_tag("u:index|topic#reply|"."".""); 
?>"" method="post">
							<div class="comment_add">
								<div class="c_textarea">
									<textarea name="content" class="comment_txt" resize="none" placeholder="我也插句话..." maxlength="140"></textarea>
								</div>
								<input type="hidden" name="topic_id" value="<?php echo $this->_var['topic']['id']; ?>">
								<input type="hidden" name="reply_id" value="">
								<div class="c_btn"><a class="m_submit_btn" href="javascript:void(0);" >评论</a></div>
							</div>
						</form>
					</div>
				</div>
				<div class="blank20"></div>
			</div>
		</div>
		<div class="topic_side f_r">
			
			<div class="side_corner_box">
				<?php if ($this->_var['topic_group']): ?>
				<div class="side_item group_from clearfix">
					<h5 class="title">来自小组</h5>
					<a class="from_meta group_from_meta clearfix" href="<?php
echo parse_url_tag("u:index|group#forum|"."id=".$this->_var['topic_group']['id']."".""); 
?>">
						<div class="group_item">
							<span class="gp_item_img" href=""><img src="<?php echo $this->_var['topic_group']['icon']; ?>"/></span>
							<div class="gp_info">
								<p class="gp_title"><?php echo $this->_var['topic_group']['name']; ?></p>
								<p class="gp_createtime">创建于：<?php 
$k = array (
  'name' => 'to_date',
  'p' => $this->_var['topic_group']['create_time'],
  'p2' => 'Y-m-d',
);
echo $k['name']($k['p'],$k['p2']);
?></p>
								<p class="go_follow_group"><span>去关注该小组</span></p>
							</div>
						</div>
					</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
</div>
<!--end 推荐团购分类-->


<?php echo $this->fetch('inc/footer.html'); ?>