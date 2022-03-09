<?php
    require_once('template_header.php');
    require_once('template_menu.php');

    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
?>

<header>
    <h1>TP2 : Mon premier site Web (avec PHP !)</h1>
</header>

<?php
    renderMenuToHTML($currentPageId);
?>

<div class="content">
    <?php
        $pageToInclude = $currentPageId . ".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
        else
            require_once("error.php");
    ?>
</div>

<?php
    require_once('template_footer.php');
?>