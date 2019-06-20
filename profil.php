<?php
include "inc/head.php";
include "inc/nav.php";
include "inc/config.php";

session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
}
else{
    header("location:login.php");

}
//Zugriff auf die Login Daten des aktiven Nutzers
$query1 = "SELECT * FROM user WHERE Username = '$user'";
$result = mysqli_query($con, $query1);
if ($row = mysqli_fetch_assoc($result)) {
    $vorname = $row['Vorname'];
    $nachname = $row['Nachname'];

?>
 <div class="pageContainer">
    <div class="row justify-content-center">
        <div class="col-3">
            <br><h4>Guten Tag <?php echo $vorname," ", $nachname ;}?>!</h4>
        </div>
        <div class="row align-items-end">
            <form method="post" action="php/logout.php">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logoutBtn">ausloggen</button>
            </form>
        </div>
    </div>
     <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-striped">
                <thead><b>Deine Bewertungen:</b> </thead>
                <tr>
                    <th scope="col">Datum</th>
                    <th scope="col">Produkt ID</th>
                    <th scope="col">Note</th>
                    <th scope="col">Kommentar</th>
                </tr>
                <?php
                //Auflistung der eigenen Bewertungen
                $query2 = "SELECT * FROM profil WHERE Username = '$user'";
                $result2= mysqli_query($con, $query2);
                while ($row = mysqli_fetch_assoc($result2)) {
                    $user = $row['Username'];
                    $datum = $row['Datum'];
                    $kommentar = $row['Kommentar'];
                    $note = $row['Note'];
                    $produktId = $row['Artikel'];
                    ?>
                <tr>
                    <td><?php echo $datum ?></td>
                    <td><a href="produktansicht.php?ID=<?php echo $produktId ?>"><?php echo $produktId ?></a></td>
                    <td><?php echo $note ?></td>
                    <td><?php echo $kommentar ?></td>
                </tr><?php } ?>
            </table>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-striped">
                <thead><b>Deine Käufe:</b> </thead>
                <tr>
                    <th scope="col">Bild</th>
                    <th scope="col">Datum</th>
                    <th scope="col">Produkt</th>
                    <th scope="col">Preis</th>
                </tr>
                <?php
                //Ausgabe der Ergebnisse, welche der User gekauft hat
                $query3 = "SELECT * FROM kaeufe INNER JOIN produkte WHERE kaeufe.Username = '$user' AND kaeufe.ArtikelID = produkte.ID";
                $result3 = mysqli_query($con, $query3);
                while ($row = mysqli_fetch_assoc($result3)) {
                    $bild = $row['Bild'];
                    $datum = $row['Datum'];
                    $artikelName = $row['Name'];
                    $price = $row['Preis'];
                    ?>
                    <tr>
                    <td><img src="img/<?php echo $bild ?>" width="200"></td>
                    <td><?php echo $datum ?></td>
                    <td><?php echo $artikelName ?></td>
                    <td><?php echo $price ?>€</td>
                    </tr><?php }?>
            </table>
        </div>
    </div>
 </div>



<?php

include "inc/bottom.php";
