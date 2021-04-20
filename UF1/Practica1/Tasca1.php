<?php
print ("Quin any vols calcular?");
$any= 2020;//demanar l'any a l'usuari
if (($any % 4) && ($any % 100 || !($any % 400))){
    print ("És un any de traspas");
    }else{
    print ("No és un any de traspas");
}