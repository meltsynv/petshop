<?php
include '../inc/config.php';

if (isset($_POST['removeArticle'])){
    $id = $_GET['ID'];
    $loesch = mysqli_query($con, "DELETE FROM produkte WHERE ID = '$id'");
    header("location:../adminProduktübersicht.php");
}
else{
    echo "fail";
}

?>