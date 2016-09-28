<?php 
/**
 * @Author: likai
 * @Date:   2016-09-26 16:31:00
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-26 17:04:03
 */

//$arr=array(1,2,3,4,5,'nihao','likai',array('h'=>'likai','l'=>'kaili'));

//echo json_encode($arr);	数组转换成json格式

//$obj =array('h'=>'nihao','l'=>'world');
 	// echo json_encode($obj);数组转换成json格式


$jsonstr='[1,2,3,4,5,"nihao","likai",{"h":"likai","l":"kaili"}]';
$i=json_decode($jsonstr);
print_r($i);
echo $i[1];
 ?>