<?php
include '../inc/config.php';

if (isset($_POST['ArtikelLoeschen'])){


    $loesch = mysqli_query($con, "DELETE FROM user WHERE ID = '4'");
    header("location:../adminNutzerliste.php");
}
else{
    echo "fail";
}

?>