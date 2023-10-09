<?php

var_dump($_GET);

$paragraph = $_GET['paragraph'];
$censured_text = $_GET['censured_text'];
$censured_text_lenght = strlen($censured_text);
$censured_world = substr_replace('', str_repeat('*', $censured_text_lenght), $censured_text_lenght);




?>


<!DOCTYPE html>
<html lang="en">
<body>
   paragrafo: <p><?php echo $_GET["paragraph"]?> <?php echo strlen($paragraph)?></p>
   parola censurata: <p><?php echo $_GET["censured_text"]?> <?php echo strlen($censured_text)?></p>
   paragrafo con la parola censurata: <p><?php echo $censured_world ?></p>

    
</body>
</html>

