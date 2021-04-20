<?php
//variables basiques mes una auxiliar que utilitzarem per el condicional
$num = 0;
$L = 6;
$aux = $L;
//el primer bucle es per l'altura
    while ($L!= $num){
        //utilitzem un if per fer els cambis de simbols
        if ($L != $aux && $L != 2 && $L !=1){
            //si no estem en els nivells del la vora fara el canvi de simbol
            $num4= 0;
            print ("*");
            while ($num4 <= ($L-3) ){
                print ("-");
                $num4++;
            }
            print ("*");
            print ("\n");
        }else{
            //i si estem als nivells de la vora no realiztara cap canvi
            $num3 = 0;
            while ($L > $num3){
                print ("*");
                $num3++;

            }
            print ("\n");
        }
        $L--;

}