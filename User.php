<?php 
//-----------------------请修改以下配置------------------------------------
//防盗链模式,0为关闭，1为开启。
define('REFERER_TYPE', 0);
//防盗链域名,即授权域名,填写解析所在域名,多个用|隔开，cdn填写cdn域名 ；
define('REFERER_URL', 'www.nxflv.com|yun.nxflv.com');//‘’内填写域名,默认留空不防盗链。
//盗链提示信息,当防盗链模式为1时生效,支持html。
define('REFERER_INFO', '<html><meta name="robots" content="noarchive"><head><title>智能解析系统 - 全网视频在线解析服务</title></head><style>h1{color:#00A0E8; text-align:center; font-family: Microsoft Jhenghei;}p{color:#f90; font-size: 1.2rem;text-align:center;font-family: Microsoft Jhenghei;}</style><body bgcolor="#000000"><table width="100%" height="100%" align="center"><td align="center"><h1>接口防盗已开启</h1><p>如需使用，请联系本站管理员进行授权</p></table></body></html>');
//此处进行用户相关配置
$user = array(

		'uid' => 'xxx', //这里填写你的UID信息,用户授权UID，在 https://vip.nxflv.com 平台可以查看

		'key' => 'xxx', //这里填写你的用户密匙信息,用户授权TOKEN，在 https://vip.nxflv.com 平台可以查看

		'path' => '', //一般不用修改,如果放置为根目录请留空,除非你放置在二级目录,修改格式 'path' => '/jiexi',（jiexi为二级目录名,不要忘记加 /）

		'h5auto' => '0', //手机端h5是否自动播放：参数设置为：1,表示自动播放;参数设置为：0,表示不自动播放

		'autoplay' => '1', //电脑端autoplay是否自动播放：参数设置为：1,表示自动播放;参数设置为：0,表示不自动播放

		'online' => '0', //当前无法解析的地址是否启动备用解析接口  默认开启,1:开启,0:关闭  注意：开启时要在下面填入备用解析接口,否则无法解析跳转视频官网
  
		'ather' => 'http://v.frpkj.com/jx/?v=', //备用接口设置（尽量不要修改，保证服务器宕机时能及时跳转）

		'dpname' => '→智能解析系统←', //用户设置dplayer播放器右键,不设置请留空。填写实例:'dplayer' => '→诺讯智能解析系统←'
		
		'dpmain' => 'http://www.frpkj.com', //用户设置dplayer播放器右键链接地址,不设置请默认。填写实例:'dplayer' => 'http://www.frpkj.com'
		
		'title' => '智能解析系统 - QQ群：97588668', //设置解析页面title名称   例如：'title' => '诺讯视频解析接口',

		'tongji' => '', //用户统计代码.  例如:s4.cnzz.com/z_stat.php?id=xxxxx&web_id=xxxxx,百度统计与之类似

		'lotime' => '', //防盗验证时间,lotime参数单位：秒,数值为大于0的整数.设置多少秒后跳转设置:lolink参数  填写实例:'lotime' => '600', 

		'lolink' => '', //用户设置防盗跳转,设置防盗验证时间lotime参数后才生效  //填写实例:'lolink' => 'https://www.nxflv.com', 

) 			
//-----------------------修改区域结束---------------------------------------
?>