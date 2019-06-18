<?php include 'inc/head.php'?>
<?php include 'inc/nav.php';
include 'inc/config.php';


    $id = $_GET['ID'];
    $query = "SELECT * FROM produkte INNER JOIN bewertungen WHERE produkte.ID = '$id' AND bewertungen.ID = '$id'";

    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $id = $_GET['ID'];
        $bild = $row['Bild'];
        $name = $row['Name'];
        $preis = $row['Preis'];
        $stueck = $row['Stueck'];
        $beschreibung = $row['Beschreibung'];
        ?>


        <div class="container">
            <div class="row">
                <div class="d-flex flex-row bd-highlight pl-3 pt-3 mb-3">
                    <div class="row">
                        <div class="col pr-0 mr-0"><img src="<?php echo $bild ?>" alt="" width="400px"></div>
                        <div class="col-5 pl-2 mr-0">
                            <h1><?php echo $name ?></h1><br><br>
                            <h5><?php echo $beschreibung ?></h5><br>
                            <h7><?php echo $stueck ?> Stück auf Lager</h7>

                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <br><h3><?php echo $preis ?>€</h3><p>
                            <button class="btn btn-outline-success" type="submit" id="cartBtn" >Zum Warenkorb hinzufügen</button>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-striped">
                        <thead><b>Bertungen für diesen Artikel:</b></thead>
                        <th scope="col">User</th>
                        <th scope="col">Note</th>
                        <th scope="col">Kommentar</th>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $user = $row['User'];
                            $kommentar = $row['Kommentar'];
                            $note = $row['Note']; ?>
                        <tr>
                            <td><?php echo $user ?></td>
                            <td><?php echo $note ?></td>
                            <td><?php echo $kommentar ?></td>
                        </tr><?php } ?>
                    </table>
                </div>
            </div>
            <div>
                <form method = 'post' action = 'php/articleValuations.php?ID=<?php echo $id ?>' >
                    <b>Eigene Bewertung hinterlassen:</b><br><br>
                    Schulnote: <input name="Note" type="number" max="6.0" min="1.0" ><br>
                    <textarea name = 'Kommentar' cols = '40' rows = '3' placeholder="Ihr Kommentar..."></textarea ><br><br>
                    <button class="btn btn-outline-success" type="submit" id="commentBtn" >Abschicken</button>
                </form >
            </div>
        </div>
        <?php


} include 'inc/bottom.php'?>