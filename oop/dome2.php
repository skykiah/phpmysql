<!-- /**
 * @Author: likai
 * @Date:   2016-08-18 17:47:21
 * @Last Modified by:   likai
 * @Last Modified time: 2016-08-18 19:42:58
 */ -->
<?php  
	header('content-type:text/html;charset=utf-8');
		//创建类
		class Person{
			public $username='likai';
			public $age=22;
			public $email='709579512@qq.com';
			public $sex='男';

			//构造函数
			public function __construct($username,$age,$email,$sex){
					$this->username=$username;
					$this->age=$age;
					$this->sex=$sex;
					$this->email=$email;
			}

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
			public function personInfo(){
				echo '用户名为：'.$this->username.'<br/>';
				echo '年龄：'.$this->age.'<br/>';
				echo '性别：'.$this->sex.'<br/>';
				echo '邮箱：'.$this->email.'<br/>';
			}
	}

		//创建对象通过构造函数调用
		$p1=new Person('神哥',24,'86325547@qq.com','男');
		$p1->personInfo();	//调用成员方法

		echo "<hr/>";

		//创建对象通过构造函数调用
		$p2=new person('李凯',23,'709579512@qq.com','男');
		$p2->personInfo();	//调用成员方法

		echo "<hr/>";

		//创建对象通过构造函数调用
		$p3=new person('李屋',23,"296018523@qq.com",'男');
		$p3->personInfo();


	?>