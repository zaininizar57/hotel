<div class="container mb-4" style="margin-top: 30px;">
    <h1 class="text-center my-4">Fasilitas Kamar</h1>
    <?php
 $sql = "SELECT * FROM kamar";
 $query = mysqli_query($kon, $sql);
 while ( $row = mysqli_fetch_assoc($query)) {
 ?>
    <hr>
    <div class="row kamar mb-3">
        <div class="col-md-4">
            <img src="img/<?= $row['foto_kamar'] ?>" class="img-fluid rounded img-thumbnail W-100"
                style="height: 250px;">
        </div>
        <div class="col-md">
            <h2><a href="#"><?= $row['nama_kamar'] ?></a></h2>
            <?php
 $sql1 = "SELECT * FROM kamar JOIN fasilitas_kamar ON
kamar.id_kamar=fasilitas_kamar.id_kamar ";
 $query1 = mysqli_query($kon, $sql1);
 while ( $row1 = mysqli_fetch_assoc($query1)) {
 ?>
            <?= $row1['nama_fasilitas_kamar'] ?><br>
            <?php } ?>
            <p>
                Rp. <?= $row['harga_kamar'] ?> / malam
            </p>
        </div>
    </div>
    <?php } ?>
    <hr>
</div>