<?php 

class Movie {

    public $titolo;
    private $copertina;
    private $trama;
    public $anno;

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

}

$titanic = new Movie("Titanic","Copertina Titanic", "Descrizione Titanic", 1998);
$inception = new Movie("Inception", "Copertina Inception", "Descrizione Inception", 2010);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stampata a schermo</title>
    </head>
    <body>
        <h1>Movies</h1>
        <ul>
            <li> 
                <?php echo "{$titanic->titolo}" ?>
                <ul>
                    <li><?php echo "{$titanic->getCopertina()}" ?></li>
                    <li><?php echo "{$titanic->getTrama()}" ?></li>
                    <li><?php echo "{$titanic->anno}" ?></li>
                </ul>
            </li>
            <li> 
                <?php echo "{$inception->titolo}" ?> 
                <ul>
                    <li><?php echo "{$inception->getCopertina()}" ?></li>
                    <li><?php echo "{$inception->getTrama()}" ?></li>
                    <li><?php echo "{$inception->anno}" ?></li>
                </ul>
            </li>
        </ul>
    </body>
</html>

<style>

body {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

</style>