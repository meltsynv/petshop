<?php include 'inc/head.php'?>
<div class="container">
    <form class="needs-validation" novalidate>
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">E-Mail</label>
                <input type="email" class="form-control" id="validationCustom01" placeholder="E-Mail Adresse" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Bitte eine E-Mail Adresse eingeben.</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Passwort</label>
                <input type="password" class="form-control" id="validationCustom02" placeholder="Passwort" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Bitte Passwort eingeben.</div>
            </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
        <a href="signUp.php">Registrieren</a>
    </form>
</div>
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