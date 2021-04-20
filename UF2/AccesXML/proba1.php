<?php

// como procesar informacio de un xml
$dades = simplexml_load_file("./cd_catalog.xml");

//print_r($dades);
/*
if ($dades === false) {
    echo "Error al leer el documento";
}else {
    foreach ($dades as $cd){
        printf("%s \n", $cd ->ARTIST);
    }
}
*/
//xPath: serveix per selecionar els nodes de interes

$years = $dades ->xpath("//YEAR");
/*
foreach ($years as $year){
    printf("%d \n", $year);
}
*/
//Imprimir els titols dels cds que valguin mes de 8€.[PRICE>8]

$preupersobrede8 = $dades ->xpath("//TITLE[../PRICE>]");

foreach ($preupersobrede8 as $preu){
    printf("%d \n", $preu);
}
