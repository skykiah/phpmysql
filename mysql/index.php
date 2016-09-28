	<h2><a href="add.php">添加内容</a></h2>
 	<hr>
<?php 
/**
 * @Author: likai
 * @Date:   2016-09-09 21:56:32
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-10 23:58:39
 */

	include ("conn.php");        							//引入链接数据库
	$sql="SELECT * FROM `likai`order by `id` desc ";		//查询数据表
	$query=mysql_query($sql);								//执行数据命令
	$rs=mysql_fetch_array($query);							//把查询查询到的二进制数据转换成数组
	
	while ($rs=mysql_fetch_array($query)) {
 ?>
 	
	<h2>ID:<?php echo $rs['id'];?> 标题: <a href="view.php?view=<?php echo $rs['id'];?>"><?php echo $rs['title'];?> </a>| <a href="edit.php?edit=<?php echo $rs['id'];?>">编辑 </a> | <a href="del.php?del=<?php echo $rs['id'];?>">删除 </a> </h2>
	<li>时间:<?php echo $rs['date']; ?></li>
	<p class="tip"><span>点击次数：<?php echo $rs['hlts']; ?></p>
	<p> 内容:<?php echo $rs['neirong']?></p>

	<hr>


<?php
 }

 ?>