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

<header>
    <h1>TP3 : Cookies, Sessions, BDD</h1>
    <form id="style_form" action="index.php" method="GET">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>
    <?php
        if (isset($_SESSION['login']) && !isset($_GET['disconnect'])) {
            echo '<div id="connected"><h2>Salut ' . $_SESSION['login'] . ' !</h2>';
            echo '<a href="index.php?disconnect"><p>Se déconnecter</p></a></div>';
        } else {
            if(isset($_GET['signup'])) {
                require_once('signup.php');
                unset($_GET['signup']);
            } else {
                require_once('login.php');
                echo '<div id="signup"><a href="index.php?signup">Pas encore inscrit ?</a></div>';
            }
        }
    ?>
</header>

<div class="content">
    <?php
        if(isset($_GET['inscrit'])) {
            unset($_GET['inscrit']);
            echo '<h3>Vous venez de vous inscrire, veuillez vous connecter !</h3>';
        }
        if(isset($_GET['disconnect'])) {
            session_unset();
            session_destroy();
            unset($_GET['disconnect']);
            echo '<h3>Vous venez de vous déconnecter, à bientôt !</h3>';
        }
        echo '<div><a href="index.php?testConnexion"><p>Tester la connexion avec la base de données</p></a></div>';
        if (isset($_GET['testConnexion'])) {
            unset($_GET['testConnexion']);
            require_once('testConnexion.php');
        }
    ?>
</div>

<?php
    require_once('footer.php');
?>