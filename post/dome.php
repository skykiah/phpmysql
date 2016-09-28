<?php
/**
 * Created by likai
 * User: likai
 * Date: 2016-08-20
 * Time: 22:02
 */
     header('content-type:text/html;charset=utf-8');

    echo  "你好".htmlspecialchars($_POST['name']);
    echo   '你' .(int)$_POST['age']."岁了。"; ?>