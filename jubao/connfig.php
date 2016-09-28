<?php
/**
 * Created by likai
 * User: likai
 * Date: 2016-09-10
 * Time: 13:49
 */
header('content-type:text/html;charset=utf-8');
    $con =mysql_connect("221.229.166.73",'likai','likai');
    if (!$con){
       die('链接数据库成功'.mysql_errno()); //判断数据库链接情况并返回出错原因
    }
    mysql_query("set not utf8");            //设置数据库字符集
    mysql_select_db("likai",$con);          //链接数据库