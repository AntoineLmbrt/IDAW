<?php
    $servname = 'localhost';
    $dbname = 'TP3';
    $user = 'root';
    $pass = '';
    $conn = new mysqli($servname, $user, $pass, $dbname);
    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }
    
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
        $sql = "SELECT login, password FROM User WHERE login='".$tryLogin."' AND password='".$tryPwd."'";
        $result = $conn->query($sql);
        // si login existe et password correspond
        if($result->num_rows > 0) {
            $successfullyLogged = true;
            $login = $tryLogin;
            $password = $tryPwd;
        } else
            $errorText = "Erreur de login/password";
    } else
        $errorText = "Merci d'utiliser le formulaire de login";

    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        session_start();
        $_SESSION['login'] = $login;
        // echo "<h1>Bienvenu ".$login."</h1>";
        // echo "<h2><em>Login :</em> ".$login."</h2>";
        // echo "<h2><em>Password :</em> ".$password."</h2>";
        header('Location: index.php');
    }
?>
    