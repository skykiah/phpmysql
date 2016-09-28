<?php 
/**
 * @Author: likai
 * @Date:   2016-09-02 16:26:25
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-02 16:59:24
 */
	header('content-type:text/html;charset=utf-8');
	class demo{
		//创建成员属性
		public $name;
		public $age;

		//创建构造函数
		public function __construct($name,$age){
			$this->name=$name;
			$this->age=$age;

		}
		//创建say方法
		public function say(){
			echo "我是say方法".$this -> name.$this -> age;
		}

		//__clone() 魔术方法 是在克隆对象时被自动调用的
		//作用:可以对克隆的新对象的成员属性
		public function __clone(){
			$this -> name ="李四";
			$this -> age = 22;
		}

	}


	//创建对象
	$demo =new demo('张三',18);
	$demo -> say();
	echo "<br>";
	$demo1 = clone $demo;  //clone 克隆对象
	echo "<hr>";
	//var_dump($demo1);
	$demo1 ->say();




 ?>