<?php
include '../inc/config.php';

if (isset($_POST['loginBtn'])){
    $email = $_POST['Email'];
    $password = $_POST['Passwort'];

    $query  = "SELECT * FROM user";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result)) {
        if ($password == $row[4] && $row[2] == $email) {
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
