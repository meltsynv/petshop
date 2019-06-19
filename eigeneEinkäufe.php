<?php
include "inc/head.php";
include "inc/nav.php";
include "inc/config.php";

session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
}
$query1 = "SELECT * FROM kaeufe INNER JOIN produkte WHERE Username = '$user'";
$result = mysqli_query($con, $query1);
if ($row = mysqli_fetch_assoc($result)) {
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
                    <tr>
                    <td><img src="<?php echo $bild ?>" width="200"></td>
                    <td><?php echo $datum ?></td>
                    <td><?php echo $artikelName ?></td>
                    <td><?php echo $price ?></td>
                    </tr><?php } ?>
            </table>
        </div>
    </div>

<?php include 'inc/bottom.php'?>