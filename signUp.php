<?php include 'inc/head.php'?>
<div class="container">
    <form class="needs-validation" novalidate action="php/insertUser.php" method="post">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Vorname</label>
            <input type="text" class="form-control" id="validationCustom01" name="Vorname" placeholder="First name" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Geben Sie bitte Ihren Vornamen ein.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Nachname</label>
            <input type="text" class="form-control" id="validationCustom02" name="Nachname" placeholder="Last name" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Geben Sie bitte Ihren Nachnamen ein.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom03">E-Mail Adresse</label>
            <input type="email" class="form-control" id="validationCustom03" name="Email" placeholder="E-Mail Adresse" required>
            <div class="invalid-feedback">
                Geben Sie bitte Ihre E-Mail Adresse ein.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustomUsername">Username</label>
            <div class="input-group">
                <input type="text" class="form-control" id="validationCustomUsername" name="Username" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Geben Sie bitte einen Usernamen ein.
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom04">Passwort</label>
            <input type="password" class="form-control" id="validationCustom04" name="Passwort" placeholder="Passwort" required>
            <div class="invalid-feedback">
                Geben Sie bitte ein Passwort ein.
            </div>
        </div>
    <button class="btn btn-primary" name="SubmitButton" type="submit">Abschicken</button>

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