<?php

var_dump($_GET);

$paragraph = $_GET['paragraph'];
$censured_text = $_GET['censured_text'];

//strlen per ottenere la lunghezza dell' array
$censured_text_lenght = strlen($censured_text);

//substr_replace= rimpiazza il testo con una stringa str_repeat= stringa da sostuituire
$censured_world = substr_replace('', str_repeat('*', $censured_text_lenght), $censured_text_lenght);




?>


<!DOCTYPE html>
<html lang="en">
<body>
   paragrafo: <p><?php echo $_GET["paragraph"]?> <?php echo strlen($paragraph)?></p>
   parola censurata: <p><?php echo $_GET["censured_text"]?> <?php echo strlen($censured_text)?></p>
   paragrafo con la parola censurata: <p><?php echo $censured_world ?> <?php echo $_GET["paragraph"]?></p>

    
</body>
</html>

