<?php  
/**
 * @Author: likai
 * @Date:   2016-08-31 13:14:06
 * @Last Modified by:   likai
 * @Last Modified time: 2016-08-31 13:41:57
 */
 	header('content-type:text/html;charset=utf-8');
	class person{
		//定义成员属性
		public $name;
		public $age;
		public $sex;

		//构造函数初始化;
		public function __construct($a,$b,$c){
				$this->name=$a;
				$this->age=$b;
				$this->sex=$c;
		}
		public function say(){
			echo "我的名字叫做{$this->name},我的年龄是{$this->age},我的性别是{$this->sex}";
		}
	}

	$person = new person("李凯",23,"男");
	$person ->say();
	echo "<BR/>";
	$person1 = new person("李屋",23,"男");
	$person1 ->say();
?>