<?php
include '../inc/head.php';
include '../inc/config.php';

session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];

    if (isset($_POST['cartBtn'])){
        $id = $_GET['ID'];
        $Availability = $_GET['Verfuegbarkeit'];

        // Die Verfügbarkeit wird beim Kauf um eins reduziert
        $update = mysqli_query($con, "UPDATE produkte SET Stueck = '$Availability'-1 WHERE ID = '$id'");

        // Die Bewertung wird markiert, wenn der Nutzer den Artikel gekauft hat
        $update2 = mysqli_query($con, "UPDATE bewertungen b SET isBought = 'wurde von Nutzer gekauft' WHERE ID = '$id' AND b.User ='$user'");

        // Der Artikel wird in die Liste der Käufe aufgenommen
        $query  = "INSERT INTO `kaeufe` (ArtikelID, Username, Datum) VALUES ( '$id','$user', CURRENT_TIMESTAMP )";
        $result = mysqli_query($con, $query);
        header("location:../produktübersichtHund.php");
    }
    else{
        echo "fail";
    }
}else{?>
    <div class="row">
        <div class="col ml-3">
            <?php $id = $_GET['ID'];
            echo "Melde dich bitte an bevor du diesen Artikel kaufst.";?>
            <br><br><a href="../login.php">anmelden</a>
            <br><a href="../produktansicht.php?ID=<?php echo $id ?>">zurück</a>
        </div>
    </div>
<?php
}
include "../inc/bottom.php";