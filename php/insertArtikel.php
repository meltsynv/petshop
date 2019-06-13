<?php
include '../inc/config.php';

if (isset($_POST['ArtikelHinzufügen'])){
    $picture = $_POST['Bild'];
    $articlename = $_POST['Name'];
    $price = $_POST['Preis'];
    $description = $_POST['Beschreibung'];
    $availability = $_POST['Verfügbarkeit'];
    $rating = $_POST['Bewertung'];

    $query  = "INSERT INTO `user` (Bild, Name, Peis, Beschreibung, Verfügbarkeit, Bewertung) VALUES ('$picture', '$articlename', '$price', '$description', '$availability', '$rating')";
    $result = mysqli_query($con, $query);

    header("location:../index.php");
}
else{
    echo "fail";
}

?>