<?php
session_start();

if ( !isset($_SESSION['comptador'])) {
    $_SESSION['comptador'] = 0;
} else {
    $_SESSION['comptador']++;
}

echo "Hola sessio ".$_SESSION['comptador'];

