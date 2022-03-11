<?php
    function renderMenuToHTML($currentPageId, $currentLang) {

        $myMenu = array(
            'home' => array(
                'en' => 'HOME', 
                'fr' => 'ACCUEIL',
                'es' => 'INICIO'
            ),
            'cv' => array(
                'en' => 'CV', 
                'fr' => 'CV',
                'es' => 'CV'
            ),
            'projects' => array(
                'en' => 'PROJECTS',
                'fr' => 'PROJETS',
                'es' => 'PROYECTOS'
            ),
            'contact' => array(
                'en' => 'CONTACT', 
                'fr' => 'CONTACT',
                'es' => 'CONTACTO'
            )
            );

        echo('<nav class="menu"><ul>');

        foreach($myMenu as $pageId => $pageParameters) {
            if ($pageId === $currentPageId) {
                echo('<li><a id="currentpage" href="index.php?page='.$pageId.'&lang='.$currentLang.'">'.$pageParameters[$currentLang].'</a></li>');
            }
            else {
                echo('<li><a href="index.php?page='.$pageId.'&lang='.$currentLang.'">'.$pageParameters[$currentLang].'</a></li>');
            }
        }

        echo('</ul></nav>');
    }

    function renderLangMenuToHTML($currentPageId, $currentLang) {

        $myLanguages = array('en', 'fr', 'es');
        
        echo('<nav class="languages"><ul>');

        foreach($myLanguages as $lang) {
            echo('<li><a href = index.php?page='.$currentPageId.'&lang='.$lang.'><img class="lang" src="assets/flags/'.$lang.'.png"></a></li>');
        }
        echo('</ul></nav>');

    }
?>