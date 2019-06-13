<?php
include '../inc/config.php';

if (isset($_POST['ArtikelHinzufuegen'])){
   // $picture = $_POST['Bild'];
    $articlename = $_POST['ArtikelName'];
    $price = $_POST['Preis'];
    $description = $_POST['Beschreibung'];
    $availability = $_POST['Verfuegbarkeit'];
    $rating = $_POST['Bewertung'];

    $query  = "INSERT INTO `artikel` ( ArtikelName, Peis, Beschreibung, Verfuegbarkeit, Bewertung) VALUES ( '$articlename', '$price', '$description', '$availability', '$rating')";
    $result = mysqli_query($con, $query);

    header("location:../index.php");
}
else{
    echo "fail";
}

?>