<?php
/**
 * Created by PhpStorm.
 * User: likai
 * Date: 2016-09-09
 * Time: 14:37
 */
    $con = mysql_connect("localhost","likai","likai");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_query("set names utf8");      //**设置字符集***
    mysql_select_db("likai", $con);     //链接数据表



?>

