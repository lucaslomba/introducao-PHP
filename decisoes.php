<?php

$idade = 17;
$acompanhado = false;

echo "Você só pode entrar se tiver mais de 18 anos ou 16 anos acompanhado" . PHP_EOL;

if($idade >= 18){
    echo "Você tem $idade, pode entrar sozinho!";
}else if( $idade >=16 and $acompanhado == true){
    echo "Você tem $idade, pode entrar acompanhado!";
}else{
    echo "Você não pode entrar, por ser menor de 18 Anos!";
}