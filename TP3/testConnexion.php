<?php
    $servname = 'localhost';
    $dbname = 'TP3';
    $user = 'root';
    $pass = '';
    
    $conn = new mysqli($servname, $user, $pass, $dbname);

    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }

    $sql = "SELECT * FROM User";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo '<table id="testConnexion"><tr>';
        echo '<th>id</th>';
        echo '<th>login</th>';
        echo '<th>password</th>';
        echo '<th>pseudo</th></tr>';
        while($row = $result->fetch_assoc()) {
            echo '<tr><th>'.$row['id'].'</th>';
            echo '<th>'.$row['login'].'</th>';
            echo '<th>'.$row['password'].'</th>';
            echo '<th>'.$row['pseudo'].'</th></tr>';
        }
        echo '</table>';
    } else {
        echo "0 results";
    }

?>
        