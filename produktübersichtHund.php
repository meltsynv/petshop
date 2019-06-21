<?php include 'inc/head.php'?>
<?php include 'inc/nav.php'?>
<?php
include 'inc/config.php';

$query = 'SELECT * FROM produkte';

$result = mysqli_query($con, $query);

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Produkte auflisten -->
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
                    <td><img src="img/<?php echo $bild ?>"width="200"></td>
                    <td><?php echo $articlename ?></td>
                    <td><?php echo $preis ?></td>
                    <td><?php echo $beschreibung ?></td>
                    <td><?php echo $verfuegbarkeit ?></td>
                    <td><form method="post" action="produktansicht.php?ID=<?php echo $id ?>">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="showBtn">anzeigen</button>
                        </form></td>
                </tr>
                    <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php include 'inc/bottom.php'?>