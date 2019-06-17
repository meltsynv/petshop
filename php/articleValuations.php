<?php

error_reporting(E_ALL);
// Zum Aufbau der Verbindung zur Datenbank
define ( 'MYSQL_HOST',      'localhost' );
define ( 'MYSQL_BENUTZER',  'root' );
define ( 'MYSQL_KENNWORT',  '' );
define ( 'MYSQL_DATENBANK', 'petshop' );

$con = mysqli_connect (MYSQL_HOST, MYSQL_BENUTZER, MYSQL_KENNWORT, MYSQL_DATENBANK);

if ($con){
    //echo 'Verbindung erfolgreich: ';
}else{
    // hier sollte dann später dem Programmierer eine
    // E-Mail mit dem Problem zukommen gelassen werden
    die('keine Verbindung möglich: ' . mysqli_error());
}


if (isset($_POST['commentBtn'])){

    $kommentar = $_POST['Kommentar'];
    $note = $_POST['Note'];
    $id = $_GET['ID'];

    $query = "INSERT INTO `bewertungen` (`ID`, `Kommentar`, `Note`, `Datum`) VALUES ('$id', '$kommentar', '$note', CURRENT_TIMESTAMP)";

    $result = mysqli_query($con, $query);
    header("location:../produktansicht.php");
}
else{
    echo "fail!";
}

