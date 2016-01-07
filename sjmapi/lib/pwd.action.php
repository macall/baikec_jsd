<?php
class pwd{
	public function index()
	{
/*
		$email = strim($GLOBALS['request']['email']);//用户名或邮箱
		if (isset($GLOBALS['request']['old_pwd'])){
			$pwd = strim($GLOBALS['request']['old_pwd']);//密码
		}else{
			$pwd = strim($GLOBALS['request']['pwd']);//密码
		}
	*/	
		
		
		$new_pwd = strim($GLOBALS['request']['newpassword']);//新密码
		$city_name =strim($GLOBALS['request']['city_name']);//城市名称
		//检查用户,用户密码
		$user = $GLOBALS['user_info'];
		$user_id  = intval($user['id']);			
			
		$root = array();
                
//                $region_lv1 = $GLOBALS['db']->getAll("select * from ".DB_PREFIX."delivery_region where pid = 0");  //一级地址
//                foreach($region_lv1 as $k=>$v)
//                {
//                        if($v['id'] == $order_info['region_lv1'])
//                        {
//                                $region_lv1[$k]['selected'] = 1;
//                                break;
//                        }
//                }
                $consignee_list = $GLOBALS['db']->getAll("select * from ".DB_PREFIX."user_consignee where user_id = ".$user_id);

                $region_lv2 = $GLOBALS['db']->getAll("select * from ".DB_PREFIX."delivery_region where pid = 1");  //二级地址
                foreach($region_lv2 as $k=>$v)
                {
                        if($v['id'] == $consignee_list['region_lv2'])
                        {
                                $region_lv2[$k]['selected'] = 1;
                                break;
                        }
                }

                $region_lv3 = $GLOBALS['db']->getAll("select * from ".DB_PREFIX."delivery_region where pid = ".$consignee_list['region_lv2']);  //三级地址
                foreach($region_lv3 as $k=>$v)
                {
                        if($v['id'] == $consignee_list['region_lv3'])
                        {
                                $region_lv3[$k]['selected'] = 1;
                                break;
                        }
                }

                $region_lv4 = $GLOBALS['db']->getAll("select * from ".DB_PREFIX."delivery_region where pid = ".$consignee_list['region_lv3']);  //四级地址
                foreach($region_lv4 as $k=>$v)
                {
                        if($v['id'] == $consignee_list['region_lv4'])
                        {
                                $region_lv4[$k]['selected'] = 1;
                                break;
                        }
                }
                
//                $user_id=intval($GLOBALS['user_info']['id']);
		//输出所有配送方式
		
		foreach($consignee_list as $k=>$v){
			$consignee_list[$k]['del_url']=url('index','uc_consignee#del',array('id'=>$v['id']));
			$consignee_list[$k]['dfurl']=url('index','uc_consignee#set_default',array('id'=>$v['id']));			
			$consignee_list[$k]['region_lv2']  = $GLOBALS['db']->getOne("select name from ".DB_PREFIX."delivery_region where id = ".$v['region_lv2']);
			$consignee_list[$k]['region_lv3']  = $GLOBALS['db']->getOne("select name from ".DB_PREFIX."delivery_region where id = ".$v['region_lv3']);
			$consignee_list[$k]['region_lv4']  = $GLOBALS['db']->getOne("select name from ".DB_PREFIX."delivery_region where id = ".$v['region_lv4']);
		}

		
//		$GLOBALS['tmpl']->assign("consignee_list",$consignee_list);
                
//                $root["region_lv1"] = $region_lv1;
                $root["consignee_list"] = $consignee_list;
                $root["region_lv2"] = $region_lv2;
                $root["region_lv3"] = $region_lv3;
                $root["region_lv4"] = $region_lv4;
//                //地区列表
//                $region_lv2 = $GLOBALS['db']->getAll("select * from ".DB_PREFIX."region_conf where region_level = 2");  //二级地址
//                foreach($region_lv2 as $k=>$v)
//                {
//                    if($v['id'] == intval($this->user['province_id']))
//                    {
//                        $region_lv2[$k]['selected'] = 1;
//                        break;
//                    }
//                }
//                $region_lv3 = $GLOBALS['db']->getAll("select * from ".DB_PREFIX."region_conf where pid = ".intval($user['province_id']));  //三级地址
//                foreach($region_lv3 as $k=>$v)
//                {
//                    if($v['id'] == intval($this->user['city_id']))
//                    {
//                        $region_lv3[$k]['selected'] = 1;
//                        break;
//                    }
//                }
//
//                $root["region_lv2"]=$region_lv2;
//                $root["region_lv3"]=$region_lv3;
                
		$root['page_title']='修改密码';	
		$root['user_name'] = $user['user_name'];
                $root['mobile'] = $user['mobile'];
                $root['user_name'] = $user['user_name'];
                $root['user_name'] = $user['user_name'];
                $root['user_name'] = $user['user_name'];
                $root['user_name'] = $user['user_name'];
                
		$root['city_name']=$city_name;
		if($user_id>0)
		{
			$root['user_login_status'] = 1;	
				
			if (strlen($GLOBALS['request']['newpassword']) < 4){
				$root['return'] = 0;
				$root['info'] = "注册密码不能少于4位";
				
				
				output($root);
			}
			
			$new_pwd = md5($new_pwd);
			$sql = "update ".DB_PREFIX."user set user_pwd = '".$new_pwd."' where id = {$user_id}";
			$GLOBALS['db']->query($sql);
			
			$root['return'] = 1;
			$root['uid'] = $user_id;
			$root['email'] = $user['email'];
			$root['user_name'] = $user['user_name'];
			$root['user_pwd'] = $new_pwd;
			$root['user_avatar'] = get_abs_img_root(get_muser_avatar($user['id'],"big"));
				
			$root['info'] = "密码更新成功!";
	
			
		}
		else
		{
			$root['return'] = 0;
			$root['user_login_status'] = 0;		
			$root['info'] = "原始密码不正确";
		}		
		
		output($root);
	}
}
?>