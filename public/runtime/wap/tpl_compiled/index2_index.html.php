<?php echo $this->fetch('./inc/header.html'); ?> 
<?php
		$this->_var['parse_pagecss'][] = $this->_var['TMPL_REAL']."/css/choose_classify.css";			
?>
<link rel="stylesheet" type="text/css" href="<?php 
$k = array (
  'name' => 'parse_css',
  'v' => $this->_var['parse_pagecss'],
);
echo $k['name']($k['v']);
?>" />

<script src="http://api.map.baidu.com/api?v=1.3" type="text/javascript"></script>
<div class="wrap">
	<div class="content">
		<div id="location-city" class="box" onclick = "javascript:changecity()">		
		        定位城市：<span class="city-name" >定位中...</span>
		</div>
		<?php if ($this->_var['data']['city_list']): ?>
		  <div class="choose_block">
		  	<h3>选择城市</h3>
			<ul class="table">
				<?php $_from = $this->_var['data']['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['city']):
?>
			            <li onclick="cityur(<?php echo $this->_var['city']['id']; ?>,'<?php echo $this->_var['city']['name']; ?>')" id="recently-city" ><?php echo $this->_var['city']['name']; ?></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
			</div>
		<?php endif; ?>		
	</div>
<script type="text/javascript">
	function cityur(obj1,obj2){
		window.location.href='<?php
echo parse_wap_url_tag("u:index|index#index|"."".""); 
?>'+"?city_id="+obj1+"&city_name="+obj2;
	}	
</script>	
 <script type="text/javascript">
 	var m_latitude = 0//纬度
 	var m_longitude = 0;
 	function changecity(){
 		if (m_latitude > 0 || m_longitude > 0){
 			var query = new Object();
 			query.location_city_name = $(".city-name").html();
 			query.latitude = m_latitude;
 			query.longitude = m_longitude;
 			query.post_type = "json";
 			var ajaxurl = '<?php
echo parse_wap_url_tag("u:index|changecity|"."".""); 
?>';
 			$.ajax({
 				url:ajaxurl,
 				data:query,
 				type:"post",
 				dataType:"json",
 				success:function(data){
 					if(data["status"]==1){ 
 						//alert(data.info);
 						window.location.href="<?php
echo parse_wap_url_tag("u:index|index#index|"."".""); 
?>";
 					}else{
 						alert(data.info);
 					}
 				}
 				,error:function(){
 					alert("服务器提交错误");
 				}
 			});	
 		}else{
 			alert($(".city-name").html());
 		}
 	}
 
 
 
    if(navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(function (p) {
        	m_latitude = p.coords.latitude//纬度
        	m_longitude = p.coords.longitude;
            //createmap(latitude, longitude);
			get_area_info(m_latitude, m_longitude);
          
        }, function (e) {//错误信息
            //var aa = e.code + "\n" + e.message;
            //alert(aa);
        	$(".city-name").html('定位失败,请手动选择');
        }
        );
    }
    
	function get_area_info(a,b){
		var gc = new BMap.Geocoder();    
		var point = new BMap.Point(b, a);
		gc.getLocation(point, function(rs){
				var addComp = rs.addressComponents;
				var city_address= addComp.city;
				//alert(addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber);
				city_address = city_address.replace('市','');
				$(".city-name").html(city_address);
				//window.location.href='<?php
echo parse_url_tag("u:index|index#index|"."".""); 
?>'+"?city_name="+city_address;
			}); 
	}
	/*
    function createmap(a,b)
    {
        var map = new BMap.Map("location-city");
        var point = new BMap.Point(b, a);
        map.centerAndZoom(point, 15);//设置地图的中心点和坐标
		map.addControl(new BMap.ZoomControl());
		var marker1 = new BMap.Marker(new BMap.Point(b, a));  //创建标注
		map.addOverlay(marker1);   
        Window.map = map;//将map变量存储在全局
         
    }
    */
</script>				
</div>
<?php echo $this->fetch('./inc/footer.html'); ?> 