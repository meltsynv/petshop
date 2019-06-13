<?php include 'inc/head.php'?>
<?php
include 'inc/config.php';

$query = 'SELECT * FROM user';

$result = mysqli_query($con, $query);

?>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" id="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Vorname</th>
                        <th scope="col">Nachname</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $vorname = $row['Vorname'];
                        $nachname = $row['Nachname'];
                        $email = $row['Email'];
                        ?>
                        <tr>
                            <td><?php echo $vorname ?></td>
                            <td><?php echo $nachname ?></td>
                            <td><?php echo $email ?></td>
                            <td> <button type="button" id="bearbeiten">bearbeiten</button></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <button type="button" id="NeueNutzer">Neue Nutzer hinzufügen</button>
    </div>



<?php include 'inc/bottom.php'?>