<?php include 'inc/head.php'?>
<?php include 'inc/nav.php';
    include 'inc/config.php';

    if (isset($_POST['updateProdukt'])){
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

        <div class="d-flex flex-row bd-highlight pl-3 pt-3 mb-3">
            <img src="<?php echo $bild ?>" alt="" width="400px">
            <div class="p-2 bd-highlight"><br><h1><?php echo $name ?></h1><br></div>
            <div class="d-flex flex-row bd-highlight">
                <div class=" p-2 bd-highlight"><br><h3><?php echo $beschreibung ?></h3><br></div>
                <div class="p-2 bd-highlight"><br><h3><?php echo $stueck ?> Stück auf Lager</h3><br></div>
                <div class="p-2 bd-highlight">
                    <br><h3><?php echo $preis ?>€</h3><p>

                </div>

            </div>
        </div>
    <form method="post" action="php/removeArtikel.php?ID=<?php echo $id ?>"><button type="submit" name="removeArticle">löschen</button></form>


        <div>
            <form method = 'post' action = 'php/updateVerfügbarkeit.php?ID=<?php echo $id ?>' >
                <b>Verfügbarkeit:</b><br><br>
                <input name="VerfuegbarkeitNeu" type="number" max="6.0" min="1.0" >
                <input type = 'submit' name = 'updateVerfuegbarkeit' >OK</form ><br>
        </div>

        <?php
    }

    } include 'inc/bottom.php'?>