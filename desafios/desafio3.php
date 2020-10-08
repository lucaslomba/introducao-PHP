<?php

//Calculo IMC

$altura = 3;
$peso = 2

$imc = $peso / ($altura * $altura)

if($imc <= 18.5){
    echo "Abaixo do peso"
}else if($imc >= 18.5 and $imc <= 24.9){
    echo "Peso normal"
}else if($imc >= 25 and $imc <= 29.9){
    echo "Sobrepeso"
}else if($imc >= 30 and $imc <= 34.9){
    echo "Obesidade 1"
}else if($imc >= 35 and $imc <= 39.9){
    echo "Obesidade 2"
}else{
    echo "Obesidade 3"
}
