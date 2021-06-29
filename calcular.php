<?php


$num = filter_input(INPUT_POST, 'numero');


function PrimoInferior($num_param){
    
    if ($num_param<1){
        echo "Número não pode ser nem 0 e nem negativo!";
        exit;
    } elseif ($num_param<=1){
        echo "Não existe número primo menor que o número 1!";
    } else{
        for ($i = 2;($i*$i) <= $num_param; $i++) {
            echo $i."<br/>";
            for ($x=2; $x <$i; $x++){
                if($x%$i==0){
                    exit;
                }
            }   
           
        }
    }
    echo "o numero é: ".$i-1;
}

PrimoInferior($num);