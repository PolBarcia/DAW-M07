<?php


class Books
{
    private $libros = array(
        1 => 'El juego del alma',
        2 => 'Independencia',
        3 => 'El infinito en un junco',
        4 => 'Breve tratado sobre la estupidez humana',
        5 => 'Una herencia peligrosa (Amanda Black 1)',
        6 => 'Reina roja');

    /*
        you should hookup the DAO here
    */
    public function getAllBooks(){
        return $this->libros;
    }

    public function getBook($id){

        $book = array($id => ($this->libros[$id]) ? $this->libros[$id] : $this->libros[1]);
        return $book;
    }
}