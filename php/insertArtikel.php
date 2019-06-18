<?php
include '../inc/config.php';

if (isset($_POST['ArtikelHinzufuegen'])){
    $articlename = $_POST['Name'];
    $price = $_POST['Preis'];
    $availability = $_POST['Stueck'];
    $picture = $_POST['Bild'];
    $description = $_POST['Beschreibung'];


    $query  = "INSERT INTO `produkte` (Name, Preis, Stueck, Bild, Beschreibung) VALUES ( '$articlename', '$price','$availability','$picture', '$description' )";
    $result = mysqli_query($con, $query);

    header("location:../adminProduktübersicht.php");
}
else{
    echo "fail";
}

?>