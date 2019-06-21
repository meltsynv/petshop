<?php include 'inc/head.php'?>
<?php include 'inc/nav-2.php';
    include 'inc/config.php';

//Überprüfung, ob Button "updateProdukt" geklickt wurde
if (isset($_POST['updateProdukt'])){
    //ID des gewünschten Artikels aus URL ablesen
    $id = $_GET['ID'];

    $query = "SELECT * FROM produkte INNER JOIN bewertungen WHERE produkte.ID = '$id'";
    $result = mysqli_query($con, $query);

    //Überprüfung, ob es einen DB-Eintrag gibt
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
                    <div class="col pr-0 mr-0"><img src="img/<?php echo $bild ?>" alt="" width="400px"></div>
                    <div class="col-4 pl-2 mr-0">
                        <h1><?php echo $name ?></h1><br><br>
                        <h5><?php echo $beschreibung ?></h5><br>
                        <h7><?php echo $stueck ?> Stück auf Lager</h7>

                    </div>
                </div>
                <div class="row ">
                    <div class="col-10 pr-0 ml-5 mr-0">
                    <br><h3><?php echo $preis ?>€</h3><p>
                            <!-- Button für Aktion: Artikel löschen -->
                    <form method="post" action="php/removeArtikel.php?ID=<?php echo $id ?>">
                        <button type="submit" name="removeArticle">löschen</button>
                    </form>
            <!-- Input um die Verfügbarkeit zu aktualisieren-->
                    <form method = 'post' action = 'php/updateVerfügbarkeit.php?ID=<?php echo $id ?>' >
                        <b>Verfügbarkeit:</b><br><br>
                        <input name="VerfuegbarkeitNeu" type="number" max="6.0" min="0.0" >
                        <button type="submit" name="updateVerfuegbarkeit">OK</button>
                    </form ><br>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <?php
    }

    } include 'inc/bottom.php'?>