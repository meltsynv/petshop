<?php include "inc/head.php"?>
<div>
    <form class="form-inline my-2 my-lg-0" method="post" action="php/searchUser.php">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="searchLabel" id="output" onkeyup="searchq()" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" name="searchBtn" type="submit">Search</button>
    </form>
</div>
<div class="container">
    <button type="button" name="btnNutzer" onclick="parent.location='adminNutzerliste.php'">Nutzer</button>
    <button type="button" name="btnProdukte" onclick="parent.location='adminProduktübersicht.php'">Produkte</button>
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

<?php include "inc/bottom.php";