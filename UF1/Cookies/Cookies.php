<?php

if (!isset($_COOKIE['visites'])) {
    setcookie('visites', '1', time() + 3600 * 24);
    echo "Benvingut per primer cop!";
} else {
    $nVisites = $_COOKIE['visites'];
    $nVisites++;

    setcookie('visites', $nVisites, time() + 3600 * 24);
    echo "Benvingut per $nVisites vegades";
}
