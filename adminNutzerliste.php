<?php include 'inc/head.php'?>
<?php
include 'inc/config.php';

$query = 'SELECT * FROM user';

$result = mysqli_query($con, $query);

?>

    <div class="container">
        <input type="text" name="search" id="search" class="form-control" placeholder="Nach Nutzer suchen..."/>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped" id="overview">
                    <tr>
                        <th scope="col">Vorname</th>
                        <th scope="col">Nachname</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $vorname = $row['Vorname'];
                        $nachname = $row['Nachname'];
                        $email = $row['Email'];
                        ?>
                        <tr>
                            <td><?php echo $vorname ?></td>
                            <td><?php echo $nachname ?></td>
                            <td><?php echo $email ?></td>
                            <td> <button type="button" id="bearbeiten">löschen</button></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <script>
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