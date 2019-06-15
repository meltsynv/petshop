<?php include 'inc/head.php'?>
<?php include 'inc/nav.php'?>

    <div class="d-flex flex-row bd-highlight mb-3">
        <img src="img/cat-1373903_640.jpg" alt="">


        <div class="d-flex flex-row bd-highlight">
            <div class="p-2 bd-highlight"><br><h2>Katzeleine</h2><p></div>
            <div class="p-2 bd-highlight">Flex item 2</div>
            <div class="p-2 bd-highlight">Flex item 3</div>
        </div>
    </div>

    <form class="needs-validation" novalidate action="php/removeArtikel.php" method="post">
    <button class="btn btn-primary" name="ArtikelLoeschen" type="submit">Artikel löschen</button>
    </form>
    <form class="needs-validation" novalidate action="php/updateVerfügbarkeit.php" method="post">
        <div class="col-md-4 mb-3">
            <label for="validationArtikel01">Verfügbarkeit anpassen</label>
            <input type="number" class="form-control" id="updateVerfügbarkeit" name="VerfuegbarkeitNeu" placeholder="VerfügbarkeitNeu" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <button class="btn btn-primary" name="updateVerfuegbarkeit" type="submit">OK</button>
    </form>

    <div>
        <form method = 'post' action = 'messages.php?view=$view' >
            <b>Kommentar und Bewertung hinterlassen:</b><br><br>
            Sehr gut<input type = 'radio' name = 'pm' value = '0' checked = 'checked' >
            Gut<input type = 'radio' name = 'pm' value = '1' >
            Befriedigend<input type = 'radio' name = 'pm' value = '1' >
            Ausreichend<input type = 'radio' name = 'pm' value = '1' >
            Schlecht<input type = 'radio' name = 'pm' value = '1' > <br>
            <textarea name = 'text' cols = '40' rows = '3' ></textarea ><br>
            <input type = 'submit' value = 'Abschicken' ></form ><br>
    </div>

<?php include 'inc/bottom.php'?>