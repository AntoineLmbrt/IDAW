<?php
    $servname = 'localhost';
    $dbname = 'tp3';
    $user = 'root';
    $pass = '';
    $conn = new mysqli($servname, $user, $pass, $dbname);
    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }

    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['pseudo'])) {
        $sql = "INSERT INTO user (login, password, pseudo)
        VALUES ('".$_POST['login']."', '".$_POST['password']."', '".$_POST['pseudo']."')";
        $conn->query($sql);
    }

    header('Location: login.php');
?>