<?php 
/**
 * @Author: likai
 * @Date:   2016-09-26 15:30:58
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-26 15:52:40
 */
session_start();	//打开session
//echo session_id();	//访问session ID

$_SESSION['name'] ='likai';

header('location:a.php');

 ?>