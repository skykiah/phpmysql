<?php 
/**
 * @Author: likai
 * @Date:   2016-09-08 18:06:24
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-08 18:35:42
 */
	header('content-type:text/html;charset=utf-8');
	// endif 
	if (3>2) :
		echo 'this is true';
	else:
		echo "this is flase";
	endif;

	echo date_default_timezone_get(); 
	date_default_timezone_set('Asia/Chongqing');

	echo "<hr>";
	echo date('Y/m/y H:i:s',time()+24*3600);

	@$day=date('w');
	if ($ady == 0) {
		echo "星期日";
	}elseif ($ady == 1) {
		echo "星期一";
	}
	echo date('w');
 ?>