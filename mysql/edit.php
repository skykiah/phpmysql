<?php 
/**
 * @Author: likai
 * @Date:   2016-09-10 00:46:22
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-10 02:43:43
 */
	header('content-type:text/html;charset=utf-8');
 	include ("conn.php");   								    //引入链接数据库
 	if(isset($_GET['edit'])||!empty($_GET['edit'])) {
 		$e=$_GET['edit'];										//将GET的值赋值给$e
 		$sql="SELECT * FROM `likai` WHERE `id`='".$e."'";		//查询get传过来值的数据
 		$query=mysql_query($sql);								//执行sql语句						
 		$rs=mysql_fetch_array($query);							//把查询到的二进制数据转换成数组
 		}

 //编辑获取过来的数据
 	if(isset($_POST['sub'])||!empty($_POST['sub'])) {
 		@$title=$_POST['title'];
 		@$neirong=$_POST['neirong'];	
 		$hid=$_POST['hid'];														
 		$sql="update `likai` set `title`='$title',`neirong`='$neirong' where id ='$hid'";		//修改get传过来值的数据
 		$query=mysql_query($sql);									//执行sql语句						
 		@$rs=mysql_fetch_array($query);								//把查询到的二进制数据转换成数组
 		echo "<script>alert('更新成功');location.href='index.php'</script>";
 		}elseif(isset($_POST['id'])||empty($_POST['id'])) {
 			echo "修改失败";
 		}
 		function
 		
 	?>	

 	<!DOCTYPE html>
<html>

<head>
    <title>我是一个表单</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<center>
    <form action="edit.php" method="post">
    	<input type="hidden" name="hid" value="<?php echo $rs['id']; ?>">
        标题<input type="test" name="title" value="<?php echo $rs['title']; ?>"></br>
        内容<textarea rows="10" cols="60" name="neirong"><?php echo $rs['neirong']?></textarea></br>
        <input type="submit" name="sub" value="更新成功">
    </form>
</center>
</body>
</html>
