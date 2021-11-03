<?php

require_once __DIR__ . '/classes/Movie.php';

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
                    <li><?php echo "{$inception->setAnno(2005)} {$inception->getAnno()}" ?></li>
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