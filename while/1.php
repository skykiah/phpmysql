<?php
 /**
 * @Author: likai
 * @Date:   2016-08-18 17:08:00
 * @Last Modified by:   likai
 * @Last Modified time: 2016-08-19 13:13:34
 */


 header('content-type:text/html;charset=utf-8');
/* 	$i="Hello World";
	 echo strpos($i,"W"); 	//获取字符串位置*/

/*     while(表达式){     判断表达式真假是否执行
         循环体;
     }

     do{                //无条件执行一次循环体
         循环体
     }while(exp);*/     //继续执行循环体

         $i=1;
     while($i<=100){
         echo $i."<br/>";
         $i++;
         if ($i>20){
          break;        //通过break结束循环
         }
        if ($i==3){
         $i++;
         continue;      //通过continue跳过循环
         }
         $i++;
     }

        do{
            echo "我首先会执行一次";
        }while(false);


  ?>