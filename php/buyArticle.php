<?php
include '../inc/config.php';

session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
}
if (isset($_POST['cartBtn'])){
    $id = $_GET['ID'];
    $Availability = $_GET['Verfuegbarkeit'];

    // Die Verfügbarkeit wird beim Kauf um eins reduziert
    $update = mysqli_query($con, "UPDATE produkte SET Stueck = '$Availability'-1 WHERE ID = '$id'");

    // Die Bewertung wird markiert, wenn der Nutzer den Artikel gekauft hat
    $update2 = mysqli_query($con, "UPDATE bewertungen SET isBought = 'wurde von Nutzer gekauft' WHERE ID = '$id' AND `User` ='$user'");

    // Der Artikel wird in die Liste der Käufe aufgenommen
    $query  = "INSERT INTO `kaeufe` (ArtikelID, Username, Datum) VALUES ( '$id','$user', CURRENT_TIMESTAMP )";
    $result = mysqli_query($con, $query);
    header("location:../produktübersichtHund.php");
}
else{
    echo "fail";
}

?>