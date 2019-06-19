<?php
include '../inc/config.php';

//Überprüfung, ob Button "SubmitButton" zum Hinzufügen eines Nutzers geklickt wurden
if (isset($_POST['SubmitButton'])){
    $forename = $_POST['Vorname'];
    $surname = $_POST['Nachname'];
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $password = $_POST['Passwort'];

    $query  = "INSERT INTO `user` (Vorname, Nachname, Email, Username, Passwort) VALUES ('$forename', '$surname', '$email', '$username', '$password')";
    $result = mysqli_query($con, $query);

    header("location:../index.php");
}
else{
    echo "fail";
}


//function add_user($connection, $fn, $sn, $un, $pw)
//{
//    $salt1    = "qm&h*";
//    $salt2    = "pg!@";
//    $token    = hash('ripemd128', "$salt1$pw$salt2");
//
//    $query  = "INSERT INTO users User('$fn', '$sn', '$un', '$pw')";
//    $result = $connection->query($query);
//    if (!$result) die($connection->error);
//}
?>