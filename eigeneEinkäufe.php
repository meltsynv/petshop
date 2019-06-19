<?php
include "inc/head.php";
include "inc/nav.php";
include "inc/config.php";

//Abfrage, welcher User eingeloggt ist
session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
}

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
                //Ausgabe der Ergebnisse, welche der User gekauft hat
                $query4 = "SELECT * FROM kaeufe INNER JOIN produkte WHERE Username = '$user'";
                $result4 = mysqli_query($con, $query4);
                while ($row = mysqli_fetch_assoc($result4)) {
                    $bild = $row['Bild'];
                    $datum = $row['Datum'];
                    $artikelName = $row['Name'];
                    $price = $row['Preis'];
                    ?>
                <tr>
                    <td><img src="<?php echo $bild ?>" width="200"></td>
                    <td><?php echo $datum ?></td>
                    <td><?php echo $artikelName ?></td>
                    <td><?php echo $price ?></td>
                </tr><?php }?>
            </table>
        </div>
    </div>

<?php include 'inc/bottom.php'?>