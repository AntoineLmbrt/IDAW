<?php
    function renderMenuToHTML($currentPageId, $currentLang) {

        $mymenu = array(
            'home' => array(
                'en' => 'HOME', 
                'fr' => 'ACCUEIL'
            ),
            'cv' => array(
                'en' => 'CV', 
                'fr' => 'CV'
            ),
            'projects' => array(
                'en' => 'PROJECTS',
                'fr' => 'PROJETS'
            ),
            'contact' => array(
                'en' => 'CONTACT', 
                'fr' => 'CONTACT'
            )
            );

        echo('<nav class="menu"><ul>');

        foreach($mymenu as $pageId => $pageParameters) {
            if ($pageId === $currentPageId) {
                echo('<li><a id="currentpage" href="index.php?page='.$pageId.'&lang='.$currentLang.'">'.$pageParameters[$currentLang].'</a></li>');
            }
            else {
                echo('<li><a href="index.php?page='.$pageId.'&lang='.$currentLang.'">'.$pageParameters[$currentLang].'</a></li>');
            }
        }

        echo('</ul></nav>');
        

        echo('<nav class="languages"><ul>
                <li><a><img class="lang" src="assets/france.png"></a></li>
                <li><a><img class="lang" src="assets/UK.png"></a></li>
            </nav></ul>'
        );

    }
?>