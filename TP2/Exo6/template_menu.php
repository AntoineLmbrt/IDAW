<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui définit la structure du site
        $mymenu = array(
            //idPage titre
            'accueil' => array('ACCEUIL'),
            'cv' => array('CV'),
            'projets' => array('PROJETS'),
            'contact' => array('CONTACT')
        );
        
        echo('<nav class="menu"><ul>');

        foreach($mymenu as $pageId => $pageParameters) {
            if ($pageId === $currentPageId) {
                echo('<li><a id="currentpage" href="index.php?page='.$pageId.'">'.$pageParameters[0].'</a></li>');
            }
            else {
                echo('<li><a href="index.php?page='.$pageId.'">'.$pageParameters[0].'</a></li>');
            }
        }

        echo('</ul></nav>');
    }
?>