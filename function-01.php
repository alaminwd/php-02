<?php


function isEven($n){  // this is perameter
    if($n % 2 == 0){
        return true;
    }
    else{
       return false;
    }
}


$n = 13;

if(isEven($n)){  // this is Argument
    echo "$n is Even Number ";

}
else{
    echo "$n is Odd Number ";
}