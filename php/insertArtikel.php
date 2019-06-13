<?php
include '../inc/config.php';

if (isset($_POST['ArtikelHinzufuegen'])){
    $picture = $_POST['Bild'];
    $articlename = $_POST['Name'];
    $price = $_POST['Preis'];
    $description = $_POST['Beschreibung'];
    $availability = $_POST['Verfuegbarkeit'];
    $rating = $_POST['Bewertung'];

    $query  = "INSERT INTO `artikel` (Bild, Name, Peis, Beschreibung, Verfuegbarkeit, Bewertung) VALUES ('$picture', '$articlename', '$price', '$description', '$availability', '$rating')";
    $result = mysqli_query($con, $query);

    header("location:../index.php");
}
else{
    echo "fail";
}

?>