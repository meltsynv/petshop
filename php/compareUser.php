<?php
include '../inc/config.php';

//Überprüfung, ob Button "loginBtn" geklickt wurde
if (isset($_POST['loginBtn'])){
    $email = $_POST['Email'];
    $password = $_POST['Passwort'];

    $query  = "SELECT * FROM user";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result)) {

        //Einloggen möglich wenn E-Mail Adresse und Passwort mit einem Datenbankeintrag übereinstimmen
        if ($password == $row[4] && $row[2] == $email) {

            //Session für den eingeloggten User startet
            session_start();
            $_SESSION['Username'] = $row[3];
            echo $_SESSION['Username'];
            header("location:../index.php");
        }
        else{
            echo "Bitte geben Sie die korrekten Zugangsdaten ein.";
        }
    }
}
else{
    echo "fail";
}
