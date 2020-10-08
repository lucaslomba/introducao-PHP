<?php

for($i = 1; $i<=15; $i++){
    if($i == 13){
        //pula o elemento 13
        //continue;

        //encerra o loop
        //break;
    }
    echo "$i".PHP_EOL;
}

$contador = 1;

while($contador <= 15){
    echo "$contador".PHP_EOL;
    $contador = $contador + 1;
}