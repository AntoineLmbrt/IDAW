<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>TP3</title>

        <!-- CSS files -->
        <?php
            if (isset($_GET['css'])) {
                echo '<link rel="stylesheet" href="'.$_GET['css'].'.css">';
            }
            else if (isset($_COOKIE['style'])) {
                echo '<link rel="stylesheet" href="'.$_COOKIE['style'].'.css">';
            } else {
                echo '<link rel="stylesheet" href="'.$defaultStyle.'.css">';
            }
        ?>
        
    </head>
    <body>