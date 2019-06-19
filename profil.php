<?php
include "inc/head.php";
include "inc/nav.php";
include "inc/config.php";

session_start() ;
if (isset($_SESSION['Username'])) {
    $user = $_SESSION['Username'];
}
$query1 = "SELECT * FROM user WHERE Username = '$user'";
$result = mysqli_query($con, $query1);
if ($row = mysqli_fetch_assoc($result)) {
    $vorname = $row['Vorname'];
    $nachname = $row['Nachname'];

?>
 <div class="pageContainer">
    <div class="row justify-content-center">
        <div class="col-4">
            <h4>Guten Tag <?php echo $vorname," ", $nachname ;}?>!</h4>
        </div>
    </div>
     <div class="row justify-content-center">
        <div class="col-4">
            <table class="table table-striped">
                <thead><b>Deine Bewertungen:</b> </thead>
                <tr>
                    <th scope="col">Datum</th>
                    <th scope="col">Note</th>
                    <th scope="col">Kommentar</th>
                </tr>
                <?php
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
                    <td><?php echo $note ?></td>
                    <td><?php echo $kommentar ?></td>
                </tr><?php } ?>
            </table>
        </div>
    </div>

 </div>



<?php

include "inc/bottom.php";
