<?php
include "wechat.class.php";
$options = array(
		'token'=>'diunelomochowhi', //填写你设定的key
		'appid'=>'wxc920c54fab58a216',
		'appsecret'=>'7ce243def97bf25fd33d604def5a5ba9'
	);
$weObj = new Wechat($options);
//var_dump($weObj);
$weObj->valid();//明文或兼容模式可以在接口验证通过后注释此句，但加密模式一定不能注释，否则会验证失败
$type = $weObj->getRev()->getRevType();
switch($type) {
	case Wechat::MSGTYPE_TEXT:
			$weObj->text("hello, I'm wechat22")->reply();
			exit;
			break;
	case Wechat::MSGTYPE_EVENT:
			$weObj->text("最新消息－1")->reply();
			break;
	case Wechat::MSGTYPE_IMAGE:
			break;
	default:
			$weObj->text("help info")->reply();
}

