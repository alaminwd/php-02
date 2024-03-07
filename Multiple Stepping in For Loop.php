<?php

for($i=10; $i > 0; $i--){
    echo $i;
    echo PHP_EOL;
}

echo PHP_EOL;
echo PHP_EOL;


for($i=10; $i > 0; $i-=1){
    echo $i;
    echo PHP_EOL;
}


echo PHP_EOL;
echo PHP_EOL;


for($i=10; $i > 0; $i-=1){
    echo $i.":".(11-$i);
    echo PHP_EOL;
}


echo PHP_EOL;
echo PHP_EOL;


for($i=10, $j=1; $i > 0; $i-=1, $j++){
    echo $i.":".$j;
    echo PHP_EOL;
}

echo PHP_EOL;
echo PHP_EOL;


for($i=0; $i < 100; $i+=7){
    echo $i;
    echo PHP_EOL;
}


echo PHP_EOL;
echo PHP_EOL;


for($i=0; $i < 100; $i++){
    echo $i % 7 == 0 ?"$i \n":"";
    
    echo $i % 11 == 0 ?"$i \n":"";
}