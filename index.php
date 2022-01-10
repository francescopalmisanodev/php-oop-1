<?php
class Movie
{
    public $titolo;
    public $autore;
    public $anno;

    public function __construct($titolo, $autore, $anno)
    {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->anno = $anno;
    }
    public function uslessFunction()
    {
    }
}



$spiderMan = new Movie("SpiderMan No Way Home", "Paolo Duzioni", 2021);
var_dump($spiderMan);
