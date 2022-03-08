<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui définit la structure du site
        $mymenu = array(
            //idPage titre
            'index' => array('ACCEUIL'),
            'cv' => array('CV'),
            'projets' => array('PROJETS'),
            'contact' => array('CONTACT')
        );
        
        echo('<nav class="menu"><ul>');

        foreach($mymenu as $pageId => $pageParameters) {
            if ($pageId === $currentPageId) {
                echo('<li><a id="currentpage" href="'.$pageId.'.php">'.$pageParameters[0].'</a></li>');
            }
            else {
                echo('<li><a href="'.$pageId.'.php">'.$pageParameters[0].'</a></li>');
            }
        }

        echo('</ul></nav>');
    }
?>