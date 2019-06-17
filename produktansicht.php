<?php include 'inc/head.php'?>
<?php include 'inc/nav.php';
include 'inc/config.php';

if (isset($_POST['showBtn'])){
    $id = $_GET['ID'];
    $query = "SELECT * FROM produkte INNER JOIN bewertungen WHERE produkte.ID = '$id' AND produkte.ID = '$id'";

    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $id = $_GET['ID'];
        $bild = $row['Bild'];
        $name = $row['Name'];
        $preis = $row['Preis'];
        $stueck = $row['Stueck'];
        $beschreibung = $row['Beschreibung'];
        ?>

        <div class="d-flex flex-row bd-highlight pl-3 pt-3 mb-3">
            <img src="<?php echo $bild ?>" alt="" width="400px">
            <div class="p-2 bd-highlight"><br><h1><?php echo $name ?></h1><br></div>
            <div class="d-flex flex-row bd-highlight">
                <div class=" p-2 bd-highlight"><br><h3><?php echo $beschreibung ?></h3><br></div>
                <div class="p-2 bd-highlight"><br><h3><?php echo $stueck ?> Stück auf Lager</h3><br></div>
                <div class="p-2 bd-highlight">
                    <br><h3><?php echo $preis ?>€</h3><p>
                        <button type="submit" id="cartBtn">Zum Warenkorb hinzufügen</button>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <tr>

                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $kommentar = $row['Kommentar'];
                            $note = $row['Note'];
                        } ?>
                    </table>
                </div>
            </div>
            <div>
                <form method = 'post' action = 'php/articleValuations.php?ID=<?php echo $id ?>' >
                    <b>Kommentar und Bewertung hinterlassen:</b><br><br>
                    Note: <input name="Note" type="number" max="6.0" min="1.0" >
                    <textarea name = 'Kommentar' cols = '40' rows = '3' ></textarea ><br>
                    <input type = 'submit' name = 'commentBtn' ></form ><br>
            </div>
        </div>
        <?php
    }

} include 'inc/bottom.php'?>