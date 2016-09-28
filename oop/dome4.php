<!-- /**
 * @Author: likai
 * @Date:   2016-08-18 20:50:35
 * @Last Modified by:   likai
 * @Last Modified time: 2016-08-19 02:04:06
 */
 -->
 <?php 
 	/*
 	封装性:
 	1.访问修饰符
 		1.public:共有的
 		2.protected;受保护的
 		3.private;私有的	
 	 */
 	header('content-type:text/html;charset=utf-8');
	class Person{
		public $username='likai';
		protected $age=22;
		private $salary=10000.9;
		public function say(){
				echo "say..<br/>";
		}
		protected function makeMoney(){
			echo "赚大钱...<br/>";
		}
		private function papapa(){
			echo "我会啪啪啪啪...<br/>";
		}
		public function test(){
			echo '<br/>我是来获取受保护的权限<br/>';
			echo $this->age.'<br/>';
			echo $this->salary.'br/';
		}

 	}

 	$p1=new Person();
 	echo "用户名: ".$p1->username; 
 	$p1->test();

 		
 	 ?>