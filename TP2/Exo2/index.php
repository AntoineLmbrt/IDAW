<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>TP2 : PHP</title>
    </head>
    
    <body>
        <h1>TP2 : PHP</h1>
        
        <h2>2. PHP donne l'heure</h2>
        <?php
            date_default_timezone_set('Europe/Paris');
            echo date('d/m/Y H:i:s'). '<br>';
        ?>
    </body>
</html>