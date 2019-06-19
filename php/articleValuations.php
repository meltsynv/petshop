<?php
include "../inc/config.php";

//Username der eingeloggten Person wird abgefragt
session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
}
//Überprüfung, ob Button zum Abschicken des Bewertung geklickt wurde
if (isset($_POST['commentBtn'])){
    $kommentar = $_POST['Kommentar'];
    $note = $_POST['Note'];
    $id = $_GET['ID'];

    //Die Bewertung wird mit Note in eigene DB eingetragen (Fremdschlüssel ArtikelID)
    $query = "INSERT INTO `bewertungen` (`ID`, `Kommentar`, `Note`, `Datum`, `User`) VALUES ('$id', '$kommentar', '$note', CURRENT_TIMESTAMP, '$user')";
    $result = mysqli_query($con, $query);

    //Die Bewertung wird dem aktiven Profil zugeordnet und auf der Profilseite angezeigt
    $query2 = "INSERT INTO `profil` (`Username`, `Datum`, `Kommentar`, `Note`, `Artikel`) VALUES ('$user', CURRENT_TIMESTAMP, '$kommentar', '$note', '$id')";
    $result2 = mysqli_query($con, $query2);

    // Die Bewertung wird markiert, wenn der Nutzer den Artikel gekauft hat
    $update2 = mysqli_query($con, "UPDATE bewertungen b SET isBought = 'wurde von Nutzer gekauft' WHERE ID = '$id' AND b.User ='$user'");
    header("location:../produktansicht.php?ID=$id");
}
else{
    echo "fail!";
}

