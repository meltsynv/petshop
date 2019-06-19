<?php
include 'inc/head.php';
include 'inc/config.php';
$query = 'SELECT p.ID, p.Name, p.Beschreibung, p.Preis, p.Stueck, 
          FROM petshop.produkte p 
          INNER JOIN onlineshop.produktattribute h ON p.ID = h.Produkt_ID 
          ORDER BY p.ID';
$result = mysqli_query($con, $query);

$sum = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $anzahl = $row['Anzahl'];

    $sum = $sum + $anzahl;
}
?>

<?php include 'inc/head.php' ?>
    <div class="row">
        <div class="col-3 canvas_anzahlProdukte">
            <div class="canvas-section">
                <canvas id="canvas">Your Browser does not support the HTML5 Canvas</canvas>
                <div class="save_image">
                    <!-- TODO: save image -->
                    <!-- um ein Bild zu speichern, muss eine URL von dem Bild erstellt werden, diese kann dann als download benutzt werden
                    download="DownloadImage" ist ein Platzhalter für den Bild namen, PNG wird als defould gesetzt -->
                    <button class="btn_download">
                        <a href="#" id="btn-download" download="DownloadImage.png">
                            <i class="fas fa-download"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let canvas = document.getElementById('canvas');
        let ctx = canvas.getContext('2d');

        let btnDownload = document.getElementById('btn-download');

        ctx.font = "55px Arial";
        ctx.fillStyle = "#324246";
        ctx.textAlign = "center";

        ctx.moveTo(0, canvas.height / 2);
        ctx.textBaseline = "middle";
        ctx.fillText(<?php echo $sum ?>, canvas.width / 2, canvas.height / 2 - 10);

        ctx.font = "30px Arial";
        ctx.fillText('Anzahl der Produkte', canvas.width / 2, canvas.height / 2 + 45);

        btnDownload.addEventListener('click', function (e) {
            console.log('image Download');
            var dataURL = canvas.toDataURL('image/jpg');
            btnDownload.href = dataURL;
        });
    </script>
<?php include 'inc/bottom.php' ?>