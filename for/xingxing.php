<?php
/**
 * Created by likai
 * User: likai
 * Date: 2016-08-12
 * Time: 23:07
 */

    $hangshu = 6;                       //用来控制行数
    for ($i=1;$i<= $hangshu;$i++){
        for ($j=1;$j<=$i; $j++){
            echo "*";                   //输出星号
        }
        echo "</br>";                   //输出换行
    }


