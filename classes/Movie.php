<?php

class Movie {

public $titolo;
private $copertina;
private $trama;
public $anno;

/**
 * __construct
 *
 * @param  string $_titolo
 * @param  string $_copertina
 * @param  string $_trama
 * @param  int $_anno
 * @return void
 */
function __construct($_titolo, $_copertina, $_trama, $_anno)
{
    $this->titolo = $_titolo;
    $this->copertina = $_copertina;
    $this->trama = $_trama;
    $this->anno = $_anno;
}

public function getCopertina()
{
    return $this->copertina;
}

public function getTrama()
{
    return $this->trama;
}

public function getAnno()
{
    return $this->anno;
}

public function setTrama($_trama)
{
    $this->trama = $_trama;
}

public function setAnno($_anno)
{
    $this->anno = $_anno;
}

}

$titanic = new Movie("Titanic","Copertina Titanic", "Descrizione Titanic", 1998);
$inception = new Movie("Inception", "Copertina Inception", "Descrizione Inception", 2010);

?>