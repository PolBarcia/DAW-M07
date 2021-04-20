<?php
$llista = array("pesego", "maduixa", "platan", "poma", "albercoc", "caqui", "sindria", "taronja", "pinya", "kiwi");

foreach($llista as $fruita) {
    echo "$fruita";
    print ("\n");
}
print ("___________________\n");
print ("Llista Ordenada\n");
print ("___________________\n");


asort($llista);
foreach($llista as $fruita) {
    echo "$fruita";
    print ("\n");
}

print ("___________________\n");
print ("Llista Aleatoria\n");
print ("___________________\n");


shuffle($llista);
foreach($llista as $fruita) {
    echo "$fruita";
    print ("\n");
}