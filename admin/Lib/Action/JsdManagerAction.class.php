<?php

// +----------------------------------------------------------------------
// | Fanwe 方维o2o商业系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云淡风轻(97139915@qq.com)
// +----------------------------------------------------------------------

class JsdManagerAction extends CommonAction 
{

    public function __construct() 
    {
        parent::__construct();
        require_once APP_ROOT_PATH . "/system/model/user.php";
    }

    public function index()
    {
        $group_list = M("ServiceType")->findAll();
        $this->assign("group_list", $group_list);

        //定义条件
        $map[DB_PREFIX . 'user.is_delete'] = 0;

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
        $map[DB_PREFIX . 'user.is_effect'] = 1;
        $map[DB_PREFIX . 'user.is_delete'] = 0;
        $map[DB_PREFIX . 'user.service_type_id'] = 3;

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
}

?>