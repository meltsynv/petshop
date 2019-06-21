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

    //Bewertung wird markiert, wenn der Artikel vorher vom Nutzer gekauft wurde
    if($result){
        $query = 'SELECT bewertungen.User, bewertungen.ID, bewertungen.isBought, kaeufe.Username, kaeufe.ArtikelID
                  FROM bewertungen, kaeufe
                  WHERE bewertungen.User = kaeufe.Username AND bewertungen.ID = kaeufe.ArtikelID';

        $result = mysqli_query($con, $query);

        if($row = mysqli_fetch_assoc($result)) {
            $bewertungen_User = $row['User'];
            $bewertungen_ID = $row['ID'];
            $bewertungen_isBought = $row['isBought'];
            $kaeufe_User = $row['Username'];
            $kaeufe_ArtikelID = $row['ArtikelID'];

            if($bewertungen_User == $kaeufe_User && $bewertungen_ID == $kaeufe_ArtikelID){

                $query = "UPDATE bewertungen, kaeufe SET bewertungen.isBought = 'wurde von Nutzer gekauft' WHERE bewertungen.User = kaeufe.Username AND bewertungen.ID = kaeufe.ArtikelID";
                $result = mysqli_query($con, $query);
            }
        }
    }

    //Die Bewertung wird dem aktiven Profil zugeordnet und auf der Profilseite angezeigt
    $query2 = "INSERT INTO `profil` (`Username`, `Datum`, `Kommentar`, `Note`, `Artikel`) VALUES ('$user', CURRENT_TIMESTAMP, '$kommentar', '$note', '$id')";
    $result2 = mysqli_query($con, $query2);

    header("location:../produktansicht.php?ID=$id");
}
else{
    echo "fail!";
}







