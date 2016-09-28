<?php 
/**
 * @Author: likai
 * @Date:   2016-09-10 02:43:11
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-10 03:25:31
 */
	header('content-type:text/html;charset=utf-8');
 	include ("conn.php");   								    //引入链接数据库
 	if(isset($_GET['view'])||!empty($_GET['view'])) {
 		$e=$_GET['view'];										//将GET的值赋值给$e
 		$sql="SELECT * FROM `likai` WHERE `id`='".$e."'";		//查询get传过来值的数据
 		$query=mysql_query($sql);								//执行sql语句						
 		$rs=mysql_fetch_array($query);							//把查询到的二进制数据转换成数组
 	
 		//计数器sql语句
 		$sqll="update `likai` set `hlts`=`hlts`+'1' WHERE `id`='".$e."'";
 		mysql_query($sqll);
 		
 		}

 		


 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $rs['title']; ?></title>
	<style type="text/css">
	h1 {color:#f30e0e;}
	p.tip span {
	font-size: 12;
	color:#ff9955;
	text-align:center;
	display: table;width: 100%; 
	}
	p.tip{
	text-align:center;
	}

	</style>
</head>
<body>
 <center><h1><?php echo $rs['title']; ?></h1></center> <br>
  <p class="tip"><span>点击次数：<?php echo $rs['hlts']; ?></p><p class="tip"><span>发布时间：<?php echo $rs['date']; ?></p>
<hr>
<center><p><?php echo $rs['neirong']; ?></p></center>
</body>
</html>
