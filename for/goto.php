<?php
/**
 * Created by likai
 * User: likai
 * Date: 2016-08-12
 * Time: 23:29
 */


for($i=1;$i<=5;$i++){		//使用for循环循环输出1~5
	if($i==3)
		goto ECH;			//当$i为3时候跳出for循环
	echo "$i<br />";
}
ECH:				        //执行goto语句后程序将从此处开始执行
echo "此时\$i=$i";11