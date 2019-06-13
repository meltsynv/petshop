<?php include 'inc/head.php'?>
    <div class="container">
        <form class="needs-validation" novalidate action="php/insertUser.php" method="post">
            <div class="col-md-4 mb-3">
                <label for="validationArtikel01">Bild</label>
                <input type="file" class="form-control" id="validationArtikel01" name="Bild" placeholder="picture" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Geben Sie bitte ein Bild ein.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationArtikel02">Name</label>
                <input type="text" class="form-control" id="validationArtikel02" name="Name" placeholder="Name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Geben Sie bitte den Namen des Artikels ein.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationArtikel03">Preis</label>
                <input type="number" class="form-control" id="validationArtikel03" name="Preis" placeholder="Preis" required>
                <div class="invalid-feedback">
                    Geben Sie bitte den Preis des Artikels ein.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationArtikel04">Beschreibung</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationArtikel04" name="Beschreibung" placeholder="Beschreibung" required>
                    <div class="invalid-feedback">
                        Geben Sie bitte eine Beschreibung ein.
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationArtikel05">Verfügbarkeit</label>
                <input type="password" class="form-control" id="validationArtikel05" name="Verfügbarkeit" placeholder="Verfügbarkeit" required>
                <div class="invalid-feedback">
                    Geben Sie bitte die Verfügbarkeit ein.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationArtikel06">Bewertung</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationArtikel06" name="Bewertung" placeholder="Bewertung" required>
                    <div class="invalid-feedback">
                        Geben Sie bitte eine Beschreibung ein.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" name="ArtikelHinzufügen" type="submit">Artikel hinzufügen</button>

        </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </div>
<?php include 'inc/bottom.php'?>