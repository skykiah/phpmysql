<?php 
/**
 * @Author: likai
 * @Date:   2016-09-26 15:38:29
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-26 16:06:37
 */
session_start();
	if (isset($_SESSION['name'])) {
		$_SESSION['name'];
	}else{
		echo "NO session";
	}




 ?>