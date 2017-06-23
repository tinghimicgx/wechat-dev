<?php //echo $_GET["code"];
function gen($a){
	//echo $a;
	if($a==1){
		return "male";
	}else{
		return "female";
	}
}
$json = file_get_contents('https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxc920c54fab58a216&secret=7ce243def97bf25fd33d604def5a5ba9&code='.$_GET['code'].'&grant_type=authorization_code');
$obj = json_decode($json);
//var_dump($json);
//echo $obj->access_token;
$json = file_get_contents('https://api.weixin.qq.com/sns/userinfo?access_token='.$obj->access_token.'&openid='.$obj->openid.'&lang=zh_CN');
$obj = json_decode($json);
echo "<table><tr><th style='width:70%'><img src='".$obj->headimgurl."' style='width:30%;'></img></th>";
echo "<th><span style='font-size:xx-large'>Name:".$obj->nickname."<br>  Country:".$obj->country."<br>  Gender:  ".gen($obj->sex)."</span></th></tr></table>"
?>
<br>
<script src="https://display.engagesciences.com/ui/ngx.embed.min.js"></script>
<iframe src="https://display.engagesciences.com/display/container/dc/3e4658d3-4afc-4ef0-a975-3e64729c919e" frameborder="0" scrolling="no" id="ngxFrame75083" allowTransparency="true" style="width:100%"></iframe>