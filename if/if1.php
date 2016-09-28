<?php
/**
 * Created by PhpStorm.
 * User: likai
 * Date: 2016-08-18
 * Time: 1:26
 */
    header('');
    $username = '李凯';
    $sex='男';
    $age= 17;
/*
    if ($username=='李凯'){
        if ($sex =='男'){
            if($age<18){
                echo "你好,李凯先生";
            }else {
                if ($age <30){
                    echo "你好李凯小姐"
                }else{
                    echo "你好李凯先生";
                }
             }
        }*/
        //php if else 嵌套
        if ($username == '李凯'){
            if ($sex == '男'){
                if ($age < 30){
                    echo "你好李凯先生";
                }else{
                    echo "你好,李凯小姐";
                }
            }
        }
