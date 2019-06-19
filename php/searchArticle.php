<?php
include "../inc/config.php";

//Überprüfung, ob Button "searchBtn" geklickt wurde
if (isset($_POST['userSearch'])){
    $input = $_POST['searchLabel'];
    //DB-Abfrage
    $query = "SELECT * FROM produkte WHERE Name LIKE '%$input%'";
    $result  = mysqli_query($con, $query);
    ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th scope="col">Bild</th>
                    <th scope="col">Name</th>
                    <th scope="col">Preis</th>
                    <th scope="col">Beschreibung</th>
                    <th scope="col">Verfügbarkeit</th>
                    <th scope="col">Bewertung</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $bild = $row['Bild'];
                    $articlename = $row['Name'];
                    $preis = $row['Preis'];
                    $beschreibung = $row['Beschreibung'];
                    $verfuegbarkeit = $row['Stueck'];

                    ?>
                    <tr>
                        <td><img src="<?php echo $bild ?>"width="200"></td>
                        <td><?php echo $articlename ?></td>
                        <td><?php echo $preis ?></td>
                        <td><?php echo $beschreibung ?></td>
                        <td><?php echo $verfuegbarkeit ?></td>
                        <td><form method="post" action="produktansicht.php?ID=<?php echo $id ?>"><button type="submit" name="showBtn">anzeigen</button></form></td>
                    </tr>
                <?php }} ?>
            </table>
        </div>
    </div>
</div>

