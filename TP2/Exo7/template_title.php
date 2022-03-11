<?php
    function renderTitleToHTML($currentLang) {
        $myTitle = array(
            'en' => 'TP2 : My first website (with PHP !)',
            'fr' => 'TP2 : Mon premier site Web (avec PHP !)',
            'es' => 'TP2 : Mi primer sitio web (¡con PHP!)'
        );

        echo('<h1>'.$myTitle[$currentLang].'</h1>');
    }
?>