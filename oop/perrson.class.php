<!-- 
 * @Author: likai
 * @Date:   2016-08-18 18:13:01
 * @Last Modified by:   likai
 * @Last Modified time: 2016-08-18 19:32:17
 -->

<?php  
	header('content-type:text/html;charset=utf-8');
		//创建类
		class Person{
			public $username='likai';
			public $age=22;
			public $email='709579512@qq.com';
			public $sex='男';

			//成员方法
			public function eat(){
				echo 'eat...<br/>';
			}
			public function sleep(){
				echo 'sleep...<br/>';
			}
			public function play(){
				echo 'play...<br/>';
			}
			
		}
		//实例化
		$p1=new Person;
		//通过对象引用名->属性
		//对象引用->方法
		echo '姓名：'.$p1->username.'<br/>';
		echo '年龄: '.$p1->age.'<br/>';
		echo '邮箱: '.$p1->email.'<br/>';
		echo '性别: '.$p1->sex.'<br/>';

		echo '<hr/>';
		$p1->eat();
		$p1->sleep();
		$p1->play();
		echo '<hr/>';

		$p1->age=100;
		$p1->username="神哥 你是天才吗";
		$p1->email="86325547@qq.com";
		$p1->sex="男";
		echo '姓名：'.$p1->username.'<br/>';
		echo '年龄: '.$p1->age.'<br/>';
		echo '邮箱: '.$p1->email.'<br/>';
		echo '性别: '.$p1->sex.'<br/>';
	?>