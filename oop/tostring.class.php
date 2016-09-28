<?php 
	/**
	 * @Author: likai
	 * @Date:   2016-09-02 17:01:46
	 * @Last Modified by:   likai
	 * @Last Modified time: 2016-09-02 17:25:29
	 */
	header('content-type:text/html;charset=utf-8');
	//创建demo类
	class demo{
		//构造成员属性
		public $name;
		//构造函数初始化
		public function __construct($name){
			$this -> name = $name;
		}

		//魔术方法__tostring() 是直接echo 或print 对象时被自动调用
		//作用: 可以直接返回固定字符串或用于调用流程处理
		public function __toString(){
			$this -> d();
			$this -> c();
			return "我是返回值";  //__tostring 必须是需要返回值
		}

		private function d(){
			echo "d......";
		}

		private function c(){
			echo "c......";
		}

	}

	$demo = new demo ("张三");
	echo $demo;

 ?>