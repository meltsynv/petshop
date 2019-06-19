<?php
include "inc/head.php";
include "inc/nav.php";
include "inc/config.php";

//Abfrage, welcher User eingeloggt ist
session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
}
//DB-Abfrage nach gekauften Artikel von aktivem Nutzer
$query3 = "SELECT * FROM kaeufe INNER JOIN produkte WHERE Username = '$user'";
$result3 = mysqli_query($con, $query3);

if ($row = mysqli_fetch_assoc($result3)) {
    $bild = $row['Bild'];
    $artikelName = $row['Name'];
    $datum = $row['Datum'];
    $price= $row['Preis'];

    ?>


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
                //Ausgabe der Ergebnisse
                while ($row = mysqli_fetch_assoc($result3)) {
                    $username = $row['Username'];
                    $vorname = $row['Vorname'];
                    $nachname = $row['Nachname'];
                    $email = $row['Email'];
                    ?>
                <tr>
                    <td><img src="<?php echo $bild ?>" width="200"></td>
                    <td><?php echo $datum ?></td>
                    <td><?php echo $artikelName ?></td>
                    <td><?php echo $price ?></td>
                </tr><?php }}?>
            </table>
        </div>
    </div>

<?php include 'inc/bottom.php'?>