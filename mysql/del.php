
<?php 
/**
 * @Author: likai
 * @Date:   2016-09-10 00:22:46
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-10 00:40:59
 */
 header('content-type:text/html;charset=utf-8');
 include ("conn.php");       //引入链接数据库

 	 if(isset($_GET['del'])||!empty($_GET['del'])) {
 	 	$d=$_GET['del'];
 	 	$sql="delete from `likai` where `id`='$d'";
 	 	mysql_query($sql);
 	 	echo "删除成功";
 	 	}
	 ?>