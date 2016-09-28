<?php

header('content-type:text/html;charset=utf-8');
/*	 class Person{
	 	//成员属性
	 	public $username;
	 	public $age;
	 	public $email;
	 	public $sex;
		//成员方法
	public function eat(){
		echo 'eat...<br/>';
	}
	public function sieep(){
		echo "sieep..<br/>";
	}
	public function playe(){
		echo "playe..<br/>";
	}

}


//通过new关键字+类名实例化类，实例化类的结果产生对象
	$p1=new Person;
	$p2=new Person();
	var_dump($p1,$p2);
*/

/*
  class phone {
      public $width;
      public $height;
      public $size;

      public function call($name){
          echo  "正在给{$name}打电话";
      }
      public function play(){
          echo "正在玩手机哦";
      }
  }

    $phone =new phone();

    var_dump($phone);            //打印对象
    $phone ->width = "5CM";      //成员属性赋值
   // echo $phone -> width;
    $phone->call("李凯");        //调用方法
    echo "<hr>";
    $phone->call("许毅");
    echo $phone->play();
*/

    class person{
        public $name;
        public $age;
        public $sex;

        public function __construct($n,$a,$s){
            $this->name=$n;         //成员属性
            $this->age=$a;          //成员属性
            $this->sex=$s;          //成员属性


        }


        public function say(){
           echo "我的名字是: {$this -> name},我的年龄是{$this -> age},我的性别是{$this -> sex}";
        }


    }
        $person = new person("张三",12,"男");
            echo $person->name;
            echo "<br>";
            echo $person->age;
            echo "<br/>";
            echo $person->sex;
            $person->say();
            echo "<hr>";

        $person1 = new person("李四",15,"男");
            echo $person1->name;
            echo "<br>";
            echo $person1->age;
            echo "<br/>";
            echo $person1->sex;
            $person->say();
            echo "<hr>";
        $person2 = new person("神哥",12,"男");
            echo $person2->name;
            echo "<br>";
            echo $person2->age;
            echo "<br/>";
            echo $person2->sex;
            $person->say();
            echo "<hr>";

