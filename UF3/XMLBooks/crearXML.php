<?php

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><cataleg></cataleg>', null, false);

$nom = "EL Pricipito";
$xml->addAttribute('tipus', 'aventura');

$llibre = $xml->addChild('Llibre');
$llibre->addChild('titol', $nom);
$llibre->addChild('argument', 'Argument del primer llibre.');
$llibre = $xml->addChild('Llibre');
$llibre->addChild('titol', 'Tin Tin');
$llibre->addChild('argument', 'Argument del segon llibre.');

$xml->saveXML('./catalogo.xml');

