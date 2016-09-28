<!-- /**
 * @Author: likai
 * @Date:   2016-08-19 02:11:05
 * @Last Modified by:   likai
 * @Last Modified time: 2016-08-19 02:24:47
 */
 -->

<?php 
	for ($i=0; $i < 10; $i++) { 
		if ($i == 3) {
			echo "111";
			break;
		}elseif($i!=3){
			echo $i+2;
		}
	}

 ?>