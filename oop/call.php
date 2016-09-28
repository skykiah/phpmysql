<?php 
/**
 * @Author: likai
 * @Date:   2016-09-02 17:37:43
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-03 19:54:28
 */
	header('content-type:text/html;charset=utf-8');
	class db{
		public function __call($methodName, $args){
			echo "你所调用的方法 {$methodName}(),参数";
			print_r($args);
			echo '不存在';
		}
	}

	$db = new db();
	$db -> select('a','b','c');

	echo "<hr/>";

	//请创建一个数组变量arr,并尝试创建一个关联数组，键是apple，值是苹果
	 $arr = array ('apple'=>"苹果");
	 $arr0 = $arr['apple'];
	 if (isset($arr)) {
	 	print_r($arr0);
	 }else{
	 	echo "请输入一个数组并且赋值";
	 }
     
    function name(){
    	echo 'likai';
    }

   	$func ='name';
   	$func();

   	echo "<hr>";

   	class book {

   		function getName(){
   			return '李凯啊啊啊';
   		}

   	}

   	// 可变函数
   	$func ='getName';
   	$book = new book();
   	$book -> $func();

   	$str = '苹果很好吃。';
	//请将变量$str中的苹果替换成香蕉
   	$str = str_replace('苹果','香蕉',$str);			//str_replace 可以修改替换数据 格式的 str_replace('需要替换之','替换之后的值',替换的变量)
   	echo $str;


	//定义一个Car类并实例化一个对象
  	class Car{
  		public $name = '奔驰';
  		public $type = '商务型';
  		public $price = 1000000;
  		public $topSpeed = 300;
  	
  	public function getInfo() {
  		echo "这是一辆很牛逼的 时速能达到".$this->topSpeed."公里的".$this->name.$this->type."轿车,有多少妹子宁愿坐在价值".$this ->price."也不愿意坐在自行车上笑...";
  	}
}
  	$bus = new Car();
  	$bus -> getInfo();

  	
 ?>