<?php
//crea un traingle
print ("Cuants nivells?");
//variables per tindre recursos
$num= 0;
$num2 = 6;
//el primer while serveix per l'altura
while ($num <= $num2){
    $num3 = 0;
    //el segon while indica cuants simbols hi han per nivell
    while ($num3 != $num){
        print ("*");
        $num3++;
    }
    $num++;
    print ("\n");
}