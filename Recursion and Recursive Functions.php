<?php


function recursive($i){

    if($i >= 10){
        return ;
    }

    echo $i."\n";
    $i++;
    recursive($i);
}

recursive(1);


echo PHP_EOL;
echo PHP_EOL;

function counter($count, $end){
    if($count > $end){
        return ;
    }

    echo $count."\n";
    $count++;
    counter($count, $end);
}

counter(1, 30); 




echo PHP_EOL;
echo PHP_EOL;

function prinN($count, $end, $stapping=2){
    if($count > $end){
        return ;
    }

    echo $count."\n";
    $count +=$stapping;
    prinN($count, $end, $stapping);
}

prinN(1, 10);



echo PHP_EOL;
echo PHP_EOL;

function countdown($n){
    if($n == 0){
        return;
    }

    echo $n."\n";
    countdown($n-1);
}

countdown(5);