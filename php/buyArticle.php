<?php
include '../inc/config.php';

session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
}
if (isset($_POST['cartBtn'])){
    $id = $_GET['ID'];
    $Availability = $_GET['Verfuegbarkeit'];

    $update = mysqli_query($con, "UPDATE produkte SET Stueck = '$Availability'-1 WHERE ID = '$id'");

    $query  = "INSERT INTO `kaeufe` (ArtikelID, Username, Datum) VALUES ( '$id','$user', CURRENT_TIMESTAMP )";
    $result = mysqli_query($con, $query);
    header("location:../produktübersichtHund.php");
}
else{
    echo "fail";
}

?>