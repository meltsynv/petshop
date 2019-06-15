<?php
include "../inc/config.php";
if (isset($_POST['searchBtn'])){
    $input = $_POST['searchLabel'];
    $query = "SELECT * FROM user WHERE Vorname LIKE '%$input%'";
    $result  = mysqli_query($con, $query);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
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
                            <td> <button type="button" id="bearbeiten">bearbeiten</button></td>
                        </tr>
                    <?php }}
                else{
                    echo "fail";
                }?>
                </table>
            </div>
         </div>
    </div>


