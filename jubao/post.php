<?php
/**
 * Name: post.php
 * Created by likai
 * User: likai
 * Date: 2016-09-10
 * Time: 17:32
 */
     $ip = $_SERVER["REMOTE_ADDR"];     //获取当前ip地址并且post到表单
     

?>

<!DOCTYPE html>
<html>
   
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>举报</title>
    <link rel="stylesheet" href="style/css/w_complain251980.css">
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js "></script>
  </head>
  
  <body class="zh_CN " ontouchstart="">
    <div class="page_bd">
      <div id="tips" style="display:none;" class="top_tips warning"></div>
     <div id="step2" class="category_item" style="">
        <h3 class="category_title">举报描述</h3>
        <form action="tijiao.php" method="post">
          <div id="textareaDiv" class="textarea_panel">
            <textarea id="aaa" name="neirong" onpropertychange="title_len();"></textarea>
            <i id="reasonTextTips" class="ic ic_warning ic_small"></i>
             <input type="hidden" name="ip" value="<?php echo $ip; ?>">
            <span id="textareaLenSpan" class="frm_hint">
              <span id="textLen">0</span>/50</span></div>
          <button id="submitBtn" type="submit" name="sub" class="btn btn_primary btn_disabled js_btn_submit">
            <span style="color:#fff;">提交</span></button>
        </form>
        <div class="opr_area"></div>
      </div>
      <div id="step3" style="display:none;"></div>
    </div>
    <script>
    $("body").on("propertychange input", "#aaa", function () {
        var value = $('#aaa').val().length;
         if(value > 50){
            $('#aaa').val($('#aaa').val().substring(0,50));
            value = $('#aaa').val().length;
         }
         $("span#textLen").html(value);
    });
    </script>
   <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
