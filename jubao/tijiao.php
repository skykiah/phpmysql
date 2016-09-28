<?php 
/**
 * @Author: likai
 * @Date:   2016-09-11 05:20:54
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-11 07:38:27
 */


	header('content-type:text/html;charset=utf-8');
    $time=date('Y-m-d H:i:s',time()+6*3600);  	   //获取当前时间的方法
    include ("connfig.php");                       //引入链接数据库
    @$ip=$_POST['ip'];                             //打印post数据 测试是否能接收到post数据
    @$neirong=$_POST['neirong'];
    $sql="insert into `jubao` (`id`,`neirong`,`date`,`ip`)  VALUES (NULL ,'$neirong','$time','$ip')";//插入sql语句
    if (!empty($_POST['neirong'])){                //判断是否能接收到post数据 如果能接收就执行sql语句
        mysql_query($sql);  
      }

 ?>

<html><head><style type="text/css" id="13878449000"></style><style type="text/css" id="13878450000"></style><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta name="format-detection" content="telephone=no">
<title>举报</title>

<link rel="stylesheet" href="style/css/w_complain251980.css">
<script src="style/js/index27bc29.js" type="text/javascript" async=""></script></head>

    <body class="zh_CN " ontouchstart="">

        

<div class="page_bd">

	<div id="tips" style="display: none; top: 0px;" class="top_tips warning"></div>

	<div id="step3" style="">     <div class="page_msg">  <div class="icon_area"><img src="style/css/img/jbcg.png"></div>  <div class="text_area">   <h2 id="" class="title">举报成功</h2>   <p id="result_desc" class="desc">

感谢你的参与，微信坚决反对色情、暴力、欺诈等违规信息，我们会认真处理你的举报，维护绿色、健康的网络环境。</p>  </div>  <div class="opr_area">   <a id="successBtn_1" class="btn btn_primary" href="javascript:WeixinJSBridge.call('closeWindow');">确定</a>  </div> </div>    </div>
</div>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
</script></body></html>