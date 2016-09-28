<!-- /**
 * @Author: likai
 * @Date:   2016-08-19 03:29:50
 * @Last Modified by:   likai
 * @Last Modified time: 2016-08-19 04:41:13
 */
 -->

 <?php 
header('content-type:text/html;charset=utf-8');
	class Person{
		public $username;
		private $age;
		private $salary;

		//创建构造函数
		public function __construct($username="李凯",$age=30,$salary=1231231){
			$this->username=$username;
			$this->age=$age;
			$this->salary=$salary;
		}
		public function getAge(){
			return '我的年龄是'.($this->age-10);
		}
		public function getSalary(){
			return '我的薪水是'.($this->salary-1000);
		}
		public function setSalary($salary){
		echo '涨薪了<br/>';
		$this->salary=$salary;
		}
	}

	$p1=new Person();
	echo $p1->username;
	echo "<br>";
	echo $p1->getAge();
	echo "<br/>";
	$p1->setSalary(123123);
	echo $p1->getSalary();
	echo "<br/>";
	
	
	
  ?>