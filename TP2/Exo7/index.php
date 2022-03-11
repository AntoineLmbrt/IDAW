<?php

    require_once('template_header.php');
    require_once('template_title.php');
    require_once('template_menu.php');

    $currentLang ='fr';
    if(isset($_GET['lang'])) {
        $currentLang = $_GET['lang'];
    }

    $currentPageId = 'home';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }

    renderLangMenuToHTML($currentPageId, $currentLang);
?>

<header>
    <?php
        renderTitleToHTML($currentLang);
    ?>
</header>

<?php
    renderMenuToHTML($currentPageId, $currentLang);
?>

<div class="content">
    <?php
        $pageToInclude = $currentLang . '/' . $currentPageId . ".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
        else
            require_once("error.php");
    ?>
</div>

<?php
    require_once('template_footer.php');
?>