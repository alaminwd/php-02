<?php


for($i = 1; $i < 20 ; $i++){
    echo $i;
    echo PHP_EOL;

    if($i == 6){
        break;
    }
}


echo PHP_EOL;

 
for($i = 20; $i < 50 ; $i++){
  

    if($i % 13 == 0){
        echo $i;
        echo PHP_EOL;
        break;
    }
}

echo PHP_EOL;
 
for($i = 20; $i < 30 ; $i++){
  

    if($i < 27){
        continue ;
    }
    echo $i;
        echo PHP_EOL;
}
 

