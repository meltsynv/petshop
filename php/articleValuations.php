<?php
include "../inc/config.php";

session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
}

if (isset($_POST['commentBtn'])){
    $kommentar = $_POST['Kommentar'];
    $note = $_POST['Note'];
    $id = $_GET['ID'];

    $query = "INSERT INTO `bewertungen` (`ID`, `Kommentar`, `Note`, `Datum`, `User`) VALUES ('$id', '$kommentar', '$note', CURRENT_TIMESTAMP, '$user')";
    $query2 = "INSERT INTO `profil` (`Username`, `Datum`, `Kommentar`, `Note`, `Artikel`) VALUES ('$user', CURRENT_TIMESTAMP, '$kommentar', '$note', '$id')";

    $result = mysqli_query($con, $query);
    $result2 = mysqli_query($con, $query2);
    header("location:../produktansicht.php?ID=$id");
}
else{
    echo "fail!";
}

