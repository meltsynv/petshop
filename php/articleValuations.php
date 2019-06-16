<?php include "../inc/config.php";

if (isset($_POST['commentBtn'])){

    $kommentar = $_POST['Kommentar'];
    $note = $_POST['Note'];
    $id = $_POST[''];

    $query = 'INSERT INTO bewertungen (ID, Kommentar, Note) VALUES ($id, $kommentar, $note)';
    $result = mysqli_query($con, $query);

    header("location:../produktansicht.php");

}
else{
    echo "fail";
}

