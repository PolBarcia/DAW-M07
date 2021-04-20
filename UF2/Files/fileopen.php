<?php
//ejemplo de como abrir un fitchero

$file = fopen("nom.txt", "w");
$resultat = fwrite($file, "Pol Barcia 2 2 2021 \n");
if ($resultat == false){
    echo "Error, no és pot escriure.";
}
fclose($file);
$file = fopen("nom.txt", "r");
fscanf($file, "%s %s %u %u %u\n", $pnom, $snom, $dia, $mes, $any);

echo "Nom: $pnom $snom\n";
echo "Data: $dia / $mes / $any\n";

fclose($file);

$file = fopen("nom.txt", "a");
fprintf($file, "%s %s %u %u %u\n", $pnom,$snom,$dia+1,$mes, $any);

fclose($file);