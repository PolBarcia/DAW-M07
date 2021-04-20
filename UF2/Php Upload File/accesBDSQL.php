<?php
$conexio = "mysql:dbname=alumnes;host=127.0.0.1;port=3306";
$usuario = "root";
$passwd = "";
try{
    $bd = new PDO($conexio, $usuario, $passwd);
    $sql = "SELECT alumnes_nom, alumnes_cognoms, edat FROM alumnes";
    $usuaris = $bd -> query($sql);
    foreach ($usuaris as $usuari){
        echo $usuari['nom']. " " . $usuari['cognom'] . " " . $usuari['edat'] . "\n";
    }

}catch (PDOException $e){
    echo "ERROR: $e \n";
    echo "Error: No es pot conectar amb la base de dades.";
}
