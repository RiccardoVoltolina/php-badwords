<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="paragraph" id="paragraph">
        <input type="password" name="password" id="password">
        <button type="submit">invia</button>
    </form>
    <p>paragrafo: <?php echo $_GET['paragraph'] ?></p>
    <p>parola censurata: <?php echo $_GET['password'] ?></p>
    
</body>
</html>