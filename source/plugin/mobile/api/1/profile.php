<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: profile.php 32480 2013-01-25 01:45:02Z monkey $
 */
//note 更多more >> profile(个人信息) @ Discuz! X2.0

if(!defined('IN_MOBILE_API')) {
	exit('Access Denied');
}

$_GET['mod'] = 'space';
// by oxyflour
$_GET['do'] = isset($_GET['do']) ? $_GET['do'] : 'profile';
include_once 'home.php';

class mobile_api {

	//note 程序模块执行前需要运行的代码
	function common() {
	}

	//note 程序模板输出前运行的代码
	function output() {
		global $_G;
		$data = $GLOBALS['space'];
		unset($data['password'], $data['email'], $data['regip'], $data['lastip'], $data['regip_loc'], $data['lastip_loc']);
		$variable = array(
			'list' => $GLOBALS['list'],
			'hiddennum' => $GLOBALS['hiddennum'],
			'space' => $data,
			'extcredits' => $_G['setting']['extcredits'],
		);
		mobile_core::result(mobile_core::variable($variable));
	}

}

?>
