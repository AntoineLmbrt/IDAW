<?php
    require_once('header.php');
    $defaultStyle = 'style1';
    if (isset($_GET['css'])) {
        if(isset($_COOKIE['style'])) {
            setcookie('style', $_GET['css']);
        }
    }
?>

<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<h1>Exemple du style</h1>


<?php
    require_once('footer.php');
?>