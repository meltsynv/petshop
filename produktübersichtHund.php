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
            <table class="table table-striped">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Preis</th>
                    <th scope="col">Stück</th>
                    <th scope="col">Bild</th>
                    <th scope="col">Beschreibung</th>
                </tr>
                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['Name'];
                        $preis = $row['Preis'];
                        $stueck = $row['Stueck'];
                        $bild = $row['Bild'];
                        $beschreibung = $row['Beschreibung'];
                ?>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $preis ?></td>
                    <td><?php echo $stueck ?></td>
                    <td><img src="<?php echo $bild ?>"></td>
                    <td><?php echo $beschreibung ?></td>
                </tr>
                    <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php include 'inc/bottom.php'?>