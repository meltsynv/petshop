<?php
include "inc/head.php";
include "inc/nav-2.php";
include 'inc/config.php';

//SQL-Abfrage der DB
$query = 'SELECT * FROM user';
$result = mysqli_query($con, $query);

?>

    <div class="container">
        <input type="text" name="search" id="search" class="form-control" placeholder="Nach Nutzern suchen..."/>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped" id="overview">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Vorname</th>
                        <th scope="col">Nachname</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                    <?php
                    //Ausgabe der Ergebnisse
                    while ($row = mysqli_fetch_assoc($result)) {
                        $username = $row['Username'];
                        $vorname = $row['Vorname'];
                        $nachname = $row['Nachname'];
                        $email = $row['Email'];
                        ?>
                        <tr>
                            <td><?php echo $username ?></td>
                            <td><?php echo $vorname ?></td>
                            <td><?php echo $nachname ?></td>
                            <td><?php echo $email ?></td>
                            <td><form method="post" action="php/removeUser.php?Username=<?php echo $username ?>">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="NutzerLoeschen">löschen</button>
                                </form></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <script>
        //dynamische Suche mit Ausgabe in einer Tabelle
        $(document).ready(function () {
            $('#search').keyup(function () {
                search_table($(this).val());
            });

            function search_table(value) {
                $('#overview tr').each(function () {
                    var found = 'false';
                    $(this).each(function () {
                        if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                            found = 'true';
                        }
                    });
                    if (found == 'true') {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>

<?php include 'inc/bottom.php'?>