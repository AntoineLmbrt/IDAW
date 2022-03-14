<?php
    session_start();
    $defaultStyle = 'style1';
    if (isset($_GET['css'])) {
        if(isset($_COOKIE['style'])) {
            setcookie('style', $_GET['css']);
        }
    }
    require_once('header.php');
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
    if (isset($_SESSION['login'])) {
        echo '<h1>Bienvenu ' . $_SESSION['login'] . '!</h1>';
    }
?>

<?php
    echo '<a href="logout.php"><p>Se déconnecter</p></a>';
?>

<?php
    require_once('footer.php');
?>