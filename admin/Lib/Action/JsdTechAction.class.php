<?php

// +----------------------------------------------------------------------
// | Fanwe 方维o2o商业系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云淡风轻(97139915@qq.com)
// +----------------------------------------------------------------------

class JsdTechAction extends CommonAction 
{

    public function __construct() 
    {
        parent::__construct();
        require_once APP_ROOT_PATH . "/system/model/user.php";
    }

    public function index() {
        $group_list = M("ServiceType")->findAll();
        $this->assign("group_list", $group_list);

        //定义条件
        $map[DB_PREFIX . 'user.is_delete'] = 0;
        $map[DB_PREFIX . 'user.service_type_id'] = 2;

        if (intval($_REQUEST['group_id']) > 0) {
            $map[DB_PREFIX . 'user.group_id'] = intval($_REQUEST['group_id']);
        }

        if (strim($_REQUEST['user_name']) != '') {
            $map[DB_PREFIX . 'user.user_name'] = array('eq', strim($_REQUEST['user_name']));
        }
        if (strim($_REQUEST['email']) != '') {
            $map[DB_PREFIX . 'user.email'] = array('eq', strim($_REQUEST['email']));
        }
        if (strim($_REQUEST['mobile']) != '') {
            $map[DB_PREFIX . 'user.mobile'] = array('eq', strim($_REQUEST['mobile']));
        }
        if (strim($_REQUEST['pid_name']) != '') {
            $pid = M("User")->where("user_name='" . strim($_REQUEST['pid_name']) . "'")->getField("id");
            $map[DB_PREFIX . 'user.pid'] = $pid;
        }

        if (method_exists($this, '_filter')) {
            $this->_filter($map);
        }
        $model = D('User');
        if (!empty($model)) {
            $this->_list($model, $map);
        }
        $this->display();
    }
    
    public function add() 
    {
        $service_level_list = M("ServiceLevel")->findAll();
        $this->assign("service_level_list", $service_level_list);
        
        $manager_condition = array(
            'is_effect'=>1,
            'is_delete'=>0,
            'service_type_id'=>3
        );
        $manager_list = M("User")->where($manager_condition)->findAll();
        
        $this->assign("manager_list", $manager_list);
        
        $this->display();
    }
    
    public function insert() 
    {
        B('FilterString');
        $ajax = intval($_REQUEST['ajax']);
        $data = M('User')->create();

        //开始验证有效性
        $this->assign("jumpUrl", u(MODULE_NAME . "/add"));

        if (!check_empty($data['user_pwd'])) {
            $this->error(L("USER_PWD_EMPTY_TIP"));
        }
        if ($data['user_pwd'] != $_REQUEST['user_confirm_pwd']) {
            $this->error(L("USER_PWD_CONFIRM_ERROR"));
        }
        $res = save_user($_REQUEST);
        if ($res['status'] == 0) {
            $error_field = $res['data'];
            if ($error_field['error'] == EMPTY_ERROR) {
                if ($error_field['field_name'] == 'user_name') {
                    $this->error(L("USER_NAME_EMPTY_TIP"));
                } elseif ($error_field['field_name'] == 'email') {
                    $this->error(L("USER_EMAIL_EMPTY_TIP"));
                } else {
                    $this->error(sprintf(L("USER_EMPTY_ERROR"), $error_field['field_show_name']));
                }
            }
            if ($error_field['error'] == FORMAT_ERROR) {
                if ($error_field['field_name'] == 'email') {
                    $this->error(L("USER_EMAIL_FORMAT_TIP"));
                }
                if ($error_field['field_name'] == 'mobile') {
                    $this->error(L("USER_MOBILE_FORMAT_TIP"));
                }
            }

            if ($error_field['error'] == EXIST_ERROR) {
                if ($error_field['field_name'] == 'user_name') {
                    $this->error(L("USER_NAME_EXIST_TIP"));
                }
                if ($error_field['field_name'] == 'email') {
                    $this->error(L("USER_EMAIL_EXIST_TIP"));
                }
            }
        }
        $user_id = intval($res['user_id']);
        foreach ($_REQUEST['auth'] as $k => $v) {
            foreach ($v as $item) {
                $auth_data = array();
                $auth_data['m_name'] = $k;
                $auth_data['a_name'] = $item;
                $auth_data['user_id'] = $user_id;
                M("UserAuth")->add($auth_data);
            }
        }


        foreach ($_REQUEST['cate_id'] as $cate_id) {
            $link_data = array();
            $link_data['user_id'] = $user_id;
            $link_data['cate_id'] = $cate_id;
            M("UserCateLink")->add($link_data);
        }

        // 更新数据
        $log_info = $data['user_name'];
        save_log($log_info . L("INSERT_SUCCESS"), 1);
        $this->success(L("INSERT_SUCCESS"));
    }
    public function edit() 
    {
        $id = intval($_REQUEST ['id']);
        $condition['is_delete'] = 0;
        $condition['id'] = $id;
        $vo = M('User')->where($condition)->find();
        $this->assign('vo', $vo);
        
        $manager_condition = array(
            'is_effect'=>1,
            'is_delete'=>0,
            'service_type_id'=>3
        );
        $manager_list = M("User")->where($manager_condition)->findAll();
        foreach ($manager_list as $key => $value) {
            if($value['id'] == $vo['p_id']){
                $manager_list[$key]['selected'] = 1;
            }
        }
        $this->assign('manager_list', $manager_list);
        
        $service_level_list = M("ServiceLevel")->findAll();
        foreach ($service_level_list as $key => $value) {
            if($value['id'] == $vo['service_level_id']){
                $service_level_list[$key]['selected'] = 1;
            }
        }
        $this->assign('service_level_list', $service_level_list);
        
        $this->display();
    }
    public function update() 
    {
        $data = M('User')->create();
        $log_info = M('User')->where("id=" . intval($data['id']))->getField("user_name");
        //开始验证有效性
        $this->assign("jumpUrl", u(MODULE_NAME . "/edit", array("id" => $data['id'])));
        if (!check_empty($data['user_pwd']) && $data['user_pwd'] != $_REQUEST['user_confirm_pwd']) {
            $this->error(L("USER_PWD_CONFIRM_ERROR"));
        }
        $res = save_user($_REQUEST, 'UPDATE');
        if ($res['status'] == 0) {
            $error_field = $res['data'];
            if ($error_field['error'] == EMPTY_ERROR) {
                if ($error_field['field_name'] == 'user_name') {
                    $this->error(L("USER_NAME_EMPTY_TIP"));
                } elseif ($error_field['field_name'] == 'email') {
                    $this->error(L("USER_EMAIL_EMPTY_TIP"));
                } else {
                    $this->error(sprintf(L("USER_EMPTY_ERROR"), $error_field['field_show_name']));
                }
            }
            if ($error_field['error'] == FORMAT_ERROR) {
                if ($error_field['field_name'] == 'email') {
                    $this->error(L("USER_EMAIL_FORMAT_TIP"));
                }
                if ($error_field['field_name'] == 'mobile') {
                    $this->error(L("USER_MOBILE_FORMAT_TIP"));
                }
            }

            if ($error_field['error'] == EXIST_ERROR) {
                if ($error_field['field_name'] == 'user_name') {
                    $this->error(L("USER_NAME_EXIST_TIP"));
                }
                if ($error_field['field_name'] == 'email') {
                    $this->error(L("USER_EMAIL_EXIST_TIP"));
                }
            }
        }
        //开始更新is_effect状态
        M("User")->where("id=" . intval($_REQUEST['id']))->setField("is_effect", intval($_REQUEST['is_effect']));
        
        save_log($log_info . L("UPDATE_SUCCESS"), 1);
        $this->success(L("UPDATE_SUCCESS"));
    }
    public function export_csv($page = 1) 
    {
        set_time_limit(0);
        $limit = (($page - 1) * intval(app_conf("BATCH_PAGE_SIZE"))) . "," . (intval(app_conf("BATCH_PAGE_SIZE")));

        //定义条件
        $map[DB_PREFIX . 'user.is_delete'] = 0;
        $map[DB_PREFIX . 'user.service_type_id'] = 2;

        if (intval($_REQUEST['group_id']) > 0) {
            $map[DB_PREFIX . 'user.group_id'] = intval($_REQUEST['group_id']);
        }

        if (strim($_REQUEST['user_name']) != '') {
            $map[DB_PREFIX . 'user.user_name'] = array('eq', strim($_REQUEST['user_name']));
        }
        if (strim($_REQUEST['email']) != '') {
            $map[DB_PREFIX . 'user.email'] = array('eq', strim($_REQUEST['email']));
        }
        if (strim($_REQUEST['mobile']) != '') {
            $map[DB_PREFIX . 'user.mobile'] = array('eq', strim($_REQUEST['mobile']));
        }
        if (strim($_REQUEST['pid_name']) != '') {
            $pid = M("User")->where("user_name='" . strim($_REQUEST['pid_name']) . "'")->getField("id");
            $map[DB_PREFIX . 'user.pid'] = $pid;
        }

        $list = M('User')
                        ->where($map)
                        ->join(DB_PREFIX . 'user_group ON ' . DB_PREFIX . 'user.group_id = ' . DB_PREFIX . 'user_group.id')
                        ->field(DB_PREFIX . 'user.*,' . DB_PREFIX . 'user_group.name')
                        ->limit($limit)->findAll();


        if ($list) {
            register_shutdown_function(array(&$this, 'export_csv'), $page + 1);

            $user_value = array('id' => '""', 'user_name' => '""', 'email' => '""', 'mobile' => '""', 'group_id' => '""');
            if ($page == 1)
                $content = iconv("utf-8", "utf-8", "编号,用户名,电子邮箱,手机号,会员组");


            //开始获取扩展字段
            $extend_fields = M("UserField")->order("sort desc")->findAll();
            foreach ($extend_fields as $k => $v) {
                $user_value[$v['field_name']] = '""';
                if ($page == 1)
                    $content = $content . "," . iconv('utf-8', 'utf-8', $v['field_show_name']);
            }
            if ($page == 1)
                $content = $content . "\n";

            foreach ($list as $k => $v) {
                $user_value = array();
                $user_value['id'] = iconv('utf-8', 'utf-8', '"' . $v['id'] . '"');
                $user_value['user_name'] = iconv('utf-8', 'utf-8', '"' . $v['user_name'] . '"');
                $user_value['email'] = iconv('utf-8', 'utf-8', '"' . $v['email'] . '"');
                $user_value['mobile'] = iconv('utf-8', 'utf-8', '"' . $v['mobile'] . '"');
                $user_value['group_id'] = iconv('utf-8', 'utf-8', '"' . $v['name'] . '"');

                //取出扩展字段的值
                $extend_fieldsval = M("UserExtend")->where("user_id=" . $v['id'])->findAll();
                foreach ($extend_fields as $kk => $vv) {
                    foreach ($extend_fieldsval as $kkk => $vvv) {
                        if ($vv['id'] == $vvv['field_id']) {
                            $user_value[$vv['field_name']] = iconv('utf-8', 'utf-8', '"' . $vvv['value'] . '"');
                            break;
                        }
                    }
                }

                $content .= implode(",", $user_value) . "\n";
            }


            header("Content-Disposition: attachment; filename=user_list.csv");
            echo $content;
        } else {
            if ($page == 1)
                $this->error(L("NO_RESULT"));
        }
    }

}

?>