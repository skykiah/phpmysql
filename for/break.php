<?php
/**
 * Created by likai
 * User: likai
 * Date: 2016-08-12
 * Time: 23:23
 */

for ($x=1; $x<9; $x++){              //第一层For循环结构
    echo "$x<br/>";
    if ($x == 5 ) {                  //如果$x等于5
        break;                      //跳出循环层
    }
}