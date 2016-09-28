 <?php 
/**
 * @Author: likai
 * @Date:   2016-08-19 13:16:04
 * @Last Modified by:   likai
 * @Last Modified time: 2016-08-19 13:59:37
 */
			//创建类

	/*	public function HiDome(){	//创建方法
			echo "你好PHH";
		}


		public function Hellow(){
			echo "神哥";
		}*/

		class Man {
		//定义了两个参数；
		private $age, $name;

		//构造函数初始化;
		public function _construct($name,$age) {
		$this->name = $name;
		$this->age = $age;
		}

		public function getAge() {
		return "我今年：".$this->age."岁了";//我这里的age下边的name传不了值
		}

		public function getName(){
		return "大家好！  我叫：".$this->name.";   ";
		}
	}






  ?>