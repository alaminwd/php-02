<?php


    $numbers = [1,2,3,4,5,6,7,8,9,10];


    function isEven($n){
        if($n % 2 == 0){
            return true;
        }

        return false;
    }


    $result = array_filter($numbers, "isEven");
    print_r($result);




    function isOdd($n){
        if($n % 2 == 1){
            return true;
        }

        return false;
    }


    $result = array_filter($numbers, "isOdd");
    print_r($result);