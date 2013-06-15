<?php
/**
 * The user module zh-cn file of XiRangBPS.
 *
 * @copyright   Copyright 2012-2013 QingDao XiRang Network Infomation Co,LTD (www.xirang.biz)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     user
 * @version     $Id: zh-cn.php 824 2010-05-02 15:32:06Z wwccss $
 * @link        http://www.xirang.biz
 */
$lang->user->common        = '用户';
$lang->user->view          = "用户详情";
$lang->user->create        = "添加用户";
$lang->user->edit          = "编辑用户";
$lang->user->update        = "编辑用户";
$lang->user->delete        = "删除用户";
$lang->user->browse        = "浏览用户";
$lang->user->deny          = "访问受限";
$lang->user->confirmDelete   = "您确认删除该用户吗？";
$lang->user->confirmActivate = "您确认激活该用户吗？";
$lang->user->relogin         = "重新登录";
$lang->user->asGuest         = "游客访问";
$lang->user->goback          = "返回前一页";
$lang->user->allUsers        = '全部用户';
$lang->user->modifyPassword  = "更改密码";
$lang->user->submit          = "提交";

$lang->user->profile     = '个人资料';
$lang->user->editProfile = '修改资料';
$lang->user->thread      = '我的主题';
$lang->user->reply       = '我的回复';
$lang->user->message     = '我的消息';

$lang->user->inputUserName = '请输入用户名';
$lang->user->inputPassword = '请输入密码';
$lang->user->searchUser    = '搜索';

$lang->user->errorDeny     = "抱歉，您无权访问『<b>%s</b>』模块的『<b>%s</b>』功能。请联系管理员获取权限。点击后退返回上页。";
$lang->user->loginFailed   = "登录失败，请检查您的用户名或密码是否填写正确。";
$lang->user->lblZenTaoID   = '提示：可以用禅道社区帐号登录';
$lang->user->lblRegistered = '恭喜您，已经成功注册。';

$lang->user->forbidUser          = '禁用管理';
$lang->user->forbid              = '禁用';
$lang->user->forbidoneday        = '一天';
$lang->user->forbidtwodays       = '两天';
$lang->user->forbidthreedays     = '三天';
$lang->user->forbidoneweek       = '一周';
$lang->user->forbidonemonth      = '一个月';
$lang->user->forbidforever       = '永久';
$lang->user->operate             = '操作';

$lang->user->gendarList = new stdclass();
$lang->user->gendarList->m = '男';
$lang->user->gendarList->f = '女';

$lang->user->id        = '用户编号';
$lang->user->account   = '用户名';
$lang->user->password  = '密码';
$lang->user->password2 = '请重复密码';
$lang->user->realname  = '真实姓名';
$lang->user->nickname  = '昵称';
$lang->user->avatar    = '头像';
$lang->user->birthyear = '出生年';
$lang->user->birthday  = '出生月日';
$lang->user->gendar    = '性别';
$lang->user->email     = '邮箱';
$lang->user->msn       = 'MSN';
$lang->user->qq        = 'QQ';
$lang->user->yahoo     = '雅虎通';
$lang->user->gtalk     = 'GTalk';
$lang->user->wangwang  = '旺旺';
$lang->user->mobile    = '手机';
$lang->user->phone     = '电话';
$lang->user->company   = '公司/组织';
$lang->user->address   = '通讯地址';
$lang->user->zipcode   = '邮编';
$lang->user->join      = '加入日期';
$lang->user->visits    = '访问次数';
$lang->user->ip        = '最后IP';
$lang->user->last      = '最后登录时间';
$lang->user->allowTime = '开放时间';
$lang->user->status    = '状态';
$lang->user->alert     = '您的帐号已被禁用';
$lang->user->love      = '爱心用户';

$lang->user->register  = new stdclass();
$lang->user->register->welcome    = '欢迎注册成为会员';
$lang->user->register->why        = '欢迎注册成为我们的会员，您可以享受更多的服务。';
$lang->user->register->lblUserInfo= '用户信息';
$lang->user->register->lblAccount = '请设置您的用户名，英文字母和数字的组合';
$lang->user->register->lblPassword= '请设置您的密码。数字和字母的组合，六位以上。';

$lang->user->notice = new stdclass();
$lang->user->notice->password = '字母和数字组合，最少六位';

$lang->user->login  = new stdclass();
$lang->user->login->common  = "登录";
$lang->user->login->inputNameHere  = "在这输入用户名";
$lang->user->login->keep  = "保持在线";
$lang->user->login->welcome = '欢迎登录';
$lang->user->login->why     = '欢迎登陆我们的系统，这样您可以使用我们为注册会员提供的各种服务。';
$lang->user->login->openID  = '使用其他帐号进行登录：';

$lang->user->control = new stdclass();
$lang->user->control->common      = '用户中心';
$lang->user->control->welcome     = '欢迎您，<strong>%s</strong>';
$lang->user->control->lblPassword = "留空，则保持不变。";

global $config;
$lang->user->control->menus[10]  = '个人资料|user|profile';
$lang->user->control->menus[20]  = '编辑资料|user|edit';
$lang->user->control->menus[28]  = '我的消息|user|message';

$lang->user->control->menus[50]  = '退出登录|user|logout';

$lang->user->resetPassword = new stdclass();
$lang->user->resetPassword->caption    = "找回密码";
$lang->user->resetPassword->success    = "密码更改链接已经发送到您的邮箱中";
$lang->user->resetPassword->failed     = "您的密保邮箱错误，请重新输入";

$lang->user->resetmail = new stdclass();
$lang->user->resetmail->subject = "密码修改";
$lang->user->resetmail->notice  = "系统发信，请勿回复";

$lang->user->reset = new stdclass();
$lang->user->reset->success = '密码已修改';

