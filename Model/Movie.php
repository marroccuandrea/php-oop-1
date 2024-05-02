<?php
class Movie
{
    public $nome;
    public $genere;
    public $anno;
    public $regista;

    public function __construct(string $_nome, string $_genere, int $_anno, string $_regista)
    {
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->anno = $_anno;
        $this->regista = $_regista;
    }

    public function getFullMovie()
    {
        return "$this->nome, $this->genere, $this->anno, $this->regista";
    }

    public function getFullName()
    {
        return "$this->nome";
    }

    public function getFullGenre()
    {
        return "$this->genere";
    }

    public function getFullYear()
    {
        return "$this->anno";
    }

    public function getFullDirector()
    {
        return "$this->regista";
    }
}
