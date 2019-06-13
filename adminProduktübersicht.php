<?php include 'inc/head.php'?>
<?php include 'inc/nav.php'?>
<?php
include 'inc/config.php';

$query = 'SELECT * FROM artikel';

$result = mysqli_query($con, $query);

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
                        <th scope="col"></th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $bild = $row['Bild'];
                        $articlename = $row['ArtikelName'];
                        $preis = $row['Preis'];
                        $beschreibung = $row['Beschreibung'];
                        $verfuegbarkeit = $row['Verfuegbarkeit'];
                        $bewertung= $row['Bewertung'];
                        ?>
                        <tr>
                            <td><img src="<?php echo $bild ?>"></td>
                            <td><?php echo $articlename ?></td>
                            <td><?php echo $preis ?></td>
                            <td><?php echo $beschreibung ?></td>
                            <td><?php echo $verfuegbarkeit ?></td>
                            <td><?php echo $bewertung ?></td>
                            <td> <button type="button" id="bearbeiten">bearbeiten</button></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <button type="button" id="NeuArtikel">Neuen Artikel hinzufügen</button>
    </div>

<?php include 'inc/bottom.php'?>