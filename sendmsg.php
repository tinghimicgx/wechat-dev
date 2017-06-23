<?php
include "wechat.class.php";
$options = array(
		'token'=>'diunelomochowhi', //填写你设定的key
		'appid'=>'wxc920c54fab58a216',
		'appsecret'=>'7ce243def97bf25fd33d604def5a5ba9',
		'agentid'=>'1',
		'debug'=>false,
		'logcallback'=>'logg'
	);
$weObj = new Wechat();

$token = $weObj->checkAuth('wxc920c54fab58a216','7ce243def97bf25fd33d604def5a5ba9');
echo $token;

$menu = $weObj->getMenu();
var_dump($menu);

   $newmenu =  array(
    		"button"=>array(
	    			array('type'=>'click','name'=>'最新消息','key'=>'MENU_KEY_NEWS'),			
    				array('type'=>'view','name'=>'參與活動','url'=> $_POST['link']),
    				)
   		);
    $result = $weObj->createMenu($newmenu);
var_dump($newmenu);
/*$data=array(    "touser"=>array(
		       "oxcFJwsruikd-lnFDWi5zbltJr_M"
	      ),
	       
	       // 在下面5种类型中选择对应的参数内容
	       // mpnews | voice | image | mpvideo => array( "media_id"=>"MediaId")
	       "text" => array( "content" => "hello")
	  );

echo $weObj->sendMassMessage($data);
*/