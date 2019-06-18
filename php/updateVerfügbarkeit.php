<?php
include '../inc/config.php';

if (isset($_POST['updateVerfuegbarkeit'])){
    $id = $_GET['ID'];
    $newAvailability = $_POST['VerfuegbarkeitNeu'];


    $update = mysqli_query($con, "UPDATE produkte Set Stueck = $newAvailability WHERE ID = '$id'");
    header("location:../adminProduktübersicht.php");
}
else{
    echo "fail";
}

?>