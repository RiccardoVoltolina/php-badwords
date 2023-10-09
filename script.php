<?php

var_dump($_GET);

$paragraph = $_GET['paragraph'];
$censured_text = $_GET['censured_text'];



?>


<!DOCTYPE html>
<html lang="en">
<body>
   paragrafo: <p><?php echo $_GET["paragraph"]?> <?php echo strlen($paragraph)?></p>
   parola censurata: <p><?php echo $_GET["censured_text"]?> <?php echo strlen($censured_text)?></p>

    
</body>
</html>

