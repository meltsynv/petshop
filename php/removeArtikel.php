<?php
include '../inc/config.php';

if (isset($_POST['ArtikelLoeschen'])){


    $loesch = mysqli_query($con, "DELETE FROM artikel WHERE ID = '3'");
    header("location:../index.php");
}
else{
    echo "fail";
}

?>