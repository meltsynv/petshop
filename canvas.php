<?php
include 'inc/config.php';
$query = 'SELECT produkte.Stueck FROM produkte';
$result = mysqli_query($con, $query);

$sum = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $stueck = $row['Stueck'];

    $sum = $sum + $stueck;
}
?>

<?php
$query_2 = 'SELECT COUNT(*) FROM user';
$result_2 = mysqli_query($con, $query_2);

if($row_2 = mysqli_fetch_assoc($result_2)){
    $anzahl_nutzer = $row_2['COUNT(*)'];
}
?>

<?php
$query_3 = 'SELECT COUNT(*) FROM kaeufe';
$result_3 = mysqli_query($con, $query_3);

if($row_3 = mysqli_fetch_assoc($result_3)){
    $anzahl_kaeufe = $row_3['COUNT(*)'];
}
?>

<div class="row">
    <div class="col-3 canvas_anzahlProdukte">
        <div class="canvas-section">
            <canvas width="900px" id="canvas">Your Browser does not support the HTML5 Canvas</canvas>
        </div>
    </div>
</div>

<script>
    let canvas = document.getElementById('canvas');
    let ctx = canvas.getContext('2d');

    ctx.font = "55px Helvetica";
    ctx.fillStyle = "#000000";
    ctx.textAlign = "center";

    ctx.moveTo(0, canvas.height / 2);
    ctx.textBaseline = "middle";
    ctx.fillText(<?php echo $sum ?>, 150, canvas.height / 2 - 10);

    ctx.font = "30px Helvetica";
    ctx.fillText('Anzahl der Produkte', 150, canvas.height / 2 + 45);

    ctx.font = "55px Helvetica";
    ctx.fillText(<?php echo $anzahl_nutzer ?>, canvas.width - 450, canvas.height / 2 - 10);

    ctx.font = "30px Helvetica";
    ctx.fillText('Anzahl der Nutzer', canvas.width - 450, canvas.height / 2 + 45);

    ctx.font = "55px Helvetica";
    ctx.fillText(<?php echo $anzahl_kaeufe ?>, canvas.width - 150, canvas.height / 2 - 10);

    ctx.font = "30px Helvetica";
    ctx.fillText('Anzahl der Verkäufe', canvas.width - 150, canvas.height / 2 + 45);
</script>
