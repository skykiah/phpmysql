<?php
/**
 * Created by PhpStorm.
 * User: likai
 * Date: 2016-09-09
 * Time: 18:13
 */
    header('content-type:text/html;charset=utf-8');
    include ("conn.php");       //引入链接数据库


    @$title=$_POST['title'];
    @$neirong=$_POST['neirong'];
    $sql="INSERT INTO `likai`(`id`, `title`, `date`, `neirong`) VALUES (null,'$title',sysdate(),'$neirong')";

    if(isset($_POST['sub'])||!empty($_POST['sub'])) {
          mysql_query($sql);
          echo "<script>alert('添加成功');location.href='index.php'</script>";
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>我是一个表单</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<center>
    <form action="add.php" method="post">
        标题<input type="test" name="title"></br>
        内容<textarea rows="10" cols="60" name="neirong"></textarea></br>
        <input type="submit" name="sub" value="发表">
    </form>
</center>
</body>
</html>

