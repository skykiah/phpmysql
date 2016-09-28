<?php
/**
 * Created by PhpStorm.
 * User: likai
 * Date: 2016-08-16
 * Time: 1:52
 */

    for ($g =1; $g<=100; g++){
        for ($m=1; $m<=100; $m++){
            for ($x=1; $x<=100; $x++){
            if (($g+$m+$x) $$ ($g*5 + $m*3 + $x/3) == 100){
                    echo '公母雏各' , $g, $m, $x;
                }

            }
        }
    }