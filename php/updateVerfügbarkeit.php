<?php
include '../inc/config.php';

if (isset($_POST['updateVerfuegbarkeit'])){

    $newAvailability = $_POST['VerfuegbarkeitNeu'];


    $update = mysqli_query($con, "UPDATE artikel Set Verfuegbarkeit = $newAvailability WHERE ID = '1'");
    header("location:../index.php");
}
else{
    echo "fail";
}

?>