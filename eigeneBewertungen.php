<?php include 'inc/head.php'?>
<?php
include 'inc/config.php';

$query = 'SELECT * FROM bewertungen INNER JOIN produkte WHERE bewertungen.user = $user AND produkte.id = bewertungen.id';

$result = mysqli_query($con, $query);

?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Artikel</th>
                        <th scope="col">Preis</th>
                        <th scope="col">Bewertung</th>
                        <th scope="col">Kommentar</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $username = $row['Username'];
                        $vorname = $row['Vorname'];
                        $nachname = $row['Nachname'];
                        $email = $row['Email'];
                        ?>
                        <tr>
                            <td><?php echo $vorname ?></td>
                            <td><?php echo $nachname ?></td>
                            <td><?php echo $email ?></td>
                            <td><form method="post" action="php/removeUser.php?Username=<?php echo $username ?>"><button type="submit" name="NutzerLoeschen">löschen</button></form></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>



<?php include 'inc/bottom.php'?>