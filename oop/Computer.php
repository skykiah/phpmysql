<!-- /**
 * @Author: likai
 * @Date:   2016-08-19 02:58:05
 * @Last Modified by:   likai
 * @Last Modified time: 2016-08-19 03:22:29
 */
 -->
 <?php
 	header('content-type:text/html;charset=utf-8');
 	class Computer{						//创建类

	private $price=2000;
 	public function zuzhuang(){
 		$this->cailiao();
 		$this->zuhe();
 		$this->baozhuang();
 		echo "电脑组装好了 给你吧 哈哈~-~"."<br>";
 	}

 	//创建成员方法
 	private function cailiao(){
 		echo '我买了装电脑的材料<br>';
 	}
 	private function zuhe(){
 		echo '组合电脑<br>';
 	}
 	private function baozhuang(){
 		echo '包装电脑<br>';
 	}
 	public function getPrice(){
 		return $this->price*2;
 	}

}
	$thinkPad=new Computer;
	// $thinkPad->buyPro();
	$thinkPad->zuzhuang();
	// echo $thinkPad->price.'<br/>';
	echo $thinkPad->getPrice();


  ?>