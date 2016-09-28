<?php 
/**
 * @Author: likai
 * @Date:   2016-09-07 15:59:31
 * @Last Modified by:   likai
 * @Last Modified time: 2016-09-07 17:50:23
 */
	class Car {
		public $speed = 0; //汽车的起始速度是0

		public function speedUp(){
			$this ->speed += 10;
			return $this->speed;
		}
	}

	//定义继承于Car的Truck类
	class Truck extends Car{
		public function speedUp(){
			$this->speed=parent::speedUp()+50;
		}
	}

	$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
	ksort($age);

	foreach($age as $x=>$x_value)
	    {
	    echo "Key=" . $x . ", Value=" . $x_value;
	    echo "<br>";
	    }
	
 ?>