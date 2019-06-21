<?php include 'inc/head.php'?>
<?php include 'inc/nav-2.php'?>
<?php
include 'inc/config.php';

//Datenbankabfrage
$query = "SELECT * FROM produkte";
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
                        <th scope="col"></th>

                    </tr>
                    <?php
                    //Ausgabe der Ergebnisse in einer Tabelle
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['ID'];
                        $bild = $row['Bild'];
                        $articlename = $row['Name'];
                        $preis = $row['Preis'];
                        $beschreibung = $row['Beschreibung'];
                        $verfuegbarkeit = $row['Stueck'];

                        //Ausgabe der Produktdaten in Tabelle
                        ?>
                        <tr>
                            <td><img src="img/<?php echo $bild ?>" width="200"></td>
                            <td><?php echo $articlename ?></td>
                            <td><?php echo $preis ?></td>
                            <td><?php echo $beschreibung ?></td>
                            <td><?php echo $verfuegbarkeit ?></td>
                            <td><form method="post" action="adminProduktbearbeiten.php?ID=<?php echo $id ?>"><button type="submit" name="updateProdukt">bearbeiten</button></form></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    <!-- Button für Aktion: Artikel hinzufügen-->
    <form action="artikelHinzufügen.php">
        <input type="submit" value="Neuen Artikel hinzufügen">
    </form>
</div>

<script>
    //dynamische Suche mit Ausgabe in einer Tabelle
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