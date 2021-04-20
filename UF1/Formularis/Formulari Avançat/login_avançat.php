<?php
class Persona {
    private $dni;
    private $nom;
    private $cognom;
    private $data;
    private $mail;
    private $telefon;
    private $cp;
    private $cicle;

    function __construct($nom, $cognom, $data, $mail, $telefon, $cp, $dni, $cicle){
        $this->nom = $nom;
        $this ->cognom = $cognom;
        $this ->data = $data;
        $this ->dni = $dni;
        $this ->mail = $mail;
        $this ->telefon = $telefon;
        $this ->cp = $cp;
        $this ->cicle = $cicle;
    }

    function __toString() {
        return '<table border="1"><tr><td>Nom</td><td>' . $this->nom . '</td></tr>
        <tr><td>Cognom </td><td>' . $this->cognom . '</td></tr>
        <tr><td>Data </td><td>' . $this->data . '</td></tr>
        <tr><td>Mail </td><td>' . $this->mail . '</td></tr>
        <tr><td>Telefon </td><td>' . $this->telefon . '</td></tr>
        <tr><td>Codi Postal </td><td>' . $this->cp . '</td></tr>
        <tr><td>Cicle </td><td>' . $this->cicle . '</td></tr></table>';
    }
}


$persona = new Persona($_POST['name'],
    $_POST['secondname'],
    $_POST['datanaixament'],
    $_POST['correu'],
    $_POST['telefon'],
    $_POST['codiPostal'],
    $_POST['dni'],
    $_POST['tipus']);

echo $persona;

