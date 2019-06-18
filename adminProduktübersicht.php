<?php include 'inc/head.php'?>
<?php include 'inc/nav.php'?>
<?php
include 'inc/config.php';

$query = "SELECT * FROM produkte INNER JOIN bewertungen WHERE produkte.ID = bewertungen.ID ";

$result = mysqli_query($con, $query);

?>
    <div class="container">
        <input type="text" name="search" id="search" class="form-control" placeholder="Nach Artikel suchen..."/>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped" id="overview">
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
                        $id = $row['ID'];
                        $bild = $row['Bild'];
                        $articlename = $row['Name'];
                        $preis = $row['Preis'];
                        $beschreibung = $row['Beschreibung'];
                        $verfuegbarkeit = $row['Stueck'];
                        $bewertung=  $row['Note'];
                        ?>
                        <tr>
                            <td><img src="<?php echo $bild ?>" width="200"></td>
                            <td><?php echo $articlename ?></td>
                            <td><?php echo $preis ?></td>
                            <td><?php echo $beschreibung ?></td>
                            <td><?php echo $verfuegbarkeit ?></td>
                            <td><?php echo $bewertung ?></td>
                            <td><form method="post" action="adminProduktbearbeiten.php?ID=<?php echo $id ?>"><button type="submit" name="updateProdukt">bearbeiten</button></form></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <button type="button" id="NeuArtikel">Neuen Artikel hinzufügen</button>
    </div>

    <script>
        $(document).ready(function () {
            $('#search').keyup(function () {
                search_table($(this).val());
            });

            function search_table(value) {
                $('#overview tr').each(function () {
                    var found = 'false';
                    $(this).each(function () {
                        if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                            found = 'true';
                        }
                    });
                    if (found == 'true') {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>

<?php include 'inc/bottom.php'?>