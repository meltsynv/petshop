<?php
include '../inc/config.php';

if (isset($_POST['NutzerLoeschen'])){
    $username = $_GET['Username'];

    $loesch = mysqli_query($con, "DELETE FROM user WHERE Username = '$username'");
    header("location:../adminIndex.php");
}
else{
    echo "fail";
}

?>