<?php
/**
 * @Author: likai
 * @Date:   2016-08-31 14:01:04
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-02 16:33:04
 */
	header('content-type:text/html;charset=utf-8');
	class person{
		//定义成员属性
		public $name;
		public $age;
		public $sex;

		//构建函数初始化
		public function __construct($name,$age,$sex){

			$this -> name = $name;
			$this -> age = $age;
			$this -> sex = $sex;
		}
		//定义say方法
		public function say(){
			echo "say方法";
		}

		public function __destruct(){
			echo "88 {$this -> name}<br/>";
		}
	}


	$person = new person('张三',28,'男');
	
	




 ?>